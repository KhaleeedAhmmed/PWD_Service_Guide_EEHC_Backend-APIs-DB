<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'name' => 'super_admin',
            'email' => 'admin@admin.com',
            'type' => 1,
            'password' => Hash::make('123456789')
        ]);

           $this->seedUsers();


    }

    private function seedUsers()
    {
        User::factory(15)->create();
    }

}
