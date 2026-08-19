<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama' => 'Fadhli',
                'kelas' => 'XI PPLG 1',
            ],
            [
                'nama' => 'Andi',
                'kelas' => 'XI PPLG 1',
            ],
            [
                'nama' => 'Budi',
                'kelas' => 'XI PPLG 2',
            ],
        ]);
    }
}