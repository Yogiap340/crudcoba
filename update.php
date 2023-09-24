<!doctype html>
<html lang="en">
<?php
include 'koneksi.php';


$tbl_barang = mysqli_query($conn, "SELECT * FROM tbl_barang WHERE kode_barang = '$_GET[kode_barang]'");

$data = mysqli_fetch_array($tbl_barang);


if (isset($_POST['edit'])) {
    $kode_barang = $_POST["kode_barang"];
    $nama_barang = $_POST["nama_barang"];
    $jenis_barang = $_POST["jenis_barang"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];
    $foto_barang = $_POST["foto_barang"];
    $edit = mysqli_query($conn, "UPDATE tbl_barang SET 
                                nama_barang = '$nama_barang',
                                jenis_barang = '$jenis_barang',
                                deskripsi = '$deskripsi',
                                harga = '$harga',
                                foto_barang = '$foto_barang'
                                WHERE kode_barang = '$kode_barang'
            ");

    if ($edit) {
        echo "<script>
                    alert('Data Berhassil Diubah!');
                    document.location='tabel.php';
                </script>";
        # code...
    } else {
        echo "<script>
                    alert('Data Gagal Diubah!');
                    document.location='edit.php';
                </script>";
    }
}

?>

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
            <a class="navbar-brand" href="index.php">
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
                    <h5 class="card-header text-white bg-primary">Form Ubah Barang</h5>
                    <div class="card-body">


                        <!-- <h5>Tabel Tambah Barang</h5> -->
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Kode Barang</label>
                                <input type="text" name="kode_barang" class="form-control" value="<?= $data["kode_barang"] ?>" placeholder="Ketik disini">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control" value="<?= $data["nama_barang"] ?>" placeholder="Ketik disini">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Barang</label>
                                <select class="form-control" value="<?= $data["jenis_barang"] ?>" name="jenis_barang">
                                    <option>Elektronik</option>
                                    <option>Fashion</option>
                                    <option>Baku</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Deskripsi</label>
                                <input type="text" class="form-control" value="<?= $data["deskripsi"] ?>" name="deskripsi" rows="3">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Harga</label>
                                <input type="number" name="harga" class="form-control" value="<?= $data["harga"] ?>" placeholder="Ketik disini">
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Upload File/Foto</label>
                        <input class="form-control" value="<?= $data["foto_barang"] ?>" name="foto_barang" type="file">
                    </div>

                    <button type="submit" class="btn btn-primary" name="edit">Ubah</button>
                    <a href="tabel.php" class="btn btn-danger">Batal</a>

                    </form><br>
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