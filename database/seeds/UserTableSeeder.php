<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::create([
            'id' => 1,
            'name' => 'Director',
        ]);
        \App\Models\Role::create([
            'id' => 2,
            'name' => 'Doctor',
        ]);
        \App\Models\Role::create([
            'id' => 3,
            'name' => 'Enfermer@',
        ]);

        App\User::create([
            'name' => 'root',
            'email' => 'root@gmail.com',
            'password' => bcrypt('admin123'),
            'is_power_user' => '1',
            'role_id' => 1
        ]);
    }
}
