<?php

namespace MostafaMahmoud\Contact\Components;


use Cms\Classes\ComponentBase;
use MostafaMahmoud\Contact\Models\Contact;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
use ValidationException;
use Validation;


class ContactForm extends ComponentBase
{

    public function componentDetails() {
        return [
            'name' => 'Contact Form Component',
                'description' => 'pre-styled contact Form component for Presnza'
        ];
    }

    public function defineProperties() {
        return [
            'results' => [
                'name' => 'Contact Form Component',
                'description' => 'pre-styled contact Form component for Presnza',
                'type' => 'dropdown'
            ]
        ];
    }

    public function onSend() {

        $validator = Validator::make(
            [
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'content' => Input::get('content')
            ],
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'content' => 'required',
            ]
        );

        if ($validator->fails()) {

            // $this['results'] = $validator->messages()->first();
            // return Redirect::to('#contact')->withErrors($validator);
            throw new ValidationException($validator);
            
        }else {

            // These variables are available inside the message as Twig
            $vars = ['name' => Input::get('name'), 'email' => Input::get('email'), 'content' => Input::get('content')];

            Mail::send('mostafamahmoud.contact::mail.message', $vars, function($message) {

            $message->to('95mostafamahmoud@gmail.com', 'Admin Person');
            $message->subject('Presenza contact form test');
            });
        }
    }

    public function getResultsOptions() {
        $db = Contact::all();

        $query = Contact::all()->take(count($db))->all();
  
        $arr = array();
        foreach ($query as $q) {
          $arr = array_merge($arr, array($q->name => $q->name));
        }
  
        return $arr;
      }

      public function onRun() {
        $this -> contact = $this -> loadContact();
    }

    protected function loadContact() {
        return Contact::all();
    }

    public $contact;
}
