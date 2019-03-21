<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Build
 * @package App\Models
 * @version March 18, 2019, 8:51 am UTC
 *
 * @property \App\Models\App app
 * @property string build_name
 * @property string config_file
 * @property integer app_id
 */
class Build extends Model
{

    public $table = 'builds';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'build_name',
        'config_file',
        'app_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'build_name' => 'string',
        'config_file' => 'string',
        'app_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function app()
    {
        return $this->belongsTo('App\Models\App');
    }
}
