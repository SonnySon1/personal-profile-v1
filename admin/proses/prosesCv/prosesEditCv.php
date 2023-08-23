<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
        $id = $_POST['iesaxd'];
        $link_cv = htmlspecialchars(mysqli_real_escape_string($connect, $_POST['link_cv']));
            

            // masukan semua data ke dalam databse
               $querr =   mysqli_query($connect, "UPDATE cv SET 
                                                    link_cv= '$link_cv'
                                                    WHERE id_cv = '$id'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['editber'] = "Data Edit Berhasil";
        echo"<script>
                document.location.href='../../pages/cv/cv.php';
            </script>";
    }else{

        $_SESSION['editfall'] = "Data Edit Gagal";
        echo"<script>
                document.location.href='../../pages/cv/cv.php';
            </script>";
    }
?>