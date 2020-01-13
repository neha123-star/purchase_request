<?php 
include 'konek.php';
if (isset($_GET['ni'])) {
    

$terima = 'permintaan anda telah di terima.';
$sql = "update acc set acc='$terima'";
$query = mysqli_query($link,$sql);
if ($query) {
    header('location:admin.php');    
}  else {
    echo'eorr';
}
}