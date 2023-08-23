<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';


// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data
        // ambil data dari setip value pada input
            $id_blog           = $_POST['iesaxd3'];
            $blog              = htmlspecialchars(mysqli_escape_string($connect, $_POST['blog']));
            $subjudul          = htmlspecialchars(mysqli_escape_string($connect, $_POST['subjudul']));
            $deskripsi         = mysqli_real_escape_string($connect, $_POST['deskripsi']);
            $tanggalPost       = htmlspecialchars(mysqli_escape_string($connect, $_POST['tanggalPost']));
            $penulis           = htmlspecialchars(mysqli_escape_string($connect, $_POST['penulis']));
            $fotoL             = $_POST['imageL'];
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($blog) ||empty($penulis) || empty($tanggalPost) || empty($deskripsi)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Edit Data Gagal Harap Isi Semua Data Yang Ada Agar Data Dapat Di Simpan!";
                echo "
                        <script>
                            document.location.href='../../pages/blog/blog.php';
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
               $querr =   mysqli_query($connect, "UPDATE blog SET 
                                                    blog = '$blog',
                                                    subjudul = '$subjudul',
                                                    deskripsi = '$deskripsi',
                                                    foto   = '$foto',
                                                    tanggal_post   = '$tanggalPost',
                                                    penulis   = '$penulis'
                                                    WHERE id_blog = '$id_blog'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {
        $_SESSION['editber'] = "Edit Berhasil";
        echo"<script>
                document.location.href='../../pages/blog/blog.php';
            </script>";
    }else{
        $_SESSION['editfall'] = "Edit Gagal";
        echo"<script>
                document.location.href='../../pages/blog/blog.php';
            </script>";
    }
?>
