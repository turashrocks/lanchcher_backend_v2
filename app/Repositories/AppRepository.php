<?php

namespace App\Repositories;

use App\Models\App;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AppRepository
 * @package App\Repositories
 * @version March 18, 2019, 8:51 am UTC
 *
 * @method App findWithoutFail($id, $columns = ['*'])
 * @method App find($id, $columns = ['*'])
 * @method App first($columns = ['*'])
*/
class AppRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'app_name',
        'app_description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return App::class;
    }
}
