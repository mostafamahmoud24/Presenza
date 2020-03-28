<?php namespace MostafaMahmoud\Navbar;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'MostafaMahmoud\Navbar\Components\Nav' => 'navbar'
        ];

    }

    public function registerSettings()
    {
    }
}
