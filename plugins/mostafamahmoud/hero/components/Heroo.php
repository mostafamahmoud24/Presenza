<?php
namespace MostafaMahmoud\Hero\Components;

use Cms\Classes\ComponentBase;
use MostafaMahmoud\Hero\Models\Hero;

class Heroo extends ComponentBase 
{

    public function componentDetails() {
        return [
                'name' => 'Hero Component',
                'description' => 'pre-styled Hero component for Presnza'
        ]; 
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'Hero Component',
                'description' => 'pre-styled Hero component for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getResultsOptions() {
        $db = Hero::all();

        $query = Hero::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

      public function onRun() {
        $this -> hero = $this -> loadHero();
    }

    protected function loadHero() {
        return Hero::all();
    }

    public $hero;

    }