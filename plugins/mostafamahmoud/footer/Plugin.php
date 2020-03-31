<?php namespace MostafaMahmoud\Footer;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'MostafaMahmoud\Footer\Components\Footers' => 'footer'
        ];

    }

    public function registerSettings()
    {
    }
}
