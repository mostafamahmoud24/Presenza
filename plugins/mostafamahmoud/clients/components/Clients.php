<?php
namespace MostafaMahmoud\Clients\Components;

use Cms\Classes\ComponentBase;
use MostafaMahmoud\Clients\Models\Client;

class Clients extends ComponentBase 
{

    public function componentDetails() {
        return [
                'name' => 'Our Clients Component',
                'description' => 'pre-styled Our Clients component for Presnza'
        ]; 
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'Our Clients Component',
                'description' => 'pre-styled Our Clients component for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getResultsOptions() {
        $db = Client::all();

        $query = Client::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

      public function onRun() {
        $this -> clients = $this -> loadClients();
    }

    protected function loadClients() {
        return Client::all();
    }

    public $clients;

    }