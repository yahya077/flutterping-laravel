<?php

namespace Flutterping;

use Flutterping\Commands\FlutterpingCommand;
use Flutterping\Http\Controllers\InitializeController;
use Flutterping\Http\Middleware\HandleFlutterpingRequests;
use Flutterping\Resources\Action\AlertAction;
use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Renderable;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\Widgets\Text;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FlutterpingServiceProvider extends PackageServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->singleton(Flutterping::class);

        $this->registerRequestMacro();
        $this->registerResponseMacro();
    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('flutterping')
            ->hasConfigFile()
            ->hasCommand(FlutterpingCommand::class)
            ->hasMigrations([
                'create_flutterping_versions_table',
            ]);
    }

    protected function registerResponseMacro(): void
    {
        Response::macro('flutterpingAlert', function (string $stateId, string $alertMessage, string $alertType = 'info') {
            $color = match ($alertType) {
                'success' => Color::fromRGB(23, 173, 63),
                'warning' => Color::fromRGB(255, 255, 0),
                'error' => Color::fromRGB(255, 0, 0),
                default => Color::fromRGB(0, 0, 255),
            };

            return Response::json((new ActionEvent)->setStateId($stateId)->setAction((new AlertAction)->setContent((new Text($alertMessage)))->setColor($color))->toArray());
        });

        Response::macro('flutterping', function (Renderable $renderable) {
            return Response::json($renderable->render());
        });

        foreach (config('flutterping.apps') as $key => $app) {
            Route::domain($app['domain'])
                ->prefix($app['prefix'])
                ->middleware(array_merge([HandleFlutterpingRequests::class], $app['middlewares']))
                ->name('flutterping.')
                ->group(base_path(sprintf('routes/flutterping/%s.php', $key)))
                ->group(function () use ($key, $app) {
                    Route::post('/initialize', [$app['initialize_controller'] ?? InitializeController::class, $app['initialize_action'] ?? '__invoke'])
                        ->name(sprintf('%s.initialize', $key));
                });
        }

    }

    protected function registerRequestMacro(): void
    {
        // TODO: set up request macro
    }
}
