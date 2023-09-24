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
            <a class="nav-link" href="index.html"><i class="fa fa-home"></i> Dashboard <span class="sr-only">(current)</span></a>
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
          <h5 class="card-header text-white bg-primary">Dashboard</h5>
          <div class="card-body">
            <h5 class="card-title">Petuntuk :</h5>
            <p>Dalam uji kompetensi Lead Programmer, Anda diharuskan menggunakan template yang disediakan ini.
              Template ini merupakan template website responsive yang dibuat menggunakan framework Bootstrap.
              Template ini terdiri dari 3 halaman yaitu :
            <ol>
              <li>LOGIN, digunakan untuk halaman login atau masuk ke sistem.
              <li>FORM, digunakan untuk halaman tambah data dan ubah data.
              <li>TABEL, digunakan untuk halaman tampil data.
            </ol>
            Proses hapus data tidak memerlukan template, cukup dengan icon hapus pada halaman tampil data.
            Semoga uji kompetensi Anda sukses.<br>
            TTD<br>
            <b>Ketua LSP UTM</b>
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