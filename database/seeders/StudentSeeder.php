<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('students')->insert([
            'nim' => '2031710006',
            'name' => 'Mareta Rosa Anjellina',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '089601517838',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710114',
            'name' => 'M. Zidfi Rohmatu R',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '08961110171',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710142',
            'name' => 'M.Hifdzi Maulana',
            'class' => 'MI 2E',
            'department' => 'MI',
            'phone_number' => '08950153713',
        ]);
    }
}
    

