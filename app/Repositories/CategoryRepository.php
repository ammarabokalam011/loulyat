<?php

namespace App\Repositories;

use App\Models\category;
use App\Repositories\BaseRepository;

/**
 * Class categoryRepository
 * @package App\Repositories
 * @version March 12, 2022, 11:31 pm UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'parentID',
        'name',
        'nameAr',
        'image'
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
        return category::class;
    }
}
