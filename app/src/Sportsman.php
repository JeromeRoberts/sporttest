<?php

namespace SilverStripe\SportTest;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Forms\TabSet;
use SilverStripe\Forms\FieldList;

class Sportsman extends DataObject
{
  private static $table_name = 'Sportsman';
  private static $db = [
    'Name' => 'Varchar'
  ];
  private static $many_many = [
    "Teams" => Team::class
  ];

  public function getCMSFields()
  {
    $fields = FieldList::create(TabSet::create('Root'));
    $fields->addFieldsToTab('Root.Main', [
      TextField::create('Name'),
      CheckboxSetField::create(
        'Teams',
        'Selected categories',
        Team::get()->map('ID', 'Name')
      )
    ]);

    return $fields;
  }
}
