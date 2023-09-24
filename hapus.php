<?php
include 'koneksi.php';
if (isset($_GET['kode_barang'])) {
    $hapus = mysqli_query($conn, "DELETE FROM tbl_barang WHERE kode_barang = '$_GET[kode_barang]'");

    if ($hapus) {
        echo "<script>
                    alert('Data Berhassil Dihapus!');
                    document.location='tabel.php';
                </script>";
        # code...
    } else {
        echo "<script>
                    alert('Data Gagal Dihapus!');
                    document.location='form.php';
                </script>";
    }
}
