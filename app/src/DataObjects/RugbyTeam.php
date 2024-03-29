<?php

namespace SilverStripe\SportTest;

use SilverStripe\Forms\TextField;

class RugbyTeam extends Team
{
  private static $table_name = 'RugbyTeam';
  private static $db = [
    'Mascot' => 'Text',
    'Season' => 'Text'
  ];
  private static $defaults = [
    "Season" => "Winter"
  ];
  private static $belongs_many_many = [
    "Sportsman" => Sportsman::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Main', TextField::create('Mascot'));
    return $fields;
  }
}
