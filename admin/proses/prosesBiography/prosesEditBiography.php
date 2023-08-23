<?php  
        session_start();


// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol editSkill telah di tekan atau belum jika belum maka pindahkan user ke halaman editSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
        $id_bio            = $_POST['iesaxd2'];
        $fotoL             = $_POST['imageL'];
        $name              = mysqli_real_escape_string($connect, $_POST['name']);
        $email             = mysqli_real_escape_string($connect, $_POST['email']);
        $address           = mysqli_real_escape_string($connect, $_POST['address']) ;
        $phone             = mysqli_real_escape_string($connect, $_POST['phone']) ;
        $title             = mysqli_real_escape_string($connect, $_POST['title']) ;
        $description       = mysqli_real_escape_string($connect, $_POST['dess']) ;
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($name) || empty($email) || empty($address) || empty($phone) || empty($title) || empty($description)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Edit Data Gagal Harap Isi Semua Data Yang Ada Agar Data Baru Dapat Di Simpan!";
                $_SESSION['iesaxd2'] = $id_bio;
                echo "
                        <script>
                            document.location.href='../../pages/biography/editBiography.php';
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
               $querr =   mysqli_query($connect, "UPDATE biography SET 
                                                    name = '$name',
                                                    email = '$email',
                                                    address  = '$address',
                                                    phone   = '$phone',
                                                    title   = '$title',
                                                    description   = '$description',
                                                    image   = '$foto'
                                                    WHERE id_bio = '$id_bio'
                                                    ");

// cek apakah user berhasil dalam proses pengeditan pengeditan
    if ($querr == true) {

        $_SESSION['editber'] = "Edit Berhasil";
        echo"<script>
                document.location.href='../../pages/biography/biography.php';
            </script>";
    }else{
       $_SESSION['editfall'] = "Edit Data Gagal!";

        echo"<script>
                document.location.href='../../pages/biography/biography.php';
            </script>";
    }
?>