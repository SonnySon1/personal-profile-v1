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
$data = query("SELECT * FROM message");
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
                                <h4 class="card-title">Message</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Date</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">message</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $data
                                            
                                            foreach ($data as $dat) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $dat['date']; ?></td>
                                            <td><?= $dat['name']; ?></td>
                                            <td><?= $dat['email']; ?></td>
                                            <td><?= $dat['subject']; ?></td>
                                            <td>Pilih detail untuk melihat data secara lengkap...</td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="detailPesan.php?iesaxd=<?= $dat['id_message']; ?>">Detail</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus message ini?');" href="../../proses/prosesPesan/prosesHapusPesan.php?iesaxd=<?= $dat['id_message']; ?>">Delete</a>
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