<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nama' => 'Daniel Silalahi',
            'jeniskelamin' => 'laki-laki',
            'telepon' => '081362109160',
            'prodi' => 'Teknologi Informasi',
            'semester' => '6',
            'kelas' => '321',
            'angkatan' => '2020',   
        ]);
    }
}
