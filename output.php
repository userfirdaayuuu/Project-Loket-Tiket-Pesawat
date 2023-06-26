<!doctype html>
<html>
<head>
      <title>TIKET PESAWAT UDARA</title>
      <link rel="stylesheet" href="main.css">
</head>
<body>
    <h3>Hasil Tiket</h3>
<?php
     $nama=$_POST['nama'];
     $asal=$_POST['asal'];
     $tujuan=$_POST['tujuan'];
     $harga=$_POST['harga'];
     $jumlah=$_POST['jumlah'];
     
if ($asal=="SH"){
    $namaasal="Soekarno Hatta";
    $pajakasal=65000;
    }
else if($asal=="HS"){
    $namaasal="Husein Sastranegara";
    $pajakasal=50000;
    }
else if($asal=="ARS"){
    $namaasal="Abdul Rachman Saleh";
    $pajakasal=40000;
    }
else {
    $namaasal="Juanda";
    $pajakasal=30000;
    }

if ($tujuan=="NR"){
    $namatujuan="Ngurah Rai";
    $pajaktujuan=85000;
    }
else if ($tujuan=="HD"){
    $namatujuan="Hassanudin";
    $pajaktujuan=70000;
    }
else if ($tujuan=="IW") {
    $namatujuan="Inanwatan";
    $pajaktujuan=90000;
    }
else{
    $namatujuan="Sultan Iskandar Muda";
    $pajaktujuan=60000;
}

$totalpajak=$pajakasal+$pajaktujuan;

$hargatiket=$totalpajak + $harga;

$totalbayar = $hargatiket * $jumlah;

function generateNomor(){
    return rand(100, 999);
}

?>

<pre>
    <section class="pesawat">
Nomor           : <?php echo generateNomor() ?> <br>
Tanggal         : <?php echo date('d / M / y'); ?> <br>
Nama Maskapai   : <?php echo $nama ; ?> <br>
Bandara Asal    : <?php echo $namaasal ; ?> <br>
Bandara Tujuan  : <?php echo $namatujuan ; ?> <br>
Harga           : <?php echo "Rp.".number_format($harga) ; ?> <br>
Pajak           : <?php echo "Rp.".number_format($totalpajak) ; ?> <br>
Harga Tiket     : <?php echo "Rp.".number_format($hargatiket) ; ?> <br>
Jumlah Beli     : <?php echo $jumlah ; ?> <br>
---------------------------------------------
Total Bayar     : <?php echo "Rp.".Number_format($totalbayar) ; ?> <br>
---------------------------------------------
<a href="input.php">INPUT DATA LAGI </a>    
</section>
</body>
</html>