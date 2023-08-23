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

$id_Map = $_GET['iesaxd'];

// lakukan sebuah query untuk menampilkan data dari table map
$data = query("SELECT * FROM map WHERE id_map = '$id_Map'");
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
                                <h4 class="card-title"> Detail Map</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $data
                                            foreach ($data as $dat) : ?>
                                    <thead>
                                        <tr>
                                            <th scope="col">Map</th>
                                            <td><?= $dat['map']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone Number</th>
                                            <td><?= $dat['phone_number']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Phone Link</th>
                                            <td><?= $dat['phone_link']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Location_Link</th>
                                            <td><?= $dat['location_link']; ?></td>
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