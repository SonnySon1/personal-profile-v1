<?php 
// jalankan session untuk mengakses variable super global $_SESSION
session_start();

// cek apakah ada session login atau tidak
    if (!isset($_SESSION['login'])) {

        // jika jik atidak ada maka pindahkan user ke halaman login untuk proses login sebagai admin
            header("Location: ../../index.php");

    }


// membutuhkan file query.php untuk melakukan sebuh query penampilan data pada database
require "../../connectAndFunction/query.php";


// tangkap id dari url
$id = $_GET['iesaxd'];

// Lakukan sebuah query untuk menampilkan data berdasarjab ud
    $dat = query("SELECT * FROM portfolio WHERE id_portfolio = '$id'")[0];

?>
<!-- head -->
<?php include"../../nice-html/ltr/index.php"; ?>  
<!-- /head -->

    
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        
        <!-- navbar -->
            <?php include"../../includes/navbar.php" ?>
        <!-- /navbarend -->

        
        <!-- sidebar -->
            <?php include"../../includes/sidebar.php" ?>
        <!-- /sidebarend -->


        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h5 class="card-subtitle"> Edit Portfolio / project yang pernah kamu kerjakan </h5>
                            <form class="form-horizontal mt-4" action="../../proses/prosesPortfolio/prosesEditPortfolio.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="iesaxd" value="<?=  $dat['id_portfolio'] ?>">
                           <input type="hidden" name="imageL" value="<?=  $dat['foto'] ?>">
                                <div class="form-group">
                                    <label>Project</label>
                                    <input name="project" type="text" class="form-control" value="<?= $dat['project']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Sub Judul</label>
                                    <input type="text" name="subjudul" class="form-control" rows="5" value="<?= $dat['subjudul']; ?>"></input>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="5"><?= $dat['project']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label><br>
                                    <img src="../../../images/<?= $dat['foto']; ?>" style="border-radius:5px;" width="90" alt="">
                                    <input name="image" type="file" class="form-control mt-2">
                                </div>
                                <h5 class="card-subtitle mt-5"> Masukan Profile Project </h5>
                                <div class="form-group">
                                    <label>Nama Aplikasi</label>
                                    <input name="namaAplikasi" type="text" class="form-control" value="<?= $dat['nama_aplikasi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Aplikasi</label>
                                    <input name="jenisAplikasi" type="text" class="form-control" value="<?= $dat['jenis_aplikasi'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Developer</label>
                                    <input name="developer" type="text" class="form-control" value="<?= $dat['developer'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Tahun Pembuatan</label>
                                    <input name="thnPembuatan" type="text" class="form-control" value="<?= $dat['thn_pembuatan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input name="status" type="text" class="form-control" value="<?= $dat['status'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Link Situs</label>
                                    <input name="link_situs" type="url" class="form-control" value="<?= $dat['link_situs'] ?>">
                                </div>
                                <div>
                                    <button type="" class="btn btn-secondary">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
                <?php include"../../includes/footer.php" ?>