<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 1; $i <= 40; $i++) {
            $user = new User;
            $user->email = $faker->unique()->email;
            $user->name = $faker->firstName($gender = 'male'|'female') . ' ' . $faker->lastName;
            $user->password = $faker->numberBetween($min = 1, $max = 1000);
            $user->save();
        }
    }
}
