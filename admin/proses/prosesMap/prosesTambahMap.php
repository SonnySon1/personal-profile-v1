<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol tambahmap telah di tekan atau belum jika belum maka pindahkan user ke halaman tambahSkils.php untuk pembatalan proses penambahan data

         // ambil data dari setip value pada input
         $map                   = mysqli_real_escape_string($connect, $_POST['map']);
         $phone_number          = mysqli_real_escape_string($connect, $_POST['phone_number']);
         $phone_link            = mysqli_real_escape_string($connect, $_POST['phone_link']);
         $location              = mysqli_real_escape_string($connect, $_POST['location'])    ;
         $location_link         = mysqli_real_escape_string($connect, $_POST['location_link']);
         
     // cek apakah ada value yang di inputkan pada masing masing text fild
         if (empty($map) ||empty($phone_number) ||empty($location)) {
             // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
             $_SESSION['editfall'] = "Tambah Data Gagal Harap Isi Semua Data Yang Ada Agar Data Dapat Di Simpan!";
             echo "
                     <script>
                         document.location.href='../../pages/map/map.php';
                     </script>;
                 ";
             return false;
         }
            
            // masukan semua data ke dalam databse
                mysqli_query($connect, "INSERT INTO map VALUES('', '$map', '$phone_number', '$phone_link', '$location', '$location_link')");

            //  cek nilai affectd dari $connect
                $aff = mysqli_affected_rows($connect);
            
            // cek apakah bilai affectd lebih dari 0 atau tidak
                if ($aff > 0) {


                    $_SESSION['tambahber'] = "Tambah Data Berhasil";
                    // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                        echo"<script>
                            document.location.href='../../pages/map/map.php';

                            </script>";
                }else{
                // tapi selain dari itu jika nilai yang di kembalikan adalah -1 maka tampilkan pesan bahwa data gagal di edit
                    // jika nilai lebih dari 1 maka tampilkan bahwa tambah berhasil

                    $_SESSION['editfall'] = "Tambah Data Gagal";
                    // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                        echo"<script>
                            document.location.href='../../pages/map/map.php';

                            </script>";
                }












?>