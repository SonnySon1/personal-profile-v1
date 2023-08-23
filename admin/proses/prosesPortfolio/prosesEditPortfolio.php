<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
        $id               = $_POST['iesaxd'];
        $fotoL            = $_POST['imageL'];
        $project          = mysqli_real_escape_string($connect, $_POST['project']);
        $subJudul         = mysqli_real_escape_string($connect, $_POST['subjudul']);
        $description      = mysqli_real_escape_string($connect, $_POST['description']);
        $namaAplikasi     = mysqli_real_escape_string($connect, $_POST['namaAplikasi']);
        $jenisAplikasi    = mysqli_real_escape_string($connect, $_POST['jenisAplikasi']);
        $developer        = mysqli_real_escape_string($connect, $_POST['developer']);
        $thnPembuatan     = mysqli_real_escape_string($connect, $_POST['thnPembuatan']);
        $status           = mysqli_real_escape_string($connect, $_POST['status']);
        $link             = mysqli_real_escape_string($connect, $_POST['link_situs']);
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($project) || empty($description)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Edit Data Gagal Harap Isi Semua Data Yang Ada Agar Data Dapat Di Simpan!";
                echo "
                        <script>
                            document.location.href='../../pages/portfolio/portfolio.php';
                        </script>;
                    ";
                return false;
            }
        // cek user mengganti gambar atau tidak
            if ($_FILES['image']['error'] == 4) {
                $foto = $fotoL;
            }else{
                $foto = image_upload();
            }

            
        // masukan semua data ke dalam databse
            $querr =   mysqli_query($connect, "UPDATE portfolio SET 
                                                project = '$project',
                                                subjudul = '$subJudul',
                                                description  = '$description',
                                                foto = '$foto',
                                                nama_aplikasi = '$namaAplikasi',
                                                jenis_aplikasi = '$jenisAplikasi',
                                                developer = '$developer',
                                                thn_pembuatan = '$thnPembuatan',
                                                status = '$status',
                                                link_situs = '$link'
                                                WHERE id_portfolio = '$id'
                                                ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['editber'] = "Edit Data Berhasil";
        echo"<script>
                document.location.href='../../pages/portfolio/portfolio.php';             
            </script>";
    }else{
        $_SESSION['editfall'] = "Edit Data Gagal";
        echo"<script>
                document.location.href='../../pages/portfolio/portfolio.php';             
            </script>";
    }
?>