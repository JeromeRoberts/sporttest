<?php
namespace SilverStripe\Project;

use PageController;    

// https://www.silverstripe.org/learn/lessons/v4/working-with-multiple-templates-1
class HomePageController extends PageController 
{
    private static $allowed_actions = [
        'showAllBlacks',
        'showJeffWilson'
    ];

    // https://www.silverstripe.org/learn/lessons/v4/introduction-to-the-orm-1
    public function showAllBlacks()
    {
        return RugbyTeam::get()
    }

    public function showJeffWilson()
    {
        die('it works');
    }
}