<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator;

class UnitSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Generator::class);

        DB::table('units')->insert([
            'name' => 'Hospital General Atlántida',
            'Address' =>'La Ceiba, Atlántida',
            'acronym' => 'HGA',
            'created_at'=> $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
            'updated_at'=> $faker->dateTimeBetween($startDate = '-1 day', $endDate = 'now'),
        ]);
    }
}
