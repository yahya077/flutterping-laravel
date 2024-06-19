<?php

namespace Flutterping;

use Flutterping\Resources\Action\AlertAction;
use Flutterping\Resources\Event\ActionEvent;
use Flutterping\Resources\Renderable;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\Widgets\Text;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Flutterping\Commands\FlutterpingCommand;

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
            ->hasCommand(FlutterpingCommand::class);
    }

    protected function registerResponseMacro(): void
    {
        Response::macro('flutterpingAlert', function (string $alertMessage, string $alertType = 'info') {
            $color = match ($alertType) {
                'success' => Color::fromRGB(23, 173, 63),
                'warning' => Color::fromRGB(255, 255, 0),
                'error' => Color::fromRGB(255, 0, 0),
                default => Color::fromRGB(0, 0, 255),
            };
            return Response::json((new ActionEvent())->setAction((new AlertAction())->setContent((new Text($alertMessage)))->setColor($color))->toArray());
        });

        Response::macro('flutterping', function (Renderable $renderable) {
            return Response::json($renderable->render());
        });
    }

    protected function registerRequestMacro(): void
    {
        // TODO: set up request macro
    }
}
