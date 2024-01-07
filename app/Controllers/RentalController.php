<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\CarModel;


class RentalController extends BaseController
{
    public function index()
    {
        // Tampilkan daftar mobil
        $carModel = new CarModel();
        $data['cars'] = $carModel->findAll();

        return view('rental/index', $data);
    }
}
