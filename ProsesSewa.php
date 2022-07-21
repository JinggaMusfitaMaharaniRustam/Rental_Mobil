<?php
    $nama = $_POST["nama"];
    $NIK = $_POST["nik"];
    $alamat = $_POST["alamat"];
    $hari = (int) $_POST["hari"];
    $harga = (int) $_GET["price"];
    $harga = $harga * $hari;
    $mobil = $_GET["mobil"];
    $tipe = $_GET["tipe"];
    $gambar = $_GET["gambar"];

    $catat = fopen("listSewa.txt", "a");

    $data = $nama . ";" . $NIK . ";" . $alamat . ";" . $hari . ";" . $harga . ";" . $mobil .  ";" . $gambar .  ";" . $tipe ."\n";

    fwrite($catat, $data);
    fclose($catat);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="text-center mt-5">
        <h2><?php echo "Data Berhasil Di simpan"?></h2>

        <a href="ListMobilAll.php">
            <button class="btn btn-warning">Kembali</button>
        </a>
    </div>
</body>
</html>