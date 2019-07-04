<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<style>
      body{
        background-image: url(callof2.jpg);
        background-size: 100%;
      }
    </style>
<body background="callof2.jpg">
<div class="jumbotron">

<?php
echo "<head><title>DATA BAYAR</head></title>";
$fp = fopen("databayar.txt","a+");
$nama = $_POST['nama'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $jumlah*$harga;
$file = $_FILES["file"]["name"];
$tmp_name = $_FILES["file"]["tmp_name"];
move_uploaded_file($tmp_name, "images/".$file);

fputs($fp,"$nama|$nama_barang|$jumlah|$harga|$total|$file\n");
fclose($fp);
echo " Terima Kasih Atas Partisipasi Anda Mengisi Pembayaran<br>";
echo "<a class=btn href=lihat.php> Lihat Data </a><br>";
echo "<a class=btn href=index.html> Lihat Profile </a><br> ";
?>
</div>
</body>
</html>