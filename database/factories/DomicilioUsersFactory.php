<?php

namespace Database\Factories;

use App\Models\DomicilioUsers;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DomicilioUsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DomicilioUsers::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        User::factory()->create();
        $user = User::orderBy('id', 'desc')->first();
        return [
            'domicilio' => $this->faker->sentence(),
            'numero_exterior' => $this->faker->biasedNumberBetween(1,50),
            'colonia' => $this->faker->sentence(),
            'cp' =>$this->faker->biasedNumberBetween(1,9000),
            'ciudad' => $this->faker->city(),
            'user_id' => $user,
        ];
    }
}
