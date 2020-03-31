<?php namespace MostafaMahmoud\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {

        return [
            'MostafaMahmoud\Contact\Components\ContactForm' => 'contactform',
        ];

    }

    public function registerSettings()
    {
    }
}
