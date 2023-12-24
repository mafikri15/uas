<?php

namespace App\Controllers;

class Penerbangan extends BaseController
{
    public function index()
    {
        $data['flights'] = $this->getFlights();
        return view ('Penerbangan', $data);
    }
    private function getFlights() {
        // Simulasikan pengambilan data dari database atau sumber data lainnya.
        $flights = [
            [
                'maskapai' => 'Maskapai A',
                'bandara_asal' => 'Bandara A',
                'bandara_tujuan' => 'Bandara B',
                'tanggal_keberangkatan' => '2023-11-01',
                'jam_keberangkatan' => '14:30',
                'nomor_penerbangan' => 'ABC123',
            ],
            // Tambahkan data penerbangan lainnya sesuai kebutuhan.
        ];

        return $flights;
    }
}