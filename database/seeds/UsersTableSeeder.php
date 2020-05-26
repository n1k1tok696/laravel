<?php

use Illuminate\Database\Seeder;
use App\AuthLar;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\AuthLar::class, 5)->create();
        // factory(App\User::class, 5)->create();
    }
}
