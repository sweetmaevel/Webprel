<?php

namespace App\Repositories;

use App\Models\table;
use App\Repositories\BaseRepository;

/**
 * Class tableRepository
 * @package App\Repositories
 * @version October 4, 2021, 5:27 pm UTC
*/

class tableRepository extends BaseRepository
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
        return table::class;
    }
}
