<?php

namespace App\Controllers;

require_once __DIR__ . '/../Models/Dosen.php';

use Dosen;

class DosenController
{
    public function index()
    {
        $model = new Dosen();
        $dosen = $model->getAll();
        require_once __DIR__ . '/../Views/dosen/index.php';
    }
}