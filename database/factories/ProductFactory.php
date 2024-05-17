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
        // Generate a unique slug
        $slug = $this->faker->unique()->slug;

        // Generate a unique SKU
        $SKU = $this->faker->unique()->word;

        return [
            'name' => $this->faker->name,
            'slug' => $slug,
            'description' => $this->faker->text,
            'regular_price' => $this->faker->randomFloat(2, 10, 100), // Adjust as needed
            'sale_price' => $this->faker->randomFloat(2, 5, 50), // Adjust as needed
            'SKU' => $SKU,
            'stock_status' => $this->faker->randomElement(['instock', 'outofstock']),
            'featured' => $this->faker->boolean,
            'quantity' => $this->faker->numberBetween(1, 100), // Adjust as needed
            'image' => null, // Handle null image in application logic
            'images' => null, // Adjust as needed
            'category_id' => null // Adjust as needed
        ];
    }
}
