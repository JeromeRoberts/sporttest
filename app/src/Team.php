<?php

namespace SilverStripe\SportTest;


use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\ReadonlyField;
class Team extends DataObject
{

  private static $table_name = 'Team';
  private static $db = [
    'Name' => 'Varchar',
    'Type' => 'Text',
    'Season' => 'Text'
  ];
  private static $has_many = [
    'Colour' => TeamColour::class,
  ];

  public function getCMSFields()
  {
    $fields = FieldList::create(TabSet::create('Root'));
    $fields->addFieldsToTab('Root.Main', [
      TextField::create('Name'),
      ReadonlyField::create('Type', 'Code', (new \ReflectionClass($this))->getShortName()),
      DropdownField::create('Colour', 'Team Colour', TeamColour::get()->map('ID', 'Name')) ->setEmptyString('(Select one)'),
    ]);

    return $fields;
  }
}

