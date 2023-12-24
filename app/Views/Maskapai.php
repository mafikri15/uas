<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<head>
<title>Maskapai</title>
</head>
    <h1>Daftar Maskapai</h1>
    <div class="content-wrapper">
    <div class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">No</th>
                    <th>Daftar Maskapai</th>
                    <th>Kode Pesawat</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>Lion Air</td>
                    <td>LA1</td>
                  </tr>
                  <tr>
                  <td>2.</td>
                    <td>Sriwijaya Air</td>
                    <td>SA2</td>
                  </tr>
                  <tr>
                  <td>3.</td>
                    <td>Garuda Indonesia</td>
                    <td>GI3</td>
                  </tr>
                  <tr>
                  <td>4.</td>
                    <td>Citilink</td>
                    <td>CL4</td>
                  </tr>
                    <td>5.</td>
                    <td>Batik Air</td>
                    <td>BA5</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      </div>
    </div>
  </section>
<?= $this->endSection(); ?>
