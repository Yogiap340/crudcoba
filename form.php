<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <title>Sistem Informasi ABCD</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="index.html">
        <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        UJIKOM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-download"></i> Menu 1</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-power-off"></i> Menu 2</a>
          </li>
        </ul>

      </div>
    </nav><br>

    <img src="img/logo.jpg"><br><br>
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <li class="list-group-item list-group-item-action active">
            Data Master
          </li>
          <a href="index.php" class="list-group-item list-group-item-action"><i class="fa fa-home"></i> Dashboard</a>
          <a href="form.php" class="list-group-item list-group-item-action"><i class="fa fa-university"></i> Form</a>
          <a href="tabel.php" class="list-group-item list-group-item-action"><i class="fa fa-users"></i> Tabel</a>
          <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-book"></i> Data 3</a>
        </div><br>
        <div class="list-group">
          <li class="list-group-item list-group-item-action active">
            Cetak
          </li>
          <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-file-o"></i> Laporan 1</a>
          <a href="#" class="list-group-item list-group-item-action"><i class="fa fa-files-o"></i> Laporan 2</a>
        </div>
      </div>
      <div class="col-md-9">
        <div class="card">
          <h5 class="card-header text-white bg-primary">Template Form</h5>
          <div class="card-body">


            <h5>Komponen Form</h5>
            <form method="post" action="form.php" name="forms">
              <div class="form-group">
                <label for="exampleFormControlInput1">kode</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ketik disini" name="kode_barang">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">nama_barang</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ketik disini" name="nama_barang">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">harga</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ketik disini" name="harga">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">ComboBox</label>
                <select class="form-control" id="exampleFormControlSelect1" name="jenis_barang">
                  <option>buku</option>
                  <option>kulkas</option>
                  <option>odong odong</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlTextarea1">Textare</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="deskripsi" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Radio Button</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio1" id="inlineRadio1" value="Y" checked>
                  <label class="form-check-label" for="inlineRadio1">Radio1</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="radio1" id="inlineRadio2" value="T">
                  <label class="form-check-label" for="inlineRadio2">Radio2</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Upload File/Foto</label>
                <input class="form-control" id="exampleFormControlFile1" type="file" name="foto_barang">
              </div>
              <button type="submit" class="btn btn-primary" name="submit">SIMPAN</button>
              <button type="reset" class="btn btn-warning">BATAL</button>
            </form><br>
            <?php

            // Check If form submitted, insert form data into users table.
            if (isset($_POST['submit'])) {
              $kode_barang = $_POST['kode_barang'];
              $nama_barang = $_POST['nama_barang'];
              $jenis_barang = $_POST['jenis_barang'];
              $deskripsi = $_POST['deskripsi'];
              $harga = $_POST['harga'];
              $foto_barang = $_POST['foto_barang'];


              // include database connection file
              include_once("koneksi.php");

              // Insert user data into table
              $result = mysqli_query($conn, "INSERT INTO tbl_barang(kode_barang,nama_barang,jenis_barang,deskripsi,harga,foto_barang) VALUES('$kode_barang','$nama_barang','$jenis_barang','$deskripsi','$harga','$foto_barang')");

              // Show message when user added
              echo "User added successfully. <a href='index.php'>View Users</a>";
            }
            ?>

            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Pesan berhasil (alert success)!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert alert-info alert-dismissible fade show" role="alert">
              Pesan informasi (alert info)!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              Pesan Peringatan (alert warning)!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Pesan Kesalahan (alert error)!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div><br>
    <div class="card">
      <div class="card-body">
        <center>
          Copyright &copy; 2023 LSP Universitas Teknologi Mataram</center>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
</body>

</html>