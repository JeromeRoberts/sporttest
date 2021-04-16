<?php

namespace SilverStripe\SportTest;

use SilverStripe\Admin\ModelAdmin;

class RugbyTeamAdmin extends ModelAdmin
{

  private static $menu_title = 'Rugby Team';

  private static $url_segment = 'rugby_team';

  private static $managed_models = [
    RugbyTeam::class,
  ];

  private static $menu_icon = 'icons/rugby.svg';
}
