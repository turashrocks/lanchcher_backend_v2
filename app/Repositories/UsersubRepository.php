<?php

namespace App\Repositories;

use App\Models\Usersub;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UsersubRepository
 * @package App\Repositories
 * @version March 18, 2019, 8:55 am UTC
 *
 * @method Usersub findWithoutFail($id, $columns = ['*'])
 * @method Usersub find($id, $columns = ['*'])
 * @method Usersub first($columns = ['*'])
*/
class UsersubRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_sub_name',
        'user_sub_expiry_date',
        'user_pcs_assigned',
        'user_sub_description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Usersub::class;
    }
}
