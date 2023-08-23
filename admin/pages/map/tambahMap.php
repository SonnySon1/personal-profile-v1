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
                            <h5 class="card-subtitle"> Masukan Map / lokasi kamu </h5>
                            <form class="form-horizontal mt-4" action="../../proses/prosesMap/prosesTambahMap.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Map</label>
                                    <textarea name="map" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label>Location Link</label>
                                    <input type="text" name="location_link" class="form-control" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="tel" name="phone_number" class="form-control" rows="5"></input>
                                </div>
                                <div class="form-group">
                                    <label>Phone Number Link</label>
                                    <input type="text" name="phone_link" class="form-control" rows="5"></input>
                                </div>
                                <div>
                                    <button type="" class="btn btn-secondary">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
                <?php include"../../includes/footer.php" ?>