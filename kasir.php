    <?php 
	session_start();
	if($_SESSION['level']!="kasir"){
		header("location:index.php");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Test Magang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="font-awesome/4.5.0/css/font-awesome.min.css" />
 </head>
  <body>
  
  <nav class="navbar navbar-expand-lg navbar-primary bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeri</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>&nbsp;&nbsp;&nbsp;
      
      
    </form>
    <a href="logout.php"><input type="submit" value="logout"class="btn btn-outline-light my-2 my-sm-0"></a>
  </div>
</nav>
<div class="container">
 
 
 <div class="jumbotron"></div>
 </div>
 <div class="container"><div class="row">
 <div class="col-md-4">

</div>
<div class="col-md-4">
<form action="kasir.php" method="get" class="form-inline">
	<label>Cari :</label>&nbsp;&nbsp;&nbsp;&nbsp;
	<input class="form-control"placeholder="cari user disini" type="text" name="cari">&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit"class="btn btn-outline-dark" value="Cari">
</form>
</div>
<div class="col-md-4">
</div>
</div>
 <p></p>
<table class="table">
<thead class="thead-dark">
	<tr>
 
		<th scope="col">No</th>
		<th>Nama</th>
        <th>jumlah</th>
	</tr>
    </thead>
    <?php 
    include 'konek.php';
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($link,"select * from barang where nama_barang like '%".$cari."%'");				
	}else{
		$data = mysqli_query($link, "select * from barang");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tbody>
    <tr>
    
		<th scope="row" ><?php echo $no++; ?></th>
		<td><?php echo $d['nama_barang']; ?></td>
        <td>
        
        </td>
	</tr>
    </tbody>
	<?php } ?>
</table>



</div></div>