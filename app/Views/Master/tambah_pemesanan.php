<!-- Layout -->
<?= $this->extend('layout/layout_adminlte_top') ?>
<!-- end Layout -->

<!-- Section -->
<?= $this->section('content') ?>
<!-- End -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Tambah Pemesanan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Data Master</li>
              <li class="breadcrumb-item"><a href="/master/penerbit"> Data Pemesanan</a></li>
              <li class="breadcrumb-item active">Tambah Data Pemesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <!-- notifications -->
        <?= view('App\Views\layout\notifications') ?>
        <!-- Form -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Form Data Pemesanan</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" method="post" action="<?= site_url('master/pemesanan/simpan'); ?>">
            <div class="card-body">              
              <div class="form-group row">
                <label for="nama_pemesan" class="col-sm-2 col-form-label">Nama Pemesan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama_pemesan" placeholder="Nama Pemesan">
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal_keberangkatan" class="col-sm-2 col-form-label">Tanggal Keberangkatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tanggal_keberangkatan" placeholder="Tanggal Keberangkatan">
                </div>
                <div class="form-group row">
                <label for="tujuan" class="col-sm-2 col-form-label">Tujuan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tujuan" placeholder="Tujuan">
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Simpan</button>
            </div>
            <!-- /.card-footer -->
          </form>
        </div>
        <!-- End Form -->

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- End Section -->
<?= $this->endSection() ?>
<!-- End  -->