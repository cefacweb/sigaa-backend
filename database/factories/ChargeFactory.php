<?php

namespace Database\Factories;

use Domain\Entities\Payment\Charge;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChargeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Charge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => '94b0c070-184c-4be8-b518-73e6e0a79b76',
            'value' => '10',
            'type' => 'single'
        ];
    }
}
