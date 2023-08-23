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

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Nice lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Nice admin lite design, Nice admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Nice Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/niceadmin-lite/" /> 
    <!-- Custom CSS -->
    <link href="../../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- incon boot -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <style>
        
    </style>
</head>

<body>
    

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
                        <h5 class="card-subtitle fs-3"> Edit Blog / Artikel </h5>
                            <form class="form-horizontal mt-4" action="../../proses/prosesBlog/prosesTambahBlog.php" method="post" style="padding: 20px;" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label style="font-size: 13px;">Blog</label>
                                    <input name="blog" type="text" class="form-control p-4 font-14" >
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 13px;">penulis</label>
                                    <input name="penulis" type="text" class="form-control p-4 font-14" >
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 13px;">Sub Judul</label>
                                    <textarea name="subjudul" class="form-control p-4 font-14" rows="5"></textarea>
                                </div>
                                <div class="form-group" style="font-size: 14px;">
                                  <label style="font-size: 13px;">Deskripsi</label>
                                  <textarea name="deskripsi" id="summernote" style="font-size: 30px;"></textarea>
                                </div>
                                <div class="form-group">
                                    <label style="font-size: 13px;">Tanggal Post</label>
                                    <input name="tanggalPost" type="date" class="form-control p-4 font-14">
                                </div>
                                <div class="form-group ">
                                    <label style="font-size: 13px;">Foto</label>
                                    <input name="image" type="file" class="form-control font-14">
                                </div>
                                <div class="form-group ">
                                    <button type="" class="btn btn-secondary mt-3">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- footer -->
               <!-- footer -->
            <footer class="footer text-center foot" style="position: relative; top:16px;">
                Copyright &copy 2023 <a href="#" style="font-weight: bold; ">SxiSyoni.com</a> All Rights Reserved
            </footer>
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
  </script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>