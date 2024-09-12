<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10000) as $index) {
            DB::table('tblmember')->insert([
                'member_id_number' => $faker->sentence,
                'member_birthday' => now(),
                'member_place_birth' => $faker->sentence,
                'member_name' => $faker->sentence,
                'member_gender' => $faker->numberBetween(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
