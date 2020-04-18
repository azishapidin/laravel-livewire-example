<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $payload = collect([]);

    	for ($i = 1; $i <= 100; $i++) {
            $payload->push([
    			'name'  => $faker->name,
    			'email' => $faker->email,
    			'password' => bcrypt(\Str::random(20)),
    		]);
        }

        DB::table('users')->insert($payload->toArray());
    }
}
