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
                'description' => 'pre-styled navbar for Presnza'
            ]
        ];
    }

    public function onRun() {
        $this -> navbar = $this -> loadNavbar();
    }

    protected function loadNavbar() {
        return Navbar::all();
    }

    public $navbar;

}