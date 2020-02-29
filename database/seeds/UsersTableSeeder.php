<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class)->create([
            'name' => 'Koko',
            'email' => 'koko@example.com',
        ]);

        factory(\App\User::class)->create([
            'name' => 'Vicky',
            'email' => 'vicky@example.com',
        ]);
    }
}
