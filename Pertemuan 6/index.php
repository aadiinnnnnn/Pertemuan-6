<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Pendaftaran Rute Penerbangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class=" Judul text-center mb-4">Form Pendaftaran Rute Penerbangan</h2>
        <form action="tax.php" method="POST" class="border p-4 rounded shadow-sm bg-light">

            <div class="mb-3">
                <label for="nama_maskapai" class="form-label fw-bold">Nama Maskapai</label>
                <input type="text" class="form-control" id="nama_maskapai" name="nama_maskapai" required>
            </div>

            <div class="mb-3">
                <label for="bandara_asal" class="form-label fw-bold">Bandara Asal</label>
                <select class="form-select" id="bandara_asal" name="bandara_asal" required>
                    <?php
                        $bandaraAsal = ["Soekarno Hatta", "Husein Sastranegara", "Abdul Rachman Saleh", "Juanda"];
                        sort($bandaraAsal);
                        foreach ($bandaraAsal as $asal) {
                            echo "<option value='$asal'>$asal</option>";
                        }
                        ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="bandara_tujuan" class="form-label fw-bold">Bandara Tujuan</label>
                <select class="form-select" id="bandara_tujuan" name="bandara_tujuan" required>
                    <?php
                        $bandaraTujuan = ["Ngurah Rai", "Hasanuddin", "Inanwatan", "Sultan Iskandar Muda"];
                        sort($bandaraTujuan);
                        foreach ($bandaraTujuan as $tujuan) {
                            echo "<option value='$tujuan'>$tujuan</option>";
                        }
                        ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="harga_tiket" class="form-label fw-bold">Harga Tiket</label>
                <input type="number" class="form-control" id="harga_tiket" name="harga_tiket" required>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>