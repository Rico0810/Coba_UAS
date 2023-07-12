<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Mahasiswa::insert([
            'nama' => 'Rani Salim',
            'nim' => '2440114781',
            'grade' => 98,
            'matakuliah_id' => 1
        ]);

        Mahasiswa::insert([
            'nama' => 'Mutia',
            'nim' => '2440183301',
            'grade' => 80,
            'matakuliah_id' => 3
        ]);

        Mahasiswa::insert([
            'nama' => 'Ratno',
            'nim' => '9981560019',
            'grade' => 70,
            'matakuliah_id' => 2
        ]);

        Mahasiswa::insert([
            'nama' => 'Salim AKun',
            'nim' => '0917729101',
            'grade' => 100,
            'matakuliah_id' => 4
        ]);
    }
}
