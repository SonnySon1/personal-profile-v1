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

// lakukan sebuah query untuk menampilkan data dari table hiro
$query_hiro = query("SELECT * FROM hiro");

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
                                <h4 class="card-title">Hiro</h4>
                            </div>
                            <h3 style="position:absolute; right:0px; margin-top:0px; margin-right:10px;"><a href="tambahHiro.php" style="color: black;">+</a></h3>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Hiro</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $query_hiro
                                            $no = 1;
                                            foreach ($query_hiro as $dat) : ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><img src="../../../images/<?= $dat['foto']; ?>" style="border-radius:5px;" width="60" alt=""></td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="editHiro.php?iesaxd=<?= $dat['id_hiro']; ?>">Edit</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus hiro ini?');" href="../../proses/prosesHiro/prosesHapusHiro.php?iesaxd=<?= $dat['id_hiro']; ?>">Delete</a>
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