<?php
session_start();


// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
            $id             = $_POST['iesaxd'];
            $about          = mysqli_escape_string($connect, $_POST['about']);
            $nama           = mysqli_escape_string($connect, $_POST['nama']);
            $fotoL          = $_POST['imageL'];
            $pekerjaan      = mysqli_escape_string($connect,  $_POST['pekerjaan']);
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($about) || empty($nama) || empty($pekerjaan)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Edit Data Gagal Harap Isi Semua Data Yang Ada Agar Data Baru Dapat Di Simpan!";
                $_SESSION['iesaxd'] = $id;
                echo "
                        <script>
                            document.location.href='../../pages/about/editAbout.php';
                        </script>
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
               $querr =   mysqli_query($connect, "UPDATE about SET 
                                                    about = '$about',
                                                    foto = '$foto',
                                                    nama   = '$nama',
                                                    pekerjaan   = '$pekerjaan'
                                                    WHERE id_about = '$id'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['editber'] = "Edit Berhasil";
        echo "
            <script>
                 document.location.href='../../pages/about/about.php';
            </script>
        ";
    }else{

        $_SESSION['editfall'] = "Edit Data Gagal!";

        echo"<script>
                document.location.href='../../pages/about/about.php';
            </script>";
    }
?>
