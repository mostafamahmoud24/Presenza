<?php namespace MostafaMahmoud\Navbar\Models;

use Model;

/**
 * Model
 */
class Navbar extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'mostafamahmoud_navbar_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /* Defining the relation between the logo and the navbar component */
    public $attachOne = [
        'logo' => 'System\Models\File'
    ];

    /* defining the relation between the links and navbar */
    
    public $belongsToMany = [
        'link' => [
            /* define the model that navbar is related to */
            'MostafaMahmoud\Navbar\Models\Link',

            /* define the pivot table that links the the links and navbars */
            'table' => 'mostafamahmoud_navbar_navabr_links',

            /* set the order at which the navbars will be displayed by */
            'order' => 'id'
        ]
    ];
}
