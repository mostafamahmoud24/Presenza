<?php
namespace MostafaMahmoud\Aboutus\Components;

use Cms\Classes\ComponentBase;
use MostafaMahmoud\Aboutus\Models\Aboutus;

class About extends ComponentBase 
{

    public function componentDetails() {
        return [
                'name' => 'About Us Component',
                'description' => 'pre-styled About Us component for Presnza'
        ]; 
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'About Us Component',
                'description' => 'pre-styled About component for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getResultsOptions() {
        $db = Aboutus::all();

        $query = Aboutus::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

      public function onRun() {
        $this -> aboutus = $this -> loadAbout();
    }

    protected function loadAbout() {
        return Aboutus::all();
    }

    public $aboutus;

    }