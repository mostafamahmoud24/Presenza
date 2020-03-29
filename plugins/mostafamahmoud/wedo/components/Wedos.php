<?php
namespace MostafaMahmoud\Wedo\Components;

use Cms\Classes\ComponentBase;
use MostafaMahmoud\Wedo\Models\Wedo;

class Wedos extends ComponentBase 
{

    public function componentDetails() {
        return [
                'name' => 'What We Do Component',
                'description' => 'pre-styled What We Do component for Presnza'
        ]; 
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'What We Do Component',
                'description' => 'pre-styled What We Do component for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getResultsOptions() {
        $db = Wedo::all();

        $query = Wedo::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

      public function onRun() {
        $this -> wedos = $this -> loadWedo();
    }

    protected function loadWedo() {
        return Wedo::all();
    }

    public $wedos;

    }