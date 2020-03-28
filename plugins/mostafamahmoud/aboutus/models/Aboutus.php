<?php namespace MostafaMahmoud\AboutUs\Models;

use Model;

/**
 * Model
 */
class Aboutus extends Model
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
    public $table = 'mostafamahmoud_aboutus_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /* defining the relation between the video upload and the About us model */

    public $attachOne = [
        'video' => 'System\Models\File',
        'videoimg' => 'System\Models\File'
    ];
    

    
}
