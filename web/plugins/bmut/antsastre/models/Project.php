<?php namespace Bmut\Antsastre\Models;

use Model;

/**
 * Model
 */
class Project extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title','description'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'bmut_antsastre_projects';

    protected $jsonable = ['module'];

    public $attachOne = [
        'principal_image' => 'System\Models\File',
        'img_C' => 'System\Models\File',
        'img_E' => 'System\Models\File'
    ];


    public $attachMany = [
        'gallery' => 'System\Models\File',
        'img_slider_B' => 'System\Models\File'
    ];
}
