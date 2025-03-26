<?php

namespace Flutterping\Resources\UI;

use Flutterping\Resources\Contracts\ColorInterface;
use Flutterping\Resources\Renderable;
class ThemeData extends Renderable
{
    protected ColorInterface $primaryColor;
    protected ColorInterface $primarySwatch;
    protected ColorInterface $scaffoldBackgroundColor;
    protected ColorInterface $dialogBackgroundColor;
    protected ColorInterface $canvasColor;
    protected ColorInterface $cardColor;
    protected ColorInterface $dividerColor;
    protected ColorInterface $focusColor;
    protected ColorInterface $hoverColor;
    protected ColorInterface $highlightColor;
    protected ColorInterface $splashColor;
    protected ColorInterface $unselectedWidgetColor;
    protected ColorInterface $disabledColor;
    protected ColorInterface $secondaryHeaderColor;
    protected ColorInterface $indicatorColor;
    protected ColorInterface $shadowColor;
    protected AppBarTheme $appBarTheme;
    protected BottomNavigationBarThemeData $bottomNavigationBarThemeData;
}
