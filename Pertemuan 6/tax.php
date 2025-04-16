<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Rute Penerbangan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="container mt-5">
        <h2 class="Judul text-center mb-4">Data Rute Penerbangan</h2>
        <?php
            $maskapai = $_POST['nama_maskapai'];
            $asal = $_POST['bandara_asal'];
            $tujuan = $_POST['bandara_tujuan'];
            $harga = $_POST['harga_tiket'];

            $pajakAsal = 0;
            switch ($asal) {
                case 'Soekarno Hatta': $pajakAsal = 65000; break;
                case 'Husein Sastranegara': $pajakAsal = 50000; break;
                case 'Abdul Rachman Saleh': $pajakAsal = 40000; break;
                case 'Juanda': $pajakAsal = 30000; break;
            }

            $pajakTujuan = 0;
            switch ($tujuan) {
                case 'Ngurah Rai': $pajakTujuan = 85000; break;
                case 'Hasanuddin': $pajakTujuan = 70000; break;
                case 'Inanwatan': $pajakTujuan = 90000; break;
                case 'Sultan Iskandar Muda': $pajakTujuan = 60000; break;
            }

            $pajak = $pajakAsal + $pajakTujuan;
            $total = $harga + $pajak;

            $tanggal = date("Y-m-d");
            $nomor = rand(1000, 9999);

        ?>
        <table class="table table-bordered table-striped">
            <tr>
                <th>Nomor</th>
                <td><?= $nomor ?></td>
            </tr>
            <tr>
                <th>Maskapai</th>
                <td><?= $maskapai ?></td>
            </tr>
            <tr>
                <th>Tanggal Pemesanan</th>
                <td><?= $tanggal ?></td>
            </tr>
            <tr>
                <th>Asal Penerbangan</th>
                <td><?= $asal ?></td>
            </tr>
            <tr>
                <th>Tujuan Penerbangan</th>
                <td><?= $tujuan ?></td>
            </tr>
            <tr>
                <th>Harga Tiket</th>
                <td>Rp <?= number_format($harga, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <th>Pajak</th>
                <td>Rp <?= number_format($pajak, 0, ',', '.') ?></td>
            </tr>
            <tr class="table-success">
                <th>Total Harga Tiket</th>
                <td><strong>Rp <?= number_format($total, 0, ',', '.') ?></strong></td>
            </tr>
        </table>

        <div class="text-center">
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>