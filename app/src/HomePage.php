<?php

namespace SilverStripe\SportTest;

use Page;

use SilverStripe\ORM\ArrayList;

class HomePage extends Page
{
  // Function 1
  public function allBlacks()
  {
    $teamAllBlacks = Team::get()
      ->filter([
        'Name' => 'All Blacks',
      ])
      ->first();

    $teamColourAllBlacks = TeamColour::get()
      ->byID($teamAllBlacks->getField('TeamColourID'));

    $rugbyTeamAllBlacks = RugbyTeam::get()
      ->byID($teamAllBlacks->getField('ID'));

    $allBlackDetails = new ArrayList;
    $arrayItems = [
      'TeamName' => $teamAllBlacks->getField('Name'),
      'Type' => $teamAllBlacks->getField('Type'),
      'Colour' => $teamColourAllBlacks->getField('Colour'),
      'Mascot' => $rugbyTeamAllBlacks->getField('Mascot'),
      'Season' => $rugbyTeamAllBlacks->getField('Season'),
      'Players' => $this->getPlayers($teamAllBlacks->getField('ID'))
    ];
    $allBlackDetails->push($arrayItems);
    return $allBlackDetails;
  }

  // Function 2
  public function getJeff()
  {
    $jeff = Sportsman::get()
      ->filter([
        'Name' => 'Jeff Wilson',
      ])
      ->first();

    $jeffsTeams = new ArrayList;
    $arrayItems = [
      'Name' => $jeff->getField('Name'),
      'Teams' => $this->getTeams($jeff->getField('ID')),
    ];
    $jeffsTeams->push($arrayItems);

    return $jeffsTeams;
  }

  public function getTeams($playerID)
  {
    $teams = Team::get()->filter(['Sportsmen.ID' => $playerID]);
    return $teams;
  }

  public function getPlayers($teamID)
  {
    $players = Sportsman::get()->filter(['Teams.ID' => $teamID]);
    return $players;
  }
}
