<?php

namespace Database\Factories;

use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'name' => $this->faker->word,
        'nameAr' => $this->faker->word,
        'image' => $this->faker->text,
        'description' => $this->faker->text,
        'specification' => $this->faker->text,
        'price' => $this->faker->randomDigitNotNull,
        'quantity' => $this->faker->randomDigitNotNull,
        'available' => $this->faker->word,
        'categoryID' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
