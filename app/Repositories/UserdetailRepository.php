<?php

namespace App\Repositories;

use App\Models\Userdetail;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserdetailRepository
 * @package App\Repositories
 * @version March 18, 2019, 8:53 am UTC
 *
 * @method Userdetail findWithoutFail($id, $columns = ['*'])
 * @method Userdetail find($id, $columns = ['*'])
 * @method Userdetail first($columns = ['*'])
*/
class UserdetailRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'user_name',
        'user_address',
        'user_contact_number'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Userdetail::class;
    }
}
