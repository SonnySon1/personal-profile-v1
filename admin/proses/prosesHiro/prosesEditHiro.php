<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
            $id             = $_POST['iesaxd'];
            $fotoL          = $_POST['imageL'];

        // cek user mengganti gambar atau tidak
            if ($_FILES['image']['error'] == 4) {
                $foto = $fotoL;
            }else{
                $foto = image_upload();
            }

            

            // masukan semua data ke dalam databse
               $querr =   mysqli_query($connect, "UPDATE hiro SET 
                                                    foto= '$foto'
                                                    WHERE id_hiro = '$id'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['tambahber'] = "Edit Data Berhasil";
        echo"<script>
                    document.location.href='../../pages/hiro/hiro.php';
            </script>";
    }else{
        $_SESSION['editfall'] = "Edit Data Gagal";
        echo"<script>
                    document.location.href='../../pages/hiro/hiro.php';
            </script>";
    }
?>
