<?php namespace MostafaMahmoud\Wedo;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'MostafaMahmoud\Wedo\Components\Wedos' => 'wedos'
        ];

    }

    public function registerSettings()
    {
    }
}
