<?php
    $nama = $_GET["nama"];
    $gambar = $_GET["gambar"];
    $tipe = $_GET["tipe"];
    $harga = $_GET["harga"];
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
</head>

<body>
    <div class="navbar-top">
        <div class="nav-title">
            <h1><b>Rental</b>Mobil Website</h1>
        </div>
        
        <div>
            <a class="active" href="ListMobilAll.php">Home</a>
            <a href="List.php">Lihat List Sewa</a>
        </div>
    </div>

    <div class="mt-5 text-center">
        <div class="title">
            <h1>Sewa Mobil</h1>
            <h4>Silahkan isi data yang diperlukan</h4>
        </div>
    </div>

    <form action="ProsesSewa.php?mobil=<?php echo $nama?>&gambar=<?php echo $gambar?>&tipe=<?php echo $tipe?>&price=<?php echo $harga?>" method="post">
        <div>
            <div class="d-flex justify-content-center">
                <div class="card text-center">
                    <img src="<?php echo $gambar?>" alt="" class="card-img-top gambar-mobil img-fluid">
                    <div class="card-body">
                        <h2><?php echo $nama?> </h2>
                        <p>Tipe: <?php echo $tipe?></p>
                    </div>
                    <h4>Rp. <?php echo $harga?>/Hari </h4>
            </div>
    
            <div class="d-flex flex-column ms-5">
                <label for="">Nama</label>
                <input type="text" name="nama">
                <label for="">NIK</label>
                <input type="text" name="nik">
                <label for="">Alamat Penjemputan</label>
                <textarea name="alamat" id="" cols="30" rows="10"></textarea>
                <label for="">Jumlah Hari</label>
                <input type="number" name="hari">
                
            </div>
        </div>
    
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
</body>
</html>