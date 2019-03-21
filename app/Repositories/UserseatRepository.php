<?php

namespace App\Repositories;

use App\Models\Userseat;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserseatRepository
 * @package App\Repositories
 * @version March 18, 2019, 8:54 am UTC
 *
 * @method Userseat findWithoutFail($id, $columns = ['*'])
 * @method Userseat find($id, $columns = ['*'])
 * @method Userseat first($columns = ['*'])
*/
class UserseatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_seat_name',
        'user_pc_uuid',
        'user_pc_name',
        'installation_date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Userseat::class;
    }
}
