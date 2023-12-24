<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Validasi data login
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($this->request->getMethod() === 'post') {
            if ($validation->withRequest($this->request)->run()) {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                // Di sini Anda dapat melakukan verifikasi username dan password
                // Misalnya, dengan menghubungkan ke database.

                // Contoh sederhana: Verifikasi username dan password.
                if ($username === 'pengguna' && $password === 'passwordku') {
                    $session = session();
                    $session->set('user_id', 1);

                    // Redirect ke halaman setelah login.
                    return redirect()->to('Home');
                } else {
                }
            }
        }

        return view('Login');
    }
    public function logout()
    {
        // Menghapus sesi dan mengarahkan pengguna ke halaman login
        $session = session();
        $session->destroy(); // Hapus semua data sesi.

        return redirect()->to('Login'); // Redirect ke halaman login.
    }
}
