<!doctype html>
<html>
<head>
       <title>TIKET PESAWAT UDARA</title>
      <link rel="stylesheet" href="main.css">
</head>
<body>
<h3>TIKET PESAWAT UDARA</h3>
       <section class="pesawat"> 
<form action="output.php" method="POST">
<pre>

<p>Nama Maskapai</p> <input type="text" name="nama">
<p>Bandara Asal</p>  <select name="asal">
               <option value="">- PILIH -
               <option value="SH">Soekarno Hatta
               <option value="HS">Husain Sastranegara
               <option value="ARS">Abdul Rachman Saleh
               <option value="JS">Juanda
               </select>
<p>Bandara Asal</p>  <select name="tujuan">
               <option value="">- PILIH -
               <option value="NR">Ngurah Rai
               <option value="HD">Hasanuddin
               <option value="IW">Inanwatan
               <option value="SIM">Sultan Iskandar Muda
               </select>
<p>Harga</p>         <input type="number" name="harga"> 
<p>Jumlah Beli</p>   <input type="text" name="jumlah">
<br>
<input type="submit" value="Beli"> <input type="reset" value="Batal">
</section> 
</body>
</html>