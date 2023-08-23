<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
            $id                = $_POST['iesaxd'];
            $map               = mysqli_real_escape_string($connect, $_POST['map']);
            $phone_number      = mysqli_real_escape_string($connect, $_POST['phone_number']);
            $phone_link      = mysqli_real_escape_string($connect, $_POST['phone_link']);
            $location          = mysqli_real_escape_string($connect, $_POST['location']);
            $location_link          = mysqli_real_escape_string($connect, $_POST['location_link']);
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($map) ||empty($phone_number) ||empty($location)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Edit Data Gagal Harap Isi Semua Data Yang Ada Agar Data Dapat Di Simpan!";
                echo "
                        <script>
                            document.location.href='../../pages/map/map.php';
                        </script>;
                    ";
                return false;
            }
            
            // masukan semua data ke dalam databse
               $querr =   mysqli_query($connect, "UPDATE map SET 
                                                    map = '$map',
                                                    phone_number = '$phone_number',
                                                    phone_link = '$phone_link',
                                                    location = '$location',
                                                    location_link = '$location_link'
                                                    WHERE id_map = '$id'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['editber'] = "Edit Berhasil";
        echo"<script>
                document.location.href='../../pages/map/map.php';
            </script>";
    }else{
        echo"<script>
                alert('data gagal di edit');
                document.location.href='../../pages/map/map.php';
            </script>";
    }
?>