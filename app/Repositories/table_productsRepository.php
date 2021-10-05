<?php

namespace App\Repositories;

use App\Models\table_products;
use App\Repositories\BaseRepository;

/**
 * Class table_productsRepository
 * @package App\Repositories
 * @version October 4, 2021, 5:34 pm UTC
*/

class table_productsRepository extends BaseRepository
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
        return table_products::class;
    }
}
