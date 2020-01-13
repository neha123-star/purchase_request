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
    <link rel="stylesheet" href="	font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body class="bg-dark">
<div class="container">
<div class="jumbotron bg-dark"></div>
        <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <h2><center><div class="text-light"> Login</div></center></h2>
            <form class="form-group" action="aksi_login.php" method="post"onSubmit="return validasi()">
                <p><div class="text-light"> Email anda :</div>
                <input class="form-control" type="email" name="email" placeholder="masukan email anda"id="email"></p>
                <p>
             <div class="text-light"> password anda :</div>
                    <input class="form-control" type="password" name="password" placeholder="masukan password anda"id="password"></p>
                <input type="submit" name="submit"class="btn btn-danger" value="submit">
                </form>
                    <a href="daftar.php" class="fa fa-registered"> daftar dulu </a>
                </div>
             </div>
             <div class="col-md-4">
        </div>
   
</div>
  </body>
  
<script type="text/javascript">
	function validasi() {
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		if (email != "" && password !="") {
			return true;
		}else{
      alert('masukan email dan password');
			return false;

		}
	}
 
</script>
  </html>