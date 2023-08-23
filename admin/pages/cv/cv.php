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

// lakukan sebuah query untuk menampilkan data dari table cv
$query_cv = query("SELECT * FROM cv");
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
                                <h4 class="card-title">Cv</h4>
                            </div>
                            <h3 style="position:absolute; right:0px; margin-top:0px; margin-right:10px;"><a href="tambahCv.php" style="color: black;">+</a></h3>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Cv</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $query_cv
                                            $no = 1;
                                            foreach ($query_cv as $dat_cv) : ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><?= $dat_cv['link_cv'] ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="editCv.php?iesaxd=<?= $dat_cv['id_cv']; ?>">Edit</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus Cv ini?');" href="../../proses/prosesCv/prosesHapusCv.php?iesaxd=<?= $dat_cv['id_cv']; ?>">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            
            <!-- footer -->
                <?php include"../../includes/footer.php" ?>