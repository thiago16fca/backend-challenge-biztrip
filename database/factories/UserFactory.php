<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domain\UserRole;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            "id" => $this->faker->uuid(),
            "role" => UserRole::User,
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "password" => $this->faker->password()
        ];
    }
}
