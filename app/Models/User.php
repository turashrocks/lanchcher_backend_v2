<?php

namespace App\Models;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class User
 * @package App\Models
 * @version March 18, 2019, 8:56 am UTC
 *
 * @property \App\Models\Group group
 * @property \App\Models\Role role
 * @property \App\Models\UserSeat userSeat
 * @property \App\Models\UserSub userSub
 * @property string name
 * @property string email
 * @property string password
 * @property string user_address
 * @property string user_contact_number
 * @property integer role_id
 * @property integer group_id
 * @property string remember_token
 */
class User extends Model
{

    use SoftDeletes, HasApiTokens, Notifiable;
    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'name',
        'email',
        'password',
        'user_address',
        'user_contact_number',
        'role_id',
        'group_id',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'address' => 'string',
        'user_contact_number' => 'string',
        'role_id' => 'integer',
        'group_id' => 'integer',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'user_address' => 'required',
        'user_contact_number' => 'required',
    ];

     /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }

    public function userseat()
    {
        return $this->hasOne('App\Models\Userseat', 'id');
    }

    public function usersub()
    {
        return $this->hasOne('App\Models\Usersub', 'id');
    }
}
