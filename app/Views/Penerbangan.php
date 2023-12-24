<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<head>
    <title>Data Penerbangan Pesawat</title>
</head>
<body>
<h1>Jadwal Penerbangan</h1>
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
                    <th>Maskapai</th>
                    <th>Bandara Asal</th>
                    <th>Bandara Tujuan</th>
                    <th>Tanggal Keberangkatan</th>
                    <th>Jam Keberangkatan</th>
                    <th>Nomor Penerbangan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Lion Air</td>
                    <td>Bandara Juanda</td>
                    <td>Bandara Sultan Hasanuddin</td>
                    <td>1 November 2023</td>
                    <td>13.20 WIB</td>
                    <td>LA123</td>
                  </tr>
                  <tr>
                    <td>Lion Air</td>
                    <td>Bandara Kartaji</td>
                    <td>Bandara Sultan Hasanuddin</td>
                    <td>1 November 2023</td>
                    <td>10.20 WIB</td>
                    <td>LA134</td>
                  </tr>
                  <tr>
                    <td>Sriwijaya Air</td>
                    <td>Bandara Juanda</td>
                    <td>Bandara Sultan Hasanuddin</td>
                    <td>2 November 2023</td>
                    <td>13.20 WIB</td>
                    <td>SA223</td>
                  </tr>
                  <tr>
                    <td>Citilink</td>
                    <td>Bandara Adisutjipto</td>
                    <td>Bandara Sultan Hasanuddin</td>
                    <td>3 November 2023</td>
                    <td>9.20 WIB</td>
                    <td>CL423</td>
                  </tr>
                    <td>Batik Air</td>
                    <td>Bandara Sultan Hasanuddin</td>
                    <td>Bandara Juanda</td>
                    <td>9 November 2023</td>
                    <td>13.20 WIB</td>
                    <td>BA521</td>
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