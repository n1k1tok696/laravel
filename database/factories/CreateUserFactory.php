<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AuthLar;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(AuthLar::class, function (Faker $faker) {
  $email = $faker->unique()->email;
  $password = $faker->password();
  
  echo PHP_EOL . 'Email: ' . $email . PHP_EOL; 
  echo 'Password: ' . $password . PHP_EOL;


  return [
      'first_name' => $faker->firstName,
      'last_name' => $faker->lastName,
      'email' => $email,
      'email_verified_at' => now(),
      'password' => Hash::make($password),
      'remember_token' => Str::random(10),
  ];
});