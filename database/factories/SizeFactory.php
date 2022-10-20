<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Size>
 */
class SizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this -> faker -> unique() -> randomElement(['XS','S','M','L','XL','XXL','2XL','0-3 Months','3-6 Months', '6-9 Months', '9-12 Months', '12-18 Months', '18-24 Months', '4-5 Years','5-6 Years','6-7 Years', '7-8 Years', '8-9 Years', '9-10 Years']),
        ];
    }
}
