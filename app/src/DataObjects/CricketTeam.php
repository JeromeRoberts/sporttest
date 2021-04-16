<?php

namespace SilverStripe\SportTest;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\TextField;

class CricketTeam extends Team
{
  private static $table_name = 'CricketTeam';
  private static $db = [
  ];
  private static $defaults = [
    "Season" => "Summer"
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

  public function getCMSFields()
  {
    $fields = parent::getCMSFields();
    $fields->addFieldToTab('Root.Main', $uploader = UploadField::create('Logo'));
    $uploader->setFolderName('cricket-logos');
    $uploader->getValidator()->setAllowedExtensions(['png', 'gif', 'jpeg', 'jpg']);

    return $fields;
  }
}
