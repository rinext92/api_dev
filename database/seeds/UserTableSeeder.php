<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create('App\User');
      foreach (range(1,10) as $index) {
        $gender = $faker->randomElement(['male', 'female']);
          DB::table('user_table')->insert([
              'username' => $faker->userName,
              'password' => bcrypt('secret'),
              'email' => $faker->email,
              'address' => $faker->address,
              'phone_number' => $faker->e164PhoneNumber,
              'fullname' => $faker->name($gender),
              'age' => $faker->numberBetween($min = 18, $max = 90),
              'gender' => $gender,
              'active' => $faker->numberBetween($min = 0, $max = 1),
              'api_token' => str_random(60),
          ]);
        }
    }
}
