<?php
namespace MostafaMahmoud\Navbar\Components;

use Cms\Classes\ComponentBase;
use MostafaMahmoud\Navbar\Models\Navbar;

class Nav extends ComponentBase 
{

    public function componentDetails() {
        return [
            'results' => [
                'name' => 'Navbar Component',
                'description' => 'pre-styled navbar for Presnza'
            ]
        ]; 
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'Navbar Component',
                'description' => 'pre-styled navbar for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getResultsOptions() {
        $db = Navbar::all();

        $query = Navbar::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

    public function onRun() {
        $this -> navbar = $this -> loadNavbar();
    }

    protected function loadNavbar() {
        return Navbar::all();
    }

    public $navbar;

}