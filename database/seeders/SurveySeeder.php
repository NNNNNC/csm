<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SurveySeeder extends Seeder
{
    public function run()
    {
        // $faker = Faker::create();
        
        // $officeServices = [
        //     1 => [1, 2, 3],
        //     2 => [4, 5, 6],
        //     3 => [7, 8, 9],
        //     4 => [10, 11, 12],
        //     5 => [13, 14, 15],
           
        // ];

        // for ($i = 0; $i < 500; $i++) {
        //     $awareness = $faker->numberBetween(1, 4);
        //     $visibility = ($awareness == 1) ? 0 : $faker->numberBetween(1, 5);
        //     $helpfulness = ($awareness == 1) ? 0 : $faker->numberBetween(1, 4);
            
        //     // Pick a random office
        //     $officeId = $faker->numberBetween(1, 5);
            
        //     // Get a service based on the office
        //     $service = $faker->randomElement($officeServices[$officeId]);

        //     DB::table('surveys')->insert([
        //         'client_type' => $faker->randomElement(['Citizen', 'Business', 'Government']),
        //         'date' => $faker->dateTimeBetween('2023-01-01', '2024-12-31')->format('Y-m-d'),
        //         'age' => $faker->numberBetween(20, 60),
        //         'sex' => $faker->randomElement(['Male', 'Female']),
        //         'office_visited' => $officeId,
        //         'service' => $service,
        //         'awareness' => $awareness,
        //         'visibility' => $visibility,
        //         'helpfulness' => $helpfulness,
        //         'SQD0' => $faker->numberBetween(1, 5),
        //         'SQD1' => $faker->numberBetween(1, 5),
        //         'SQD2' => $faker->numberBetween(1, 5),
        //         'SQD3' => $faker->numberBetween(1, 5),
        //         'SQD4' => $faker->numberBetween(1, 5),
        //         'SQD5' => $faker->numberBetween(1, 5),
        //         'SQD6' => $faker->numberBetween(1, 5),
        //         'SQD7' => $faker->numberBetween(1, 5),
        //         'SQD8' => $faker->numberBetween(1, 5),
        //         'comments' => $faker->optional()->sentence(),
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
        
    }
}