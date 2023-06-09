<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $name = $faker->name;
            $email = $faker->email;
            $emailVerifiedAt = $faker->dateTimeThisMonth();
            $createdAt = $faker->dateTimeBetween('-1 year', 'now');
            $updatedAt = $faker->dateTimeBetween($createdAt, 'now');

            DB::table('users')->insert([
                'name' => $name,
                'email' => $email,
                'email_verified_at' => $emailVerifiedAt,
                'course' => 'BSIT',
                'is_active' => '1',
                'created_at' => $createdAt,
                'updated_at' => $updatedAt
            ]);
        }
    }
}