<?php namespace MostafaMahmoud\Clients\Models;

use Model;

/**
 * Model
 */
class Client extends Model
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
    public $table = 'mostafamahmoud_clients_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'clientimg' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'user' => [
            /* define the model that links is related to */
            'MostafaMahmoud\Clients\Models\User',
    
            /* define the pivot table that links the the movies and genres */
            'table' => 'mostafamahmoud_clients_user_clients',
    
            /* set the order at which the links will be displayed by */
            'order' => 'id'
        ]
    ];
}
