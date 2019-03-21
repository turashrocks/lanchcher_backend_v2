<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Userseat
 * @package App\Models
 * @version March 18, 2019, 8:54 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection User
 * @property string user_seat_name
 * @property string user_pc_uuid
 * @property string user_pc_name
 * @property date installation_date
 * @property boolean status
 */
class Userseat extends Model
{

    public $table = 'user-seats';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'id',
        'user_pc_uuid',
        'user_pc_name',
        'installation_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_pc_uuid' => 'string',
        'user_pc_name' => 'string',
        'installation_date' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id' => 'required',
        'user_pc_uuid' => 'required',
        'user_pc_name' => 'required',
        'installation_date' => 'required',
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id');
    }
}
