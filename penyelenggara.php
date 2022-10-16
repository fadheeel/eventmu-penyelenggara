<?php
include 'layout/header.php';
$data_penyelenggara = select('SELECT * FROM penyelenggara');
?>

<main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <h6 class="font-weight-bolder text-white mb-0">Penyelenggara Event</h6>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                        <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                            <div class="sidenav-toggler-inner">
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                                <i class="sidenav-toggler-line bg-white"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Penyelenggara</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <a href="tambah-penyelenggara.php" class="btn bg-gradient-primary my-2 mx-4">Tambah Penyelenggara</a>
                        <a href="import.php" class="btn bg-gradient-primary my-2 mx-4">Import</a>
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7 px-4">Nama Penyelenggara</th>
                                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7 px-3">Nama Event</th>
                                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7 px-3">Email</th>
                                        <th class="text-uppercase text-primary text-xs font-weight-bolder opacity-7 px-3">Sosmed</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($data_penyelenggara as $data) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3">
                                                    <div class="my-auto">
                                                    <p class="text-sm font-weight-bold mb-0"><?= $data["nama_penyelenggara"] ?></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-3 ">
                                                <p class="text-sm font-weight-bold mb-0"><?= $data["nama_event"] ?></p>
                                            </td>
                                            <td class="px-3">
                                                <p class="text-sm font-weight-bold mb-0"><?= $data["email_penyelenggara"] ?></p>
                                            </td>
                                            <td class="px-3">
                                                <p class="text-sm font-weight-bold mb-0"><?= $data["sosmed_penyelenggara"] ?></p>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                <a href="ubah-penyelenggara.php?id_penyelenggara=<?= $data['id_penyelenggara'] ?>" class="btn bg-gradient-warning">Edit</a>
                                                <a href="hapus-penyelenggara.php?id_penyelenggara=<?= $data['id_penyelenggara'] ?>" class="btn bg-gradient-danger" onclick="return confirm('Apakah yakin data penyelenggara akan dihapus?')">Hapus</a>
                                            </td>
                                        </tr>
                                  <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>