<!doctype html>
<html lang="en">
  <head>
    <title>Test Magang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  </head>
  <body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            
            <div class="col-md-4">
            <center><h3><div class="text-light">Pengajuan Pembelian</div></h3></center>
            <form action="aksi.php" method="post" class="form-group">
                <p class="text-light"> Nama:
                <input type="text" name="nama"class="form-control"placeholder="masukan nama">
                </p>
                <p class="text-light"> Email:
                <input type="text" name="email"class="form-control"placeholder="example@gmail.com">
                </p>
                <p class="text-light"> Nomor hp :
                <input type="text" name="no_hp"class="form-control"placeholder="masukan nomor hp anda">
                </p>
                <p class="text-light"> Alamat :
                <input type="text" name="alamat"class="form-control"placeholder="masukan Alamat  anda">
                </p>
                <p class="text-light">Penawaran :
                  <select name="pengajuan" id="pengajuan" class="form-control">
                    <option selected="selected">--Pilih--</option>
                    <option value="pengajuan pembelian">Pengajuan Pembelian</option>
                  </select>
                </p>
                <input type="submit" value="Ajukan" name="tambah" class="btn btn-danger">
            </form>
            </div>
            
        </div>
    </div>

  </body>

  <script type="text/javascript">
	function validasi() {
    var nama = document.getElementById("nama").value;
		var email = document.getElementById("email").value;
    var no_hp = document.getElementById("no_hp").value;
    var alamat = document.getElementById("alamat").value;
    var penawaran = document.getElementById("penawaran").value;
		if (nama!="" && email != "" && no_hp!="" && alamat!="" && penawaran!="") {
			return true;
		}else{
			alert('Isi data diatas untuk mengajukan PENGAJUAN PEMBELIAN');
			return false;
		}
	}
 
</script>
  </html>
  