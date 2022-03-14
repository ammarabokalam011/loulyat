<?php

namespace App\Repositories;

use App\Models\category;
use App\Models\User;
use App\Repositories\BaseRepository;

/**
 * Class categoryRepository
 * @package App\Repositories
 * @version March 12, 2022, 11:31 pm UTC
*/

class UserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
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
        return User::class;
    }
}
