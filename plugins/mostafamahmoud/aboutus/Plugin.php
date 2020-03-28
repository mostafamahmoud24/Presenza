<?php namespace MostafaMahmoud\AboutUs;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'MostafaMahmoud\Aboutus\Components\About' => 'Aboutus'
        ];

    }

    public function registerSettings()
    {
    }
}
