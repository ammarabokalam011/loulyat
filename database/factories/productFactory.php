<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Name' => $this->faker->word,
        'NameAr' => $this->faker->word,
        'Image' => $this->faker->text,
        'Description' => $this->faker->text,
        'Specification' => $this->faker->text,
        'Price' => $this->faker->randomDigitNotNull,
        'Quantity' => $this->faker->randomDigitNotNull,
        'Available' => $this->faker->word,
        'CategoryID' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
