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

// lakukan sebuah query untuk menampilkan data dari table about
$data = query("SELECT * FROM about");
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
                                <h4 class="card-title">About</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">About</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Pekerjaan</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Edit</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $data
                                            $no = 1;
                                            foreach ($data as $dat) : ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><img src="../../../images/<?= $dat['foto']; ?>" style="border-radius:5px;" width="60" alt=""></td>
                                            <td>Pilih detail untuk melihat data secara lengkap...</td>
                                            <td><?= $dat['nama']; ?></td>
                                            <td><?= $dat['pekerjaan']; ?></td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="detailAbout.php?iesaxd=<?= $dat['id_about']; ?>">Detail</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="editAbout.php?iesaxd=<?= $dat['id_about']; ?>">Edit</a>
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