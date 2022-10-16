<?php
include 'config/app.php';
$id = (int)$_GET['id_penyelenggara'];
if (delete_penyelenggara($id) > 0) {
    echo "<script> 
                alert('Data Penyelenggara Berhasil Dihapus');
                document.location.href = 'penyelenggara.php'
            </script>";
} else {
    echo "<script> 
                alert('Data Penyelenggara Gagal Dihapus');
                document.location.href = 'penyelenggara.php'
            </script>";
}