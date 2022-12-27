<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// harus diimport database facadesnya
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Libertus', 'nip' => 1826417],
            ['id' => 2, 'name' => 'Ferdian', 'nip' => 124917289],
            ['id' => 3, 'name' => 'Siti', 'nip' => 91827912],
        ];

        DB::table('teachers')->insert($data);
    }
}
