<?php
include 'layout/header.php';

if (isset($_POST['tambah-penyelenggara'])) {
    if (create_penyelenggara($_POST) > 0) {
        echo "<script> 
                alert('Data Penyelenggara Berhasil Ditambahkan');
                document.location.href = 'penyelenggara.php'
            </script>";
    } else {
        echo "<script> 
                alert('Data Penyelenggara Gagal Ditambahkan');
                document.location.href = 'penyelenggara.php'
            </script>";
    }
}?>

<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Tambah Data Penyelenggara</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container">
                        <form action="" method="post">
                        <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Nama Penyelenggara</label>
                                <input class="form-control" type="text" value="" id="penyelenggara" name="nama_penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Nama Event</label>
                                <input class="form-control" type="text" value="" id="penyelenggara" name="nama_event" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Email Penyelenggara</label>
                                <input class="form-control" type="text" value="" id="penyelenggara" name="email_penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Sosmed Penyelenggara</label>
                                <input class="form-control" type="text" value="" id="penyelenggara" name="sosmed_penyelenggara" required>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary btn-lg w-100" name="tambah-penyelenggara">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>