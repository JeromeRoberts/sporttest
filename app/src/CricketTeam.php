<?php

namespace SilverStripe\SportTest;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\ReadonlyField;

class CricketTeam extends Team
{
  private static $table_name = 'CricketTeam';

  private static $db = [
    'Season' => 'Text',
  ];

  private static $has_one = [
    'Logo' => Image::class,
  ];

  private static $belongs_many_many = [
    "Sportsman" => Sportsman::class,
  ];

  private static $owns = [
    'Logo',
  ];

  // Image upload:https://www.silverstripe.org/learn/lessons/v4/working-with-data-relationships-has-many-1
  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Main', ReadonlyField::create('Season', 'Season', 'Summer'));
    $fields->addFieldToTab('Root.Main', $uploader = UploadField::create('Logo'));
    $uploader->setFolderName('cricket-logos');
    $uploader->getValidator()->setAllowedExtensions(['png', 'gif', 'jpeg', 'jpg']);

    return $fields;
  }
}
