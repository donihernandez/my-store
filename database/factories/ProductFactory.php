<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->userName,
            'description' => $this->faker->realText(),
            'price' => 20,
            'status' => $this->faker->shuffleString(),
            'stock' => 20,
            'warranty' => true,
            'cart_id' => 1
        ];
    }
}
