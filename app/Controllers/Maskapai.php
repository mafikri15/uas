<?php 
namespace App\Controllers;

class Maskapai extends BaseController
{
    public function index()
    {
        $data = [
            'title'=> 'Daftar Maskapai Penerbangan',
        ];
        return view('Maskapai', $data);
    }
}