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
  <body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            
            <div class="col-md-4">
            <center><h3><div class="text-light"> Daftar</div></h3></center>
            <form action="aksi.php" method="post" class="form-group">
                <p class="text-light"> Nama:
                <input type="text" name="nama"class="form-control"placeholder="masukan nama">
                </p>
                <p class="text-light"> Email:
                <input type="text" name="email"class="form-control"placeholder="masukan email">
                </p>
                <p class="text-light"> Nomor hp :
                <input type="text" name="no_hp"class="form-control"placeholder="masukan nomor hp anda">
                </p>
                <p class="text-light"> Alamat rumah :
                <input type="text" name="alamat"class="form-control"placeholder="masukan Alamat rumah anda">
                </p>
                <p class="text-light"> Password :
                <input type="password" name="password"class="form-control"placeholder="masukan password anda">
                </p>
                <input type="submit" value="daftar" name="tambah" class="btn btn-danger">
            </form>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>

  </body>
  </html>