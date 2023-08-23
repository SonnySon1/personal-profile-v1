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



if (!isset($_SESSION['iesaxd'])) {
    // tangkap id dari url
    $id = $_GET['iesaxd'];
    // Lakukan sebuah query untuk menampilkan data berdasarjab ud
    $dat = query("SELECT * FROM about WHERE id_about = '$id'")[0];
    
}else{
    $id_sess_edit_about = $_SESSION['iesaxd'];
    $dat = query("SELECT * FROM about WHERE id_about = '$id_sess_edit_about'")[0];

    unset($_SESSION['iesaxd']);

}

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
            <div class="container-fluid ">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h5 class="card-subtitle"> Masukan About/tentang dirimu </h5>
                            <form class="form-horizontal mt-4" action="../../proses/prosesAbout/prosesEditAbout.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="iesaxd" value="<?=  $dat['id_about'] ?>">
                            <input type="hidden" name="imageL" value="<?=  $dat['foto'] ?>">
                                <div class="form-group">
                                    <label>About</label>
                                    <textarea name="about" class="form-control" rows="5"><?= $dat['about'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input name="nama" type="text" class="form-control" value="<?= $dat['nama'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input name="pekerjaan" type="text" class="form-control" value="<?= $dat['pekerjaan'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Foto</label><br>
                                    <img src="../../../images/<?= $dat['foto']; ?>" style="border-radius:5px;" width="90" alt="">
                                    <input name="image" type="file" class="form-control mt-2" >
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