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
 * @property string $Name
 * @property string $NameAr
 * @property string $Image
 * @property string $Description
 * @property string $Specification
 * @property integer $Price
 * @property integer $Quantity
 * @property boolean $Available
 * @property integer $CategoryID
 */
class product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Name' => 'string',
        'NameAr' => 'string',
        'Image' => 'string',
        'Description' => 'string',
        'Specification' => 'string',
        'Price' => 'integer',
        'Quantity' => 'integer',
        'Available' => 'boolean',
        'CategoryID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Name' => 'required|string|max:255',
        'NameAr' => 'required|string|max:255',
        'Image' => 'nullable|string',
        'Description' => 'required|string',
        'Specification' => 'required|string',
        'Price' => 'required|integer',
        'Quantity' => 'required|integer',
        'Available' => 'required|boolean',
        'CategoryID' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
