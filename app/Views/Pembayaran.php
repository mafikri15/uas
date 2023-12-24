<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<body>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proses Pembayaran</title>
    <!-- Tambahkan tautan ke file CSS yang sesuai -->
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Proses Pembayaran</h1>

        <!-- Tampilkan pesan kesalahan jika ada -->
        <?php if (isset($errors)) : ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error) : ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif ?>

        <form action="<?= site_url('pembayaran/submitPesanan'); ?>" method="post">
            <div class="form-group">
                <label for="nomor_kartu_kredit">Nomor Kartu Kredit</label>
                <input type="text" id="nomor_kartu_kredit" name="nomor_kartu_kredit" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="nama_pemilik">Nama Pemengang Kartu Kredit</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa</label>
                <input type="date" id="tanggal_kadaluarsa" name="tanggal_kadaluarsa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Bayar</button>
        </form>
    </div>
    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>
<?= $this->endSection(); ?>