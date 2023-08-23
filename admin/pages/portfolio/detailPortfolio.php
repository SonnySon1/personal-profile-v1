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

$id_portfolio = $_GET['iesaxd'];

// lakukan sebuah query untuk menampilkan data dari table about
$data = query("SELECT * FROM portfolio WHERE id_portfolio = '$id_portfolio'");
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
                                <h4 class="card-title"> Detail About</h4>
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
                                            <th scope="col">Project</th>
                                            <td><?= $dat['project']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Sub Judul</th>
                                            <td><?= $dat['subjudul']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <td style="text-align: justify;"><?= $dat['description']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Nama Aplikasi</th>
                                            <td><?= $dat['nama_aplikasi']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Developer</th>
                                            <td><?= $dat['developer']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Tahun Pembuatan</th>
                                            <td><?= $dat['thn_pembuatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Status</th>
                                            <td><?= $dat['status']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Link Situs</th>
                                            <td><?= $dat['link_situs']; ?></td>
                                        </tr>
                                        <tr>
                                        <?php endforeach; ?>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            
            <!-- footer -->
                <?php include"../../includes/footer.php" ?>