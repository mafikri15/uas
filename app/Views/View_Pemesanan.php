<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<body>
<div class="container pt-5">
    <a href="<?= base_url('pemesanan/tambah');?>" class="btn btn-success mb-2">Tambah Data</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Pemesanan Tiket</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Tanggal</th>
                            <th>Tujuan</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($all_data_pemesanan as $isi){?>
                            <tr>
                                <td><?= $isi['id_pemesanan'];?></td>
                                <td><?= $isi['nama'];?></td>
                                <td><?= $isi['tanggal_keberangkatan'];?></td>
                                <td><?= $isi['tujuan'];?></td>
                                <td>
                                    <a href="<?= base_url('pemesanan/edit/'.$isi['id_pemesanan']);?>" 
                                    class="btn btn-success">
                                    Edit</a>
                                    <a href="<?= base_url('pemesanan/hapus/'.$isi['id_pemesanan']);?>" 
                                    onclick="javascript:return confirm('Apakah ingin menghapus data pemesanan tiket ?')"
                                    class="btn btn-danger">
                                    Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

                </table>
            </div>
        </div>
    </div>
</div>
  </body>
<?= $this->endSection(); ?>
