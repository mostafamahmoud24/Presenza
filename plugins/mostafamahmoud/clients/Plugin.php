<?php namespace MostafaMahmoud\Clients;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'MostafaMahmoud\Clients\Components\Clients' => 'clients'
        ];

    }

    public function registerSettings()
    {
    }
}
