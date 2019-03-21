<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Usersub
 * @package App\Models
 * @version March 18, 2019, 8:55 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property integer id
 * @property date user_sub_expiry_date
 * @property integer user_pcs_assigned
 * @property string user_sub_description
 */
class Usersub extends Model
{

    public $table = 'user-subs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'id',
        'user_sub_expiry_date',
        'user_pcs_assigned',
        'user_sub_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_sub_expiry_date' => 'date',
        'user_pcs_assigned' => 'integer',
        'user_sub_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'user_sub_expiry_date' => 'required',
        'user_pcs_assigned' => 'required',
        'user_sub_description' => 'required'
    ];


    public function user()
    {
        return $this->hasOne('App\Models\User', 'id');
    }
}
