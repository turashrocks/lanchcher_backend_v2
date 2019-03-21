<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\Group;

/**
 * Class App
 * @package App\Models
 * @version March 18, 2019, 8:51 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Build
 * @property \Illuminate\Database\Eloquent\Collection Group
 * @property string app_name
 * @property string app_description
 */
class App extends Model
{

    public $table = 'apps';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'app_name',
        'app_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'app_name' => 'string',
        'app_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'app_name' => 'required',
        'app_description' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function build()
    {
        return $this->hasMany('App\Models\Build')->withTimestamps();
    }


    public function group()
    {
        //return $this->belongsToMany('App\Models\Group','group_app');
        return $this->belongsToMany(Group::class,'group_app')->withTimestamps()->withPivot('app_id', 'group_id');
    }
}
