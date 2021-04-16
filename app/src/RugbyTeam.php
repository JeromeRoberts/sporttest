<?php

namespace SilverStripe\SportTest;

use SilverStripe\Forms\TextField;
use SilverStripe\Forms\ReadonlyField;

class RugbyTeam extends Team
{
  private static $table_name = 'RugbyTeam';
  private static $db = [
    'Mascot' => 'Text',
  ];
  private static $belongs_many_many = [
    "Sportsman" => Sportsman::class,
  ];

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Main', ReadonlyField::create('Season', 'Season', 'Winter'));
    $fields->addFieldToTab('Root.Main', TextField::create('Mascot'));
    
    return $fields;
  }
}
