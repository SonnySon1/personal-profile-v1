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
                            <h5 class="card-subtitle"> Masukan Testimoni </h5>
                            <form class="form-horizontal mt-4" action="../../proses/prosesTestimoni/prosesTambahTestimoni.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Name Client</label>
                                    <input name="name" type="text" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input name="image" type="file" class="form-control" >
                                </div>
                                <div>
                                    <button type="Submit" class="btn btn-secondary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
                <?php include"../../includes/footer.php" ?>