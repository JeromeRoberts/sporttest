<?php

namespace SilverStripe\SportTest;

use SilverStripe\Admin\ModelAdmin;

class CricketTeamAdmin extends ModelAdmin
{

  private static $menu_title = 'Cricket Team';

  private static $url_segment = 'cricket_team';

  private static $managed_models = [
    CricketTeam::class,
  ];

  private static $menu_icon = 'icons/cricket.svg';
}
