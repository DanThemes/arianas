<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Support\Str;
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
        $name = $this->faker->name();
        $datetime = $this->faker->dateTimeBetween('-10 days', 'now');
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'quantity' => rand(1,3),
            'price' => $this->faker->name(),
            'description' => $this->faker->paragraph(3),
            'image' => basename($this->faker->image(storage_path('app/public'))),
            'status' => true,
            'featured' => (rand(1, 8) >= 6),
            'created_at' => $datetime,
            'updated_at' => $datetime,
        ];
    }
}
