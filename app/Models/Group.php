<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;
use App\Models\App;

/**
 * Class Group
 * @package App\Models
 * @version March 18, 2019, 8:52 am UTC
 *
 * @property \App\Models\App app
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string group_name
 * @property string group_description´
 */
class Group extends Model
{

    public $table = 'groups';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'group_name',
        'group_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'group_name' => 'string',
        'group_description' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'group_name' => 'required',
        'group_description' => 'required'
    ];

 
    public function app()
    {
        return $this->belongsToMany(App::class,'group_app')->withTimestamps()->withPivot('app_id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function user()
    {
        return $this->hasMany('App\Models\User')->withTimestamps();
    }
}
