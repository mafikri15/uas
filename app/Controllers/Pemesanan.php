<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\PemesananModel;

class Pemesanan extends Controller
{
    public function index()
    {
        $model = new PemesananModel;
        $all_data_pemesanan = $model->findAll();

        return view('view_pemesanan', ['all_data_pemesanan' => $all_data_pemesanan]);
    }

    public function tambah()
    {
        $model = new PemesananModel;
        $data['title']     = 'Tambah Tiket Pemesanan';
        $all_data_pemesanan = $model->findAll();

        return view('view_tambah', ['all_data_pemesanan' => $all_data_pemesanan]);
    }
    public function add()
    {
        $model = new PemesananModel;
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'tanggal_keberangkatan' => $this->request->getPost('tanggal_keberangkatan'),
            'tujuan'  => $this->request->getPost('tujuan'),
        );
        $model->savePemesanan($data);
        echo '<script>
                alert("Sukses Tambah Tiket Pemesanan");
                window.location="'.base_url('Pemesanan').'"
            </script>';

    }

    public function edit($id)
    {
        $data['ids']     = $id;
            return view('view_edit',  $data);
    }

    public function update()
    {
        $model = new PemesananModel;
        $id = $this->request->getPost('id_pemesanan');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'tanggal_keberangkatan'=> $this->request->getPost('tanggal_keberangkatan'),
            'tujuan'  => $this->request->getPost('tujuan'),
           
        );
        $model->update($id, $data);
        echo '<script>
                alert("Sukses Edit Data Pemesanan");
                window.location="'.base_url('Pemesanan').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new PemesananModel;

                    // Hapus data
            if (!$model->delete($id)) {
                return redirect()->to("/pemesanan")->with('error', 'Delete failed.');
            }

            // Commit transaksi jika berhasil
            $model->transComplete();
            return redirect()->to("/pemesanan")->with('success', 'Data delete successfully.');

            // Tidak perlu redirect, bisa langsung render view atau response lainnya


    }

}