
<div class="container p-5">
    <a href="<?= base_url('pemesanan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Tambah Pemesanan tiket</h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pemesanan/add');?>">
            <input type="hidden" name="id_pemesanan">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Tanggal_keberangkatan</label>
                    <input type="text" name="tanggal_keberangkatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">tujuan</label>
                    <input type="text" name="tujuan" class="form-control" required>
                </div>
                <button class="btn btn-success">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>