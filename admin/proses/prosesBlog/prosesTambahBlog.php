<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol tambahabout telah di tekan atau belum jika belum maka pindahkan user ke halaman tambahSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
            $blog              = mysqli_escape_string($connect, $_POST['blog']);
            $subjudul          = mysqli_real_escape_string($connect, $_POST['subjudul']);
            $deskripsi         = mysqli_real_escape_string($connect, $_POST['deskripsi']);
            $tanggalPost       = mysqli_escape_string($connect, $_POST['tanggalPost']);
            $penulis           = mysqli_escape_string($connect, $_POST['penulis']);
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($blog) || empty($penulis) ||  empty($tanggalPost) || empty($subjudul) || empty($deskripsi) ){
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                    $_SESSION['editfall'] = "Tambah Data Gagal Harap Isi Semua Data Yang Ada!";
                    echo"<script>
                            document.location.href='../../pages/blog/blog.php';
                        </script>";
                return false;
            }
            
            $foto       = image_upload();
            
            // cek apakah upload gambar berhasil atau tidak
                if (!$foto) {

                    // jika gagal gagalkan peroses pemasukan data
                       echo"<script>
                            document.location.href='../../pages/blog/tambahBlog.php';
                        </script>";
                    return false;
                }

            // masukan semua data ke dalam databse
                mysqli_query($connect, "INSERT INTO blog VALUES('', '$blog', '$subjudul', '$deskripsi', '$foto', '$tanggalPost', '$penulis')");


            //  cek nilai affectd dari $connect
                $aff = mysqli_affected_rows($connect);
            
            // cek apakah bilai affectd lebih dari 0 atau tidak
                if ($aff > 0) {


                    $_SESSION['tambahber'] = "Tambah Data Berhasil";
                    // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                        echo"<script>
                             document.location.href='../../pages/blog/blog.php';
                            </script>";
                }else{
                // tapi selain dari itu jika nilai yang di kembalikan adalah -1 maka tampilkan pesan bahwa data gagal di edit
                    // jika nilai lebih dari 1 maka tampilkan bahwa tambah berhasil
                    $_SESSION['tambahber'] = "Tambah Data Gagal";
                    echo"<script>
                             document.location.href='../../pages/blog/tambahBlog.php';
                        </script>";
                }












?>