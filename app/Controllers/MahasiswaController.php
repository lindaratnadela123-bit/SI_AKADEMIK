<?php

namespace App\Controllers;

require_once __DIR__ . '/../Models/Mahasiswa.php';

use Mahasiswa;

class MahasiswaController
{
    public function index()
    {
        $model = new Mahasiswa();
        $mahasiswa = $model->getAll();
        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail($nim)
    {
        $model = new Mahasiswa();
        $mahasiswa = $model->getByNim($nim);
        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }
}