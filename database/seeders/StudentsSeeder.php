<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Membuar array untuk memasukan data dalam tabel
        $data = [
            ['id' => 1, 'name' => 'Yan', 'score' => 100],
            ['id' => 2, 'name' => 'Eka', 'score' => 90],
            ['id' => 3, 'name' => 'Putra', 'score' => 96],
        ];

        //Mengasosiasikan tabel mana yang akan di seede=ing
        DB::table('students') -> insert($data);
    }
}
