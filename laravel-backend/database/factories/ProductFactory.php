<?php

namespace Database\Factories;

use App\Models\Category;
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

    public function definition(): array
    {
        $category = [
            'Electronics',
            'Fashion',
            'Health & Beauty',
            'Home & Living',
            'Groceries & Food',
            'Toys & Baby',
            'Sports & Outdoors',
            'Automotive',
            'Books, Music & Movies',
            'Pets & Animals',
        ];

        return [
            'barcode' => $this->faker->unique()->ean13(),
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'quantity' => $this->faker->numberBetween(1, 100),
            'category' => $this->faker->randomElement($category)
        ];
    }
}
