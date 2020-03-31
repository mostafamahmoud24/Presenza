<?php
namespace MostafaMahmoud\Footer\Components;

use Cms\Classes\ComponentBase;
use MostafaMahmoud\Footer\Models\Footer;

class Footers extends ComponentBase 
{

    public function componentDetails() {
        return [
                'name' => 'Footer Component',
                'description' => 'pre-styled Footer component for Presnza'
        ]; 
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'Footer Component',
                'description' => 'pre-styled Footer component for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getResultsOptions() {
        $db = Footer::all();

        $query = Footer::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

      public function onRun() {
        $this -> footer = $this -> loadFooter();
    }

    protected function loadFooter() {
        return Footer::all();
    }

    public $footer;

    }