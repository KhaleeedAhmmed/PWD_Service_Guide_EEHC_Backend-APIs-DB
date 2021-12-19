<?php

namespace Database\Factories;

use App\Models\User;
use App\Traits\FileManagement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    use FileManagement;
    /**
     * The name of the factory"s corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model"s default state.
     *
     * @return array
     */
    public function definition()
    {
        $folder = $this->uniqueDirName("Users");
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->unique()->safeEmail(),
            "email_verified_at" => now(),
            "password" => Hash::make("Us20er20"),
            "access_token" => "",
            "remember_token" => Str::random(10),
        ];
    }

    // /**
    //  * Indicate that the model"s email address should be unverified.
    //  *
    //  * @return \Illuminate\Database\Eloquent\Factories\Factory
    //  */
    // public function unverified()
    // {
    //     return $this->state(function (array $attributes) {
    //         return [
    //             "email_verified_at" => null,
    //         ];
    //     });
    // }

}
