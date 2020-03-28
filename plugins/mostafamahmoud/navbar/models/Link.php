<?php namespace MostafaMahmoud\Navbar\Models;

use Model;

/**
 * Model
 */
class Link extends Model
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
    public $table = 'mostafamahmoud_navbar_links';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* defining the relation between the links and navbar */
    public $belongsToMany = [
        'navbar' => [
            /* define the model that links is related to */
            'MostafaMahmoud\Navbar\Models\Navbar',

            /* define the pivot table that links the the movies and genres */
            'table' => 'mostafamahmoud_navbar_navabr_links',

            /* set the order at which the links will be displayed by */
            'order' => 'name'
        ]
    ];
}
