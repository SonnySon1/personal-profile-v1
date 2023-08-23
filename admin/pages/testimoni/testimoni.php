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

// lakukan sebuah query untuk menampilkan data dari table testimoni
$data = query("SELECT * FROM testimoni");
$data2 = mysqli_query($connect, "SELECT * FROM testimoni");
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
                                <h4 class="card-title">Testimoni</h4>
                            </div>
                            <h3 style="position:absolute; right:0px; margin-top:0px; margin-right:10px;"><a href="tambahTestimoni.php" style="color: black;">+</a></h3>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Name Client</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Detail</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                        // lakukan sebuah pengulangan untuk mengulang data array multi di mensi yang ada pada variable $data
                                        $d = mysqli_num_rows($data2);
                                        $no = 1;
                                        foreach ($data as $dat) : ?>
                                    <tbody>
                                        <tr>
                                            <th scope="row"><?= $no++ ?></th>
                                            <td><img src="../../../images/<?= $dat['image']; ?>" style="border-radius:5px;" width="60" alt=""></td>
                                            <td><?= $dat['name_client']; ?></td>
                                            <td>Pilih detail untuk melihat data secara lengkap...</td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="detailTestimoni.php?iesaxd=<?= $dat['id_cln']; ?>">Detail</a>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-secondary" href="editTestimoni.php?iesaxd=<?= $dat['id_cln']; ?>">Edit</a>
                                            </td>
                                            <td>
                                                <a href="../../proses/prosesTestimoni/prosesHapusTestimoni.php?iesaxd=<?= $dat['id_cln']; ?>" class="btn btn-sm btn-danger">Delete</a>
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