<?php

namespace SilverStripe\SportTest;

use SilverStripe\Admin\ModelAdmin;

class SportsmanAdmin extends ModelAdmin
{
    private static $menu_title = 'Sportsmen';
    private static $url_segment = 'sportsmen';
    private static $managed_models = [
        Sportsman::class,
    ];
    private static $menu_icon = 'icons/sportsman.svg';
}
