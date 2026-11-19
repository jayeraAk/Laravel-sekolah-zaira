<?php

namespace Database\Seeders;
use App\Models\Siswa;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create ([
            'nama'=> 'John Doe',
            'kelas' => 'XII IPA 1',
            'nis' => '1010234',
        ]);
    }
}
