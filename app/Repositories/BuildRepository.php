<?php

namespace App\Repositories;

use App\Models\Build;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BuildRepository
 * @package App\Repositories
 * @version March 18, 2019, 8:51 am UTC
 *
 * @method Build findWithoutFail($id, $columns = ['*'])
 * @method Build find($id, $columns = ['*'])
 * @method Build first($columns = ['*'])
*/
class BuildRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'build_name',
        'config_file',
        'app_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Build::class;
    }
}
