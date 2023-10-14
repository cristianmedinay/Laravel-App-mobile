<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition(): array
    {
        return [
            //
            'description'=>$this->faker->sentence(),
            'stock'=>$this->faker->numberBetween(1, 100),
            'category_id'=>$this->faker->numberBetween(1, 3)
            ,'created_at' => now(),
            'updated_at' => now(),
            

        ];
    }
}
