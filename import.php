<?php include "aksi.php"; ?>
<main class="main-content position-relative border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>Import Data</h6>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="container">
                        <form method="POST" enctype="multipart/form-data" action="">
                            Masukan Data dari Excel: 
                            <input name="filexls" type="file" required="required" id="fomrFile"> 
                            <input name="submit" type="submit" value="Import">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'layout/footer.php'; ?>