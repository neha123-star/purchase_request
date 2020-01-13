<?php 
include 'konek.php';
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp =$_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $pass = $_POST['password'];

    $sql = 'insert into pembeli(nama_pembeli,alamat,no_hp,email,password)value("'.$nama.'","'.$alamat.'","'.$no_hp.'","'.$email.'","'.$pass.'")';
    $query = mysqli_query($link,$sql);
    if ($query) {
        header('location:index.php');
    }else {
        echo'GAGAL MASUK';
    }
    $level = 'user';
    $sql = 'insert into pengguna(email,password,level)value("'.$email.'","'.$pass.'","'.$level.'")';
    $query = mysqli_query($link,$sql);
    if ($query) {
        header('location:index.php');
    }else {
        echo'GAGAL MASUK';
    }


}
