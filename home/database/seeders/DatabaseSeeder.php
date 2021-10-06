<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create(
        [
            'first_name' => 'Admin_name',
            'last_name' => 'Admin_surname',
            'phone_number' => '123456789',
            'location_id' => '1',
            'type_id' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
