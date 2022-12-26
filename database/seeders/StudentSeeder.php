<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Nuryanto', 'score' => 80],
            ['id' => 2, 'name' => 'Ahmad', 'score' => 85],
            ['id' => 3, 'name' => 'Budi', 'score' => 90],
        ];

        DB::table('students')->insert($data);
    }
}
