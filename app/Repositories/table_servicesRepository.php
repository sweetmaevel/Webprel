<?php

namespace App\Repositories;

use App\Models\table_services;
use App\Repositories\BaseRepository;

/**
 * Class table_servicesRepository
 * @package App\Repositories
 * @version October 4, 2021, 6:04 pm UTC
*/

class table_servicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return table_services::class;
    }
}
