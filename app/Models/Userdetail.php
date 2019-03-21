<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Userdetail
 * @package App\Models
 * @version March 18, 2019, 8:53 am UTC
 *
 * @property integer id
 * @property string user_name
 * @property string user_address
 * @property string user_contact_number
 */
class Userdetail extends Model
{

    public $table = 'user-details';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'id',
        'user_name',
        'user_address',
        'user_contact_number'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_name' => 'string',
        'user_address' => 'string',
        'user_contact_number' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_name' => 'required',
        'user_address' => 'required',
        'user_contact_number' => 'required'
    ];

    
}
