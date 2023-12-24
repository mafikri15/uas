<?php

namespace App\Controllers;

class Account_Bank extends BaseController
{
    public function index()
    {
        return view('Account_Bank');
        $validation = \Config\Services::validation();
        $validation->setRules([
            'id'=> 'required',
            'nama_pemilik' => 'required',
            'nomor_rekening' => 'required',
            'saldo' => 'required|numeric',
        ]);

        if ($this->request->getMethod() === 'post') {
            if ($validation->withRequest($this->request)->run()) {
                // Ambil data dari formulir.
                $id = $this->request->getPost('id');
                $nama_pemilik = $this->request->getPost('nama_pemilik');
                $nomor_rekening = $this->request->getPost('nomor_rekening');
                $saldo = $this->request->getPost('saldo');

                // Simpan data ke database atau sumber data lainnya.
                // Anda perlu menggantikan ini dengan logika sesungguhnya.

                // Redirect ke halaman setelah penambahan akun bank.
                return redirect()->to('Account_Bank');
    }
}
    }
}