<?php

namespace SilverStripe\Project;

use PageController;

class HomePageController extends PageController
{
  private static $allowed_actions = [
    'showAllBlacks',
    'showJeffWilson'
  ];

  public function showAllBlacks()
  {
  }

  public function showJeffWilson()
  {
  }
}
