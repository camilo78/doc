<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        DB::table('users')->insert([
            'name' => 'Camilo Alvarado',
            'email' => 'camilo.alvarado0501@gmail.com',
            'email_verified_at' => now(),
            'status' => true,
            'password' =>  Hash::make('milogaqw'),
            'created_at'=> $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
            'updated_at'=> $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
        ]);

        DB::table('users')->insert([
            'name' => 'Antoniza Developer',
            'email' => 'antoniza.developer@gmail.com',
            'email_verified_at' => now(),
            'status' => true,
            'password' =>  Hash::make('lol123'),
            'created_at'=> $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
            'updated_at'=> $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
        ]);
    }
}
