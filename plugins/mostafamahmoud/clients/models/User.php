<?php namespace MostafaMahmoud\Clients\Models;

use Model;

/**
 * Model
 */
class User extends Model
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
    public $table = 'mostafamahmoud_clients_user';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'clientimg' => 'System\Models\File',
    ];

    public $belongsToMany = [
        'slide' => [
            /* define the model that links is related to */
            'MostafaMahmoud\Clients\Models\Slide',

            /* define the pivot table that links the the movies and genres */
            'table' => 'mostafamahmoud_clients_slides_user',

            /* set the order at which the links will be displayed by */
            'order' => 'id'
        ],
        'client' => [
            /* define the model that links is related to */
            'MostafaMahmoud\Clients\Models\Client',
    
            /* define the pivot table that links the the movies and genres */
            'table' => 'mostafamahmoud_clients_user_client',
    
            /* set the order at which the links will be displayed by */
            'order' => 'id'
        ]
    ];
}
