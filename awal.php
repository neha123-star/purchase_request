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
  <?php 
	session_start();
	if($_SESSION['level']!="user"){
		header("location:index.php");
	}
?>
<?php 
include 'header.php'; ?>
<div class="container-fluid">
  
  <center><h3>Pengisian Purchase Request</h3></center>
    
    
    <form action="tampil.php" method="post"class="form-group" onSubmit="return validasi()">
    <div class="row">
    <div class="col-md-5">
      <table>
        <tr>
        <td>Item Code</td> <td>:</td> <td><input type="text" id="item_code" name="item_code"class="form-control"placeholder="masukkan kode item"></td>
        </tr>
        <tr>
        <td>Item Name</td> <td>:</td> <td><input type="text" name="item_name" id="item_name"class="form-control"placeholder="masukan nama item"></td>
        </tr>
        <tr>
        <td>Required Qty</td> <td>:</td> <td><input type="text" name="qty" id="qty" class="form-control"placeholder="masukan jumlah item"></td>
        </tr>        
        <tr>
        <td>Unit</td> <td>:</td> <td><input type="text" name="unit" id="unit" class="form-control"placeholder="masukan unit"></td>
        </tr>
        
        <tr>
        <td>Price</td> <td>:</td> <td><input type="text" name="price" id="price"class="form-control"placeholder="harga"></td>
        </tr>
      
        <tr>
        <td>Currency</td> <td>:</td> <td>
        <select name="currency" class="custom-select" id="currency">
          <option selected="selected">--PILIH--</option>
          <option value="IDR">IDR</option>
          <option value="Dollar">Dollar</option>
        
        </select>
        </td>
        </tr>
        <tr>
            <td>Total</td><td>:</td><td><input type="text" id="total" name="total"class="form-control"></td>
          </tr>
        </table>
        
    
    </div>
      <div class="col-md-5"></div>
    </div>
    <p> Remark :
<textarea name="remark"id="remark"class="form-control"rows="5"></textarea></p>
<input type="hidden"value=""name="id">
<p>

<input type="submit" value="lanjutkan"class="btn btn-danger"name="submit">
</p>
    </form>
    
</div>





<script type="text/javascript">
	function validasi() {
		var item_code = document.getElementById("item_code").value;
		var item_name = document.getElementById("item_name").value;
    var qty = document.getElementById("qty").value;		
    var unit = document.getElementById("unit").value;
    var price = document.getElementById("price").value;
    var currency = document.getElementById("currency").value;
    
    var total = document.getElementById("total").value;
    var remark = document.getElementById("remark").value;
    
		if (item_code != "" && item_name !=""  && qty !="" && unit !="" && price !="" && currency !="" && total !=""  && remark !="") {
			return true;
		}else{
      alert('Masukan secara lengkap');
			return false;

		}
	}
 
</script>







  </body>
</html>
