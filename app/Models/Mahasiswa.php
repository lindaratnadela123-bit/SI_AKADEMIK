<?php

class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Budi Santoso',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Siti Aminah',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'nim' => '23003',
                'nama' => 'Agus Prasetyo',
                'prodi' => 'Teknik Komputer'
            ],
            [
                'nim' => '23004',
                'nama' => 'Rina Wulandari',
                'prodi' => 'Teknik Elektro'
            ],
            [
                'nim' => '230051',
                'nama' => 'Dewi Lestari',
                'prodi' => 'Teknik Mesin'
            ],
            [
                'nim' => '230016',
                'nama' => 'Andi Wijaya',
                'prodi' => 'Teknik Sipil'
            ],
            [
                'nim' => '123451',
                'nama' => 'Anto Susanto',
                'prodi' => 'Teknik Pertambangan'
            ],
            [
                'nim' => '567890',
                'nama' => 'Aldi Fajar',
                'prodi' => 'Teknik Geologi'
            ],
                        [
                'nim' => '000121',
                'nama' => 'Andi Suyandi',
                'prodi' => 'Teknik Perminyakan'
            ],
            [
                'nim' => '230108',
                'nama' => 'Dinda',
                'prodi' => 'Teknik Informatika'
            ]
        ];
    }

    public function getByNim($nim)
    {
        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] == $nim) {
                return $mhs;
            }
        }

        return null;
    }
}