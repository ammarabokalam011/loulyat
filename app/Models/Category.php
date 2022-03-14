<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class category
 * @package App\Models
 * @version March 12, 2022, 11:31 pm UTC
 *
 * @property integer $parentID
 * @property string $name
 * @property string $nameAr
 * @property string $image
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'parentID',
        'name',
        'nameAr',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'parentID' => 'integer',
        'name' => 'string',
        'nameAr' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'parentID' => 'nullable',
        'name' => 'string|max:255',
        'nameAr' => 'string|max:255',
        'image' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
