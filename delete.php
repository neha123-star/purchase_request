<?php 
include 'konek.php';
$ni = $_GET['ni'];
$query = mysqli_query($link,'delete from acc where id_acc = "'.$ni.'"');
$que = mysqli_query($link,'delete from pengajuan where id_pengajuan = "'.$ni.'"');
header('location:admin.php');

