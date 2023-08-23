<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
            $id               = $_POST['iesaxd'];
            $hobby            = mysqli_real_escape_string($connect, $_POST['hobby']);
            $description      = mysqli_real_escape_string($connect, $_POST['description']);
            $fotoL            = $_POST['imageL'];
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($hobby) || empty($description)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Edit Data Gagal Harap Isi Semua Data Yang Ada Agar Data Dapat Di Simpan!";
                echo "
                        <script>
                            document.location.href='../../pages/hobby/hobby.php';
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
               $querr =   mysqli_query($connect, "UPDATE hobby SET 
                                                    hobby = '$hobby',
                                                    description = '$description',
                                                    foto   = '$foto'
                                                    WHERE id_hobby = '$id'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['editber'] = "Edit Data Berhasil";
        echo"<script>
                document.location.href='../../pages/hobby/hobby.php';
            </script>";
    }else{
        $_SESSION['editfall'] = "Edit Data Gagal";
        echo"<script>
                document.location.href='../../pages/hobby/hobby.php';
            </script>";
    }
?>