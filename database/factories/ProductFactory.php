<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'price' =>  '15.21',
            'set_id' => '16',
                  'color_id' => '14',
                  'size_id'=> $this -> faker -> unique() -> randomElement(['5','8','11','14','16','18']),
           'category_id' => '2',
                  'member_id' => '2',


        ];
    }
}
