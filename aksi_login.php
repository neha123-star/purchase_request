<?php 
session_start();
include 'konek.php';
$email = $_POST['email'];
$password = $_POST['password'];
$login = mysqli_query($link,"select * from pengguna where email='$email' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){

    $data = mysqli_fetch_assoc($login);


    if ($data['level'] == 'user') {
	$_SESSION['email'] = $email;
	$_SESSION['level'] = "user";
    header("location:awal.php");
    }
        else if ($data['level'] == 'admin') {
            $_SESSION['email'] = $email;
            $_SESSION['level'] = "admin";
            header("location:admin.php");
            }
}else{
	header("location:index.php");
}
?>