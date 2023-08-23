<?php  
// jalankan session untuk mengakses variable super global $_SESSION
session_start();

// cek apakah ada session login atau tidak
    if (!isset($_SESSION['login'])) {

        // jika jik atidak ada maka pindahkan user ke halaman login untuk proses login sebagai admin
            header("Location: ../../index.php");

    }


// membutuhkan file query.php untuk melakukan sebuh query penampilan data pada database
require"../../connectAndFunction/query.php";

$id_blog = $_GET['iesaxd3'];

// lakukan sebuah query untuk menampilkan data dari table blog
$data = query("SELECT * FROM blog WHERE id_blog = '$id_blog'");
?>

<!-- head -->
<?php include"../../nice-html/ltr/index.php"; ?>  
<!-- /head -->

    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">

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
            <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"> Detail Blog</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $data
                                            foreach ($data as $dat) : ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">Foto</th>
                                            <td><img src="../../../images/<?= $dat['foto']; ?>" style="border-radius:5px;" width="60" alt=""></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Blog</th>
                                            <td><?= $dat['blog']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Sub Judul</th>
                                            <td><?= $dat['subjudul']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Deskripsi</th>
                                            <td style="text-align: justify;"><?= $dat['deskripsi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Tanggal Post</th>
                                            <td><?= $dat['tanggal_post']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Penulis</th>
                                            <td><?= $dat['penulis']; ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            
            <!-- footer -->
                <?php include"../../includes/footer.php" ?>