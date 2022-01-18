<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'notel'=> $this->faker->mobileNumber($countryCodePrefix=null),
            'order'=> $this->faker->jpjNumberPlate(),
            'address'=> $this->faker->townState(),
        ];
    }
}
