<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FakkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); //Membuat data faker berdasarkan id negara dan ID merupakan id untuk Indonesia

        //Melakukan pengulangan untuk pemanggilan 19 nama random untuk tabel 'students'
        for($i = 1; $i <= 20; $i++){

        DB::table('students') -> insert([
            'name' => $faker -> name,
            'score' => $faker -> numberBetween(0,100)
        ]);
        }
    }
}
