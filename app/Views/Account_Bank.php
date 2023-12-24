<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<head>
    
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akun Bank</title>
    <!-- Tambahkan tautan ke file CSS yang sesuai -->
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Masukkan Akun Bank</h1>

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

        <form action="<?= site_url('akunbank/submitPesanan'); ?>" method="post">
            <div class="form-group">
                <label for="nama_pemilik">Nama Pemilik</label>
                <input type="text" id="nama_pemilik" name="nama_pemilik" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="no_rekening">No Rekening</label>
                <input type="text" id="jno_rekening" name="no_rekening" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pin">pin</label>
                <input type="password" id=pin" name="pin" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>
    <script src="<?= base_url('js/scripts.js'); ?>"></script>
</body>
<?= $this->endSection(); ?>