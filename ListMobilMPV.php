<?php include "Home.html" ?>

<?php
    $myfile = fopen("mobil.txt", "r");
?>
    <div class="container">
        <div class="row text-center">
<?php
    while(!feof($myfile)){
        $data = fgets($myfile);
        $pisah = explode(";", rtrim($data));
        $nama = $pisah[0];
        $gambar = $pisah[1];
        $tipe = $pisah[2];
        $harga =  $pisah[3];
        $muat = $pisah[4];
        $mesin = $pisah[5];

        if($tipe == "MPV"){
?>   
            <div class="col-md-3 col-sm-3">
                <div class="card">
                    <img src="<?php echo $gambar?>" alt="" class="card-img-top gambar-mobil img-fluid">
                    <div class="card-body">
                        <h2><?php echo $nama?> </h2>
                        <p>Tipe: <?php echo $tipe?></p>
                    </div>
                    <div>
                        <img src="assets/seats.png" alt=""> <?php echo $muat?> Orang
                        <img src="assets/mesin.png" alt=""> <?php echo $mesin?> PS
                    </div>
                    <h4>Rp. <?php echo $harga?>/Hari </h4>
                    <a href="Sewa.php?nama=<?php echo $nama?>&gambar=<?php echo $gambar?>&tipe=<?php echo $tipe?>&harga=<?php echo $harga?>">
                        <button class="btn btn-success mb-3">Sewa Mobil</button>
                    </a>
                    
                </div>
            </div>
<?php       
        }
    }
?>
        </div>
    </div>
