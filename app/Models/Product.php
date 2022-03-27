<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class product
 * @package App\Models
 * @version March 12, 2022, 11:32 pm UTC
 *
 * @property string $name
 * @property string $nameAr
 * @property string $image
 * @property string $description
 * @property string $specification
 * @property integer $price
 * @property integer $quantity
 * @property boolean $available
 * @property integer $categoryID
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'nameAr',
        'image',
        'description',
        'specification',
        'price',
        'quantity',
        'available',
        'categoryID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'nameAr' => 'string',
        'image' => 'string',
        'description' => 'string',
        'specification' => 'string',
        'price' => 'integer',
        'quantity' => 'integer',
        'available' => 'boolean',
        'categoryID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'nameAr' => 'required|string|max:255',
        'image' => 'required',
        'description' => 'required|string',
        'specification' => 'required|string',
        'price' => 'required|integer',
        'quantity' => 'required|integer',
        'available' => 'required|boolean',
        'categoryID' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
