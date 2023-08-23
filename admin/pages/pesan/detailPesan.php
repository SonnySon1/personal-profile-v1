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

$id_message = $_GET['iesaxd'];

// lakukan sebuah query untuk menampilkan data dari table 
$data = query("SELECT * FROM message WHERE id_message = '$id_message'");
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
                                            <th scope="col">Date</th>
                                            <td><?= $dat['date'] ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <td><?= $dat['name']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Email</th>
                                            <td><?= $dat['email']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Subject</th>
                                            <td><?= $dat['subject']; ?></td>
                                        </tr>
                                        <tr>
                                            <th scope="col">Message</th>
                                            <td><?= $dat['message']; ?></td>
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