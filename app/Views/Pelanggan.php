<?= $this->extend('index'); ?>
<?= $this->section('content'); ?>
<head>
    <title>Data Penumpang Pesawat</title>
</head>
<body>
    <h1>Data Penumpang Pesawat</h1>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Waktu dan Tempat</th>
                <th>Bandara Tujuan</th>
                <th>Kode Booking</th>
                <th>Nomor Penerbangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($passengers as $passenger) : ?>
                <tr>
                    <td><?= $passenger['nama']; ?></td>
                    <td><?= $passenger['nik']; ?></td>
                    <td><?= $passenger['waktu_dan_tempat']; ?></td>
                    <td><?= $passenger['bandara_tujuan']; ?></td>
                    <td><?= $passenger['kode_booking']; ?></td>
                    <td><?= $passenger['nomor_penerbangan']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>



<?= $this->endSection(); ?>