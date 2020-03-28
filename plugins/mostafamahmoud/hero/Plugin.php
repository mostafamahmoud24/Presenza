<?php namespace MostafaMahmoud\Hero;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'MostafaMahmoud\Hero\Components\Heroo' => 'hero'
        ];
    }

    public function registerSettings()
    {
    }
}
