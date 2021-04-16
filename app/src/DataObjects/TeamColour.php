<?php

namespace SilverStripe\SportTest;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\FieldList;

class TeamColour extends DataObject
{
  private static $table_name = 'TeamColour';
  private static $db = [
    'Colour' => 'Varchar',
    'Hexadecimal' => 'Text'
  ];
  private static $has_many = [
    "Teams" => Team::class
  ];

  public function getCMSFields()
  {
    $fields = FieldList::create(TabSet::create('Root'));
    $fields->addFieldsToTab('Root.Main', [
      TextField::create('Colour')->setDescription('Enter the name of the colour'),
      TextField::create('Hexadecimal')->setDescription('Insert the hexadecimal value of colour, including # e.g. #FAFAFA'),
    ]);

    return $fields;
  }
}
