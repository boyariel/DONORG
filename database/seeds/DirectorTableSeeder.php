<?php

use Illuminate\Database\Seeder;

class DirectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Director::create([
            'full_name' => 'Lucas Perez Rocha',
            'user_id' => \App\User::first()->id,
            'credential_id' => \App\User::first()->id
        ]);
    }
}
