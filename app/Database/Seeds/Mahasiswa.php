<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm'     => '2017051031',
                'nama'    => 'Melan Caniadi',
                'alamat'  => 'lampung',
                'deskripsi' => 'belajar web lanjut asik',
                'created_at' => Time::now()
            ],
            [
                'npm'     => '2017051045',
                'nama'    => 'Aura',
                'alamat'  => 'WM',
                'deskripsi' => 'belajar web seru',
                'created_at' => Time::now()
            ],
            [
                'npm'     => '2017051000',
                'nama'    => 'natlus',
                'alamat'  => 'Bandung',
                'deskripsi' => 'belajar web',
                'created_at' => Time::now()
            ],
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
