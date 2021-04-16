<?php

namespace SilverStripe\SportTest;

use SilverStripe\Admin\ModelAdmin;

class TeamAdmin extends ModelAdmin
{
  private static $menu_title = 'Teams';
  private static $url_segment = 'team';
  private static $managed_models = [
    CricketTeam::class,
    RugbyTeam::class,
    TeamColour::class
  ];
  private static $menu_icon = 'icons/team.svg';
}
