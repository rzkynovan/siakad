<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::insert([
            [
                'keterangan' => 'guru'
            ],
            [
                'keterangan' => 'kesiswaan'
            ],
            [
                'keterangan' => 'waka'
            ],
            [
                'keterangan' => 'sarpra'
            ],
        ]);
    }
}
