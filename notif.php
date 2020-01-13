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
  <?php
  include'header.php';
  ?>



<div class="container">
<table class="table ">
<tr class="bg-secondary">
<th>no</th>
<th>Tanggal</th>
<th>From</th>
<th>Item Code</th>
<th>item name</th>
<th>Total</th>
<th>Status</th>
</tr>
<?php 
include 'konek.php';
$email=$_SESSION['email'];
$sql = 'select * from acc where email="'.$email.'"';
$query = mysqli_query($link,$sql);
$no = 1;
while ($data  = mysqli_fetch_array($query)) {
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['tanggal']; ?></td>
<td>Admin</td>
<td><?php echo $data['item_code']; ?></td>
<td><?php echo $data['item_name']; ?></td>
<td><?php echo $data['total']; ?></td>
<td> <div class="alert alert-primary"><?php echo $data['acc']; } ?></div></td>
</tr>
</table>
</div>
<div class="container-fluid">


<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<p>
<h4><div class="text text-center">
  <div class="alert alert-warning">
Pengajuan anda telah diterima lakukan pembayaran di : </p>
+6298263242342 / 0341 273642 <br>
email : hallo777@gmail.com
</div>
</div>
</h4>


</div>
<div class="col-md-3"></div>

</div>
</div>
</div>



</body>
</html>