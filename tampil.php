<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes Magang</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
</head>
<body>
  <?php 
	session_start();
	if($_SESSION['level']!="user"){
        header("location:index.php");
	} ?>
<?php include 'header.php'; ?>

<div class="container">
<?php
include('konek.php');
?>
<?php
$email = $_SESSION['email'];
$sql="select * from pembeli where email = '$email' ";
$query=mysqli_query($link,$sql);
?>
<h2><center>Pengajuan Anda</center></h2>


<table boder="0"class="table text-dark">
    <?php
    while ($data=mysqli_fetch_array($query)) {
   ?>
    
    <tr>
        <td>Nama</td><td>:</td><td><?php echo $data['nama_pembeli']; ?></td>
    </tr>
    <tr>
        <td>Alamat</td><td>:</td><td><?php echo $data['alamat']; ?></td>
    </tr>
    <tr>
        <td>No Hp</td><td>:</td><td><?php echo $data['no_hp']; ?></td>
    </tr>
    <tr>
        <td>Email</td><td>:</td><td><?php echo $data['email']; ?></td>
        </tr>
    

    <?php
    }
    ?>
</table>

<p></p>

<div class="container-fluid">
<table align="center"class="table">
<tr>
<thead class="bg-dark text-light">
<th>No Item</th>
<th>Nama Item</th>
<th>QTY</th>
<th>Unit</th>
<th>Price</th>
<th>Currency</th>
<th>Total</th>
<th>Remark</th>
</thead>
</tr>

    <?php 
    if (isset($_POST['submit'])) {
        
     ?>
    <tr>
        <td><?php echo $_POST['item_code'];?></td>    
        <td><?php echo $_POST['item_name'];?></td>    
        <td><?php echo $_POST['qty'];?></td>    
        <td><?php echo $_POST['unit'];?></td>    
        <td><?php echo $_POST['price'];?></td>    
        <td><?php echo $_POST['currency'];?></td>    
        <td><?php echo $_POST['total'];?></td>    
        <td><?php echo $_POST['remark']; }?></td>    
    </tr>
</table>
</div>
</body>
</html>
<?php 
 include 'konek.php';
 
		
if (isset($_POST['submit'])) {
                $code = $_POST['item_code'];
                $name = $_POST['item_name'];
                $qty = $_POST['qty'];
                $unit = $_POST['unit'];
                $price = $_POST['price'];
                $currency = $_POST['currency'];
                $total =$_POST['total'];
                $remark =$_POST['remark'];
                $email = $_SESSION['email'];
                
                $sql = 'insert into pengajuan(item_code,item_name,qty,unit,price,currency,total,remark,email)values("'.$code.'","'.$name.'","'.$qty.'","'.$unit.'","'.$price.'","'.$currency.'","'.$total.'","'.$remark.'","'.$email.'")';
                $query = mysqli_query($link,$sql);
                
              



}

if (isset($_POST['submit'])) {
    $code = $_POST['item_code'];
    $name = $_POST['item_name'];
    $total =$_POST['total'];
    $email=$_SESSION['email'];
    
    $sql = 'insert into acc(item_code,item_name,total,email)values("'.$code.'","'.$name.'","'.$total.'","'.$email.'")';
    $query = mysqli_query($link,$sql);


}
