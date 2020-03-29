<?php namespace MostafaMahmoud\Wedo\Models;

use Model;

/**
 * Model
 */
class Wedo extends Model
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
    public $table = 'mostafamahmoud_wedo_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'component' => [
            /* define the model that links is related to */
            'MostafaMahmoud\Wedo\Models\Component',

            /* define the pivot table that links the the movies and genres */
            'table' => 'mostafamahmoud_wedo_component_wedo_',

            /* set the order at which the links will be displayed by */
            'order' => 'id'
        ]
    ];

    
}
