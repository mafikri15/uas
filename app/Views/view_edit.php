<div class="container p-5">
    <a href="<?= base_url('pemesanan');?>" class="btn btn-secondary mb-2">Kembali</a>
    <div class="card">
        <div class="card-header bg-info text-white">
            <h4 class="card-title">Edit Barang : </h4>
        </div>
        <div class="card-body">
            <form method="post" action="<?= base_url('pemesanan/update');?>">
            <input type="hidden" value="<?= $ids; ?> name="id_pemesanan">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal_keberangkatan</label>
                    <input type="date" name="tanggal_keberangkatan" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tujuan</label>
                    <input type="text" name="tujuan" required class="form-control">
                </div>
                <input type="hidden" name="id_pemesanan">
                <button class="btn btn-success">Edit Data</button>
            </form>
            
        </div>
    </div>
</div>