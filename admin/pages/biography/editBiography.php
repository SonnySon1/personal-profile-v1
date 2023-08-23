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


if (!isset($_SESSION['iesaxd2'])) {
    // tangkap id dari url
    $id = $_GET['iesaxd2'];
    // Lakukan sebuah query untuk menampilkan data berdasarjab id
    $dat = query("SELECT * FROM biography WHERE id_bio = '$id'")[0];
    
}else{
    $id_sess_edit_biography = $_SESSION['iesaxd2'];
    $dat = query("SELECT * FROM biography WHERE id_bio = '$id_sess_edit_biography'")[0];
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
            <div class="container-fluid">
                
                <div class="row">
                    <div class="col-12">
                        <div class="card card-body">
                            <h5 class="card-subtitle"> Masukan Biography /  Data Diri Kamu </h5>
                            <form class="form-horizontal mt-4" action="../../proses/prosesBiography/prosesEditBiography.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="iesaxd2" value="<?=  $dat['id_bio'] ?>">
                           <input type="hidden" name="imageL" value="<?=  $dat['image'] ?>">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input name="name" type="text" class="form-control" value="<?= $dat['name'] ?>" >
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" type="text" class="form-control" value="<?= $dat['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="address" type="text" class="form-control" value="<?= $dat['address'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input name="phone" type="tel" class="form-control" value="<?= $dat['phone'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" value="<?= $dat['title'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="dess" class="form-control" rows="5"><?= $dat['description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Foto</label><br>
                                    <img src="../../../images/<?= $dat['image']; ?>" style="border-radius:5px;" width="90" alt="">
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