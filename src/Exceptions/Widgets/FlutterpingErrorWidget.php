<?php

namespace Flutterping\Exceptions\Widgets;

use Flutterping\Resources\Core\CoreDouble;
use Flutterping\Resources\Paintings\BorderRadius;
use Flutterping\Resources\Paintings\BoxDecoration;
use Flutterping\Resources\Paintings\EdgeInsetsPadding;
use Flutterping\Resources\Renderings\CrossAxisAlignment;
use Flutterping\Resources\Renderings\MainAxisAlignment;
use Flutterping\Resources\UI\Color;
use Flutterping\Resources\Widgets\Card;
use Flutterping\Resources\Widgets\Column;
use Flutterping\Resources\Widgets\Container;
use Flutterping\Resources\Widgets\Divider;
use Flutterping\Resources\Widgets\Expanded;
use Flutterping\Resources\Widgets\Icon;
use Flutterping\Resources\Widgets\Icons;
use Flutterping\Resources\Widgets\Row;
use Flutterping\Resources\Widgets\Scaffold;
use Flutterping\Resources\Widgets\SizedBox;
use Flutterping\Resources\Widgets\Text;
use Flutterping\Resources\Widgets\Widget;

class FlutterpingErrorWidget extends Widget
{
    protected const BRAND_RED = [241, 70, 104];

    protected const BRAND_BLUE = [49, 130, 206];

    protected const DARK_TEXT = [45, 55, 72];

    protected const LIGHT_TEXT = [113, 128, 150];

    protected const LIGHTER_TEXT = [160, 174, 192];

    protected const DARK_BG = [30, 41, 59];

    protected const LIGHT_BG = [247, 250, 252];

    protected const HIGHLIGHT_BG = [237, 242, 247];

    public function __construct(
        protected string $errorCode,
        protected string $errorMessage,
        protected ?array $debugInfo = null
    ) {}

    /**
     * Build the error widget
     */
    public function buildWidget(): Widget
    {
        // Build the main column with all content
        $mainColumn = new Column;
        $mainColumn->setCrossAxisAlignment(CrossAxisAlignment::stretch());
        $mainColumn->setMainAxisAlignment(MainAxisAlignment::start());

        // Add the error header section
        $children = [
            $this->buildErrorHeader(),
            $this->buildDivider(),
            $this->buildErrorDetails(),
        ];

        // If we have debug info, add the debug section
        if ($this->debugInfo && config('app.env') !== 'production') {
            $children[] = $this->buildDivider();
            $children[] = $this->buildDebugSection();
        }

        $mainColumn->setChildren($children);

        // Build the main container
        $mainContainer = new Container;
        $mainContainer->setColor(Color::fromRGB(...self::LIGHT_BG));
        $mainContainer->setChild($mainColumn);

        // Build the scaffold
        $scaffold = new Scaffold;
        $scaffold->setBody($mainContainer);

        return $scaffold;
    }

    /**
     * Build the error header section
     */
    protected function buildErrorHeader(): Widget
    {
        // Container for the header
        $container = new Container;
        $container->setColor(Color::fromRGB(...self::BRAND_RED));
        $container->setPadding(EdgeInsetsPadding::all(20.0));

        // Header content
        $headerContent = new Column;
        $headerContent->setCrossAxisAlignment(CrossAxisAlignment::start());
        $headerContent->setMainAxisAlignment(MainAxisAlignment::center());

        // Error icon and title in a row
        $titleRow = new Row;
        $titleRow->setCrossAxisAlignment(CrossAxisAlignment::center());
        $titleRow->setMainAxisAlignment(MainAxisAlignment::start());

        $errorIcon = new Icon(Icons::warning());
        $errorIcon->setColor(Color::white());
        $errorIcon->setSize(new CoreDouble(28));

        $errorTitle = new Text("Error: {$this->errorCode}");
        // If you had a TextStyle class, you'd set it up here

        $titleRow->setChildren([
            $errorIcon,
            new SizedBox(new CoreDouble(12), null),
            $errorTitle,
        ]);

        // Error message
        $errorMessage = new Text($this->errorMessage);
        // Set text style for message

        $headerContent->setChildren([
            $titleRow,
            new SizedBox(null, new CoreDouble(16)),
            $errorMessage,
        ]);

        $container->setChild($headerContent);

        return $container;
    }

    /**
     * Build a divider
     */
    protected function buildDivider(): Widget
    {
        $divider = new Divider;
        // Set color if needed

        return $divider;
    }

    /**
     * Build error details section
     */
    protected function buildErrorDetails(): Widget
    {
        $container = new Container;
        $container->setPadding(EdgeInsetsPadding::all(20.0));

        // Main content
        $content = new Column;
        $content->setCrossAxisAlignment(CrossAxisAlignment::start());
        $content->setMainAxisAlignment(MainAxisAlignment::start());

        // Request information
        $requestInfo = new Column;
        $requestInfo->setCrossAxisAlignment(CrossAxisAlignment::start());

        // Section title
        $sectionTitle = new Text('Request Information');
        // Set text style (bold, etc.)

        $requestDetails = [];

        // Add request method and URL
        if (request()->method() && request()->url()) {
            $requestMethodRow = $this->buildInfoRow(
                'Method',
                request()->method()
            );

            $requestUrlRow = $this->buildInfoRow(
                'URL',
                request()->url()
            );

            $requestDetails[] = $requestMethodRow;
            $requestDetails[] = new SizedBox(null, new CoreDouble(8));
            $requestDetails[] = $requestUrlRow;
        }

        // Add request time
        $requestTimeRow = $this->buildInfoRow(
            'Time',
            date('Y-m-d H:i:s')
        );
        $requestDetails[] = new SizedBox(null, new CoreDouble(8));
        $requestDetails[] = $requestTimeRow;

        // Add environment info
        $envRow = $this->buildInfoRow(
            'Environment',
            config('app.env')
        );
        $requestDetails[] = new SizedBox(null, new CoreDouble(8));
        $requestDetails[] = $envRow;

        $requestInfo->setChildren(array_merge(
            [$sectionTitle, new SizedBox(null, new CoreDouble(16))],
            $requestDetails
        ));

        $content->setChildren([
            $requestInfo,
        ]);

        $container->setChild($content);

        return $container;
    }

    /**
     * Build the debug section with stack trace
     */
    protected function buildDebugSection(): Widget
    {
        $container = new Container;
        $container->setPadding(EdgeInsetsPadding::all(20.0));
        $container->setColor(Color::fromRGB(...self::HIGHLIGHT_BG));

        // Debug content column
        $debugContent = new Column;
        $debugContent->setCrossAxisAlignment(CrossAxisAlignment::start());

        // Section title
        $debugTitle = new Text('Debug Information');
        // Set text style (bold, color, etc.)

        $debugItems = [
            $debugTitle,
            new SizedBox(null, new CoreDouble(16)),
        ];

        // Exception info
        if (isset($this->debugInfo['exception'])) {
            $exceptionRow = $this->buildInfoRow(
                'Exception',
                $this->debugInfo['exception']
            );
            $debugItems[] = $exceptionRow;
            $debugItems[] = new SizedBox(null, new CoreDouble(8));
        }

        // File and line
        if (isset($this->debugInfo['file']) && isset($this->debugInfo['line'])) {
            $fileRow = $this->buildInfoRow(
                'Location',
                $this->debugInfo['file'].':'.$this->debugInfo['line']
            );
            $debugItems[] = $fileRow;
            $debugItems[] = new SizedBox(null, new CoreDouble(16));
        }

        // Stack trace
        if (isset($this->debugInfo['trace']) && is_array($this->debugInfo['trace'])) {
            $traceTitle = new Text('Stack Trace');
            // Set text style

            $debugItems[] = $traceTitle;
            $debugItems[] = new SizedBox(null, new CoreDouble(12));

            $count = 0;
            foreach ($this->debugInfo['trace'] as $index => $trace) {
                if ($count++ > 10) {
                    break; // Limit to 10 entries to prevent overwhelming the UI
                }

                // Trace entry number
                $entryNumber = $index + 1;

                // Create a container for the trace item
                $traceContainer = new Container;
                $traceContainer->setPadding(EdgeInsetsPadding::all(12.0));
                // Add border radius and background color to look like a card
                $decoration = new BoxDecoration;
                $decoration->setColor(Color::white());
                $borderRadius = BorderRadius::fromRadius(4.0);
                $decoration->setBorderRadius($borderRadius);
                $traceContainer->setDecoration($decoration);

                // Trace content
                $traceContent = new Column;
                $traceContent->setCrossAxisAlignment(CrossAxisAlignment::start());

                $traceItems = [];

                // Function call
                if (isset($trace['function'])) {
                    $function = isset($trace['class']) ? $trace['class'].$trace['type'].$trace['function'] : $trace['function'];
                    $functionRow = $this->buildInfoRow('Function', $function);
                    $traceItems[] = $functionRow;
                    $traceItems[] = new SizedBox(null, new CoreDouble(8));
                }

                // File and line
                if (isset($trace['file']) && isset($trace['line'])) {
                    $locationRow = $this->buildInfoRow('Location', $trace['file'].':'.$trace['line']);
                    $traceItems[] = $locationRow;
                }

                $traceContent->setChildren($traceItems);
                $traceContainer->setChild($traceContent);

                $debugItems[] = $traceContainer;
                $debugItems[] = new SizedBox(null, new CoreDouble(12));
            }
        }

        $debugContent->setChildren($debugItems);
        $container->setChild($debugContent);

        return $container;
    }

    /**
     * Build an info row with label and value
     */
    protected function buildInfoRow(string $label, string $value): Widget
    {
        $row = new Row;
        $row->setCrossAxisAlignment(CrossAxisAlignment::start());

        // Label with fixed width
        $labelContainer = new Container;
        $labelContainer->setWidth(new CoreDouble(100));

        $labelText = new Text($label.':');
        // Set label text style

        $labelContainer->setChild($labelText);

        // Value
        $valueText = new Text($value);
        // Set value text style

        // Create an expanded widget for the value to take remaining space
        $expandedValue = new Expanded;
        $expandedValue->setChild($valueText);

        $row->setChildren([
            $labelContainer,
            $expandedValue,
        ]);

        return $row;
    }

    /**
     * Get the type of widget
     */
    public function getType(): string
    {
        return $this->buildWidget()->getType();
    }

    /**
     * Convert to array
     */
    public function toArray(): ?array
    {
        return $this->buildWidget()->toArray();
    }
}
