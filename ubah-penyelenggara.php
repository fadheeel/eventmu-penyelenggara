<?php
include 'layout/header.php';
$id = (int)$_GET['id_penyelenggara'];
$penyelenggara = select("SELECT * FROM penyelenggara WHERE id_penyelenggara = $id")[0];

if (isset($_POST['ubah-penyelenggara'])) {
    if (ubah_penyelenggara($_POST) > 0) {
        echo "<script> 
                alert('Data Penyelenggara Berhasil Diupdate');
                document.location.href = 'penyelenggara.php'
            </script>";
    } else {
        echo "<script> 
                alert('Data Penyelenggara Gagal Diupdate');
                document.location.href = 'penyelenggara.php'
            </script>";
    }
}?>

<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Update Data Penyelenggara</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container">
                        <form action="" method="post">
                        <input class="form-control" type="hidden" value="<?= $penyelenggara['id_penyelenggara'] ?>" id="id_penyelenggara" name="id_penyelenggara" required>
                        <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Nama Penyelenggara</label>
                                <input class="form-control" type="text" value="<?= $penyelenggara['nama_penyelenggara']?>" id="penyelenggara" name="nama_penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Nama Event</label>
                                <input class="form-control" type="text" value="<?= $penyelenggara['nama_event']?>" id="penyelenggara" name="nama_event" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Email Penyelenggara</label>
                                <input class="form-control" type="text" value="<?= $penyelenggara['email_penyelenggara']?>" name="email_penyelenggara" required>
                            </div>
                            <div class="form-group">
                                <label for="penyelenggara" class="form-control-label">Sosmed Penyelenggara</label>
                                <input class="form-control" type="text" value="<?= $penyelenggara['sosmed_penyelenggara']?>" id="penyelenggara" name="sosmed_penyelenggara" required>
                            </div>
                            <button type="submit" class="btn bg-gradient-primary btn-lg w-100" name="ubah-penyelenggara">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>