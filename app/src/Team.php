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
    'Season' => 'Text',
  ];
  private static $has_one = [
    'TeamColour' => TeamColour::class,
  ];
  public function getCMSFields()
  {
    $fields = FieldList::create(TabSet::create('Root'));
    $fields->addFieldsToTab('Root.Main', [
      TextField::create('Name'),
      ReadonlyField::create('Type', 'Game code', $this->getSportCode()),
      TextField::create('Season', 'Season', 'Summer')->setDisabled(true),
      DropdownField::create('TeamColourID', 'Team Colour', TeamColour::get()->map('ID', 'Name'))->setEmptyString('(Select one)'),
    ]);

    return $fields;
  }

  public function populateDefaults()
  {
    $this->Type = $this->getSportCode();
    parent::populateDefaults();
  }
  
  public function getSportCode()
  {
    $reflectionClass = new \ReflectionClass($this);
    return $reflectionClass->getShortName();
  }
}
