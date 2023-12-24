<!-- <?php

namespace App\Controllers\Master;
use App\Controllers\BaseController;
use App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    public function index()
    {
        $Pemesanan = new PemesananModel ();
        $data = [
            'nama_pemesan' => $this->request->getPost('nama_pemesan'),
            'tanggal_keberangkatan' => $this->request->getPost('tanggal_keberangkatan'),
            'tujuan' => $this->request->getPost('tujuan'),
        ];
        return view('Master/view_pemesanan',$data);
    
    }
} -->