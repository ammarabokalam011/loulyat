<?php

namespace App\Repositories;

use App\Models\product;
use App\Repositories\BaseRepository;

/**
 * Class productRepository
 * @package App\Repositories
 * @version March 12, 2022, 11:32 pm UTC
*/

class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Name',
        'NameAr',
        'Image',
        'Description',
        'Specification',
        'Price',
        'Quantity',
        'Available',
        'CategoryID'
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
        return product::class;
    }
}
