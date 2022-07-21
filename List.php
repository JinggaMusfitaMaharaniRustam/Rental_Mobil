<?php
    $listFile = fopen("listSewa.txt", "r");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Mobil</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="navbar-top">
        <div class="nav-title">
            <h1><b>Rental</b>Mobil Website</h1>
        </div>
        
        <div>
            <a href="ListMobilAll.php">Home</a>
            <a class="active" href="List.html">Lihat List Sewa</a>
        </div>
    </div>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Nama Penyewa</td>
                <td>NIK</td>
                <td>Alamat Penjemputan</td>
                <td>Nama Mobil</td>
                <td>Gambar</td>
                <td>Tipe Mobil</td>
                <td>Durasi Sewa</td>
                <td>Harga</td>
            </tr>
        </thead>

        <tbody>
    <?php
        while(!feof($listFile)){
            $data = fgets($listFile);
            $pisah = explode(";", rtrim($data));
            if(!empty($data)){
                $nama = $pisah[0];
                $NIK = $pisah[1];
                $alamat = $pisah[2];
                $hari = $pisah[3];
                $harga = $pisah[4];
                $mobil = $pisah[5];
                $gambar = $pisah[6];
                $tipe = $pisah[7];
    ?>
            <tr>
                <td><?php echo $nama?></td>
                <td><?php echo $NIK?></td>
                <td><?php echo $alamat?></td>
                <td><?php echo $mobil?></td>
                <td><img src="<?php echo $gambar?>" alt="" style="max-width: 100px;"></td>
                <td><?php echo $tipe?></td>
                <td><?php echo $hari?> Hari</td>
                <td>Rp. <?php echo $harga?></td>
            </tr>
<?php
            }    
        }
        fclose($listFile);
?>
        </tbody>
    </table>
</body>
</html>