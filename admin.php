<!doctype html>
<html lang="en">
  <head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />
 </head>
  <body>
<?php 
	session_start();
	if($_SESSION['level']!="admin"){
		header("location:index.php");
	}
?>
<?php
include 'konek.php';
$sql = 'select * from pengajuan';
$query = mysqli_query($link,$sql);
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <a class="navbar-brand text-dark" href="#">Purchase.</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="admin.php">Home <span class="sr-only"></span></a>
      </li>
    </ul>
     
    </form>
    <div class="text text-light"><?= $_SESSION['email']; ?>&nbsp;&nbsp;&nbsp;</div>
    <a href="logout.php"><input type="submit" value="logout"class="btn btn-dark my-2 my-sm-0"></a>
  </div>
</nav>
<div class="container-fluid">
<div class="jumbotron">
<table class="table table-info">
<tr>

<thead class="bg-warning text text-center">
<th>No</th>
<th>Email </th>
<th>Kode Item</th>
<th>Item Name</th>
<th>QTY</th>
<th>Unit</th>
<th>Price</th>
<th>Currency</th>
<th>Total</th>
<th>Remark</th>
<th colspan="2">Aksi</th>

</thead>

</tr>
<?php 
$i = 1;
while ($data = mysqli_fetch_array($query)) {
  ?>
  <tr>
  <tbody>
  <td> <?php echo $i++; ?></td>
  <td><?= $data['email'];?></td>
<td><?= $data['item_code'];?></td>
<td><?= $data['item_name'];?></td>
<td><?= $data['qty'];?></td>
<td><?= $data['unit'];?></td>
<td><?= $data['price'];?></td>
<td><?= $data['currency'];?></td>
<td><?= $data['total'];?></td>
<td><?= $data['remark'];?></td>
<td><a href="acc.php?ni=<?= $data['id_pengajuan'];?>"> acc </a></td>
<td><a href="delete.php?ni=<?= $data['id_pengajuan'];?>"> delete </a></td>
</tbody>
</tr>

<?php } ?>

</table>
</div>
</div>




 </body>
 <script>
 
 </script>
 </html>