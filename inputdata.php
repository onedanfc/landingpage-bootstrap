<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nomor            = $_POST['nomor'];
// query SQL untuk insert data
$query="INSERT INTO whatsapp SET nomor='$nomor'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:https://wa.me/62895343263667");
?>