<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use CodeIgniter\HTTP\ResponseInterface;

class RegistrationController extends BaseController
{
    public function index()
    {
        helper(['form']); // Memuat helper form

        return view('registration/index');
    }

    public function register()
    {
        helper(['form']); // Memuat helper form

        // Validasi formulir
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[customers.email]',
            'password' => 'required|min_length[6]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->to('/registration')->withInput()->with('errors', $validation->getErrors());
        }

        // Simpan data pelanggan ke database
        $customerModel = new CustomerModel();
        $customerModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        // Redirect setelah pendaftaran sukses
        return redirect()->to('/login')->with('success', 'Pendaftaran berhasil. Silakan login.');
    }
}
