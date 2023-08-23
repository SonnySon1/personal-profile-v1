<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

            $link_cv = htmlspecialchars(mysqli_real_escape_string($connect, $_POST["link_cv"]));
            
            // cek apakah upload gambar berhasil atau tidak
                if (!$link_cv) {

                    // jika gagal gagalkan peroses pemasukan data
                       echo"<script>
                            document.location.href='../../pages/cv/tambahCv.php';
                        </script>";
                    return false;
                }

            // masukan semua data ke dalam databse
                mysqli_query($connect, "INSERT INTO cv VALUES('', '$link_cv')");

            //  cek nilai affectd dari $connect
                $aff = mysqli_affected_rows($connect);
            
            // cek apakah bilai affectd lebih dari 0 atau tidak
                if ($aff > 0) {

                    $_SESSION['tambahber'] = "Tambah Data Berhasil";
                    // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                        echo"<script>
                             document.location.href='../../pages/cv/cv.php';
                            </script>";
                }else{
                // tapi selain dari itu jika nilai yang di kembalikan adalah -1 maka tampilkan pesan bahwa data gagal di edit
                    // jika nilai lebih dari 1 maka tampilkan bahwa tambah berhasil
                    $_SESSION['editfall'] = "Data Gagal Di Tambahkan";
                    echo"<script>
                            document.location.href='../../pages/cv/tambahCv.php';
                        </script>";
                }












?>