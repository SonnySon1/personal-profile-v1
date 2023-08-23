<?php  
session_start();
// membutuhkan file connection.php untuk melakukan sbeuah query 
    require'../../connectAndFunction/query.php';

// membutuhkan file image.upload.php untuk melakukan sebuah upload image
    require'../../connectAndFunction/image.upload.php';

// cek apakah tombol tambahPortfolio telah di tekan atau belum jika belum maka pindahkan user ke halaman tambahSkils.php untuk pembatalan proses penambahan data

        // ambil data dari setip value pada input
            $project          = mysqli_real_escape_string($connect, $_POST['project']);
            $subJudul         = mysqli_real_escape_string($connect, $_POST['subjudul']);
            $description      = mysqli_real_escape_string($connect, $_POST['description']);
            $namaAplikasi     = mysqli_real_escape_string($connect, $_POST['namaAplikasi']);
            $jenisAplikasi    = mysqli_real_escape_string($connect, $_POST['jenisAplikasi']);
            $developer        = mysqli_real_escape_string($connect, $_POST['developer']);
            $thnPembuatan     = mysqli_real_escape_string($connect, $_POST['thnPembuatan']);
            $status           = mysqli_real_escape_string($connect, $_POST['status']);
            $link             = mysqli_real_escape_string($connect, $_POST['link_situs']);
            
        // cek apakah ada value yang di inputkan pada masing masing text fild
            if (empty($project) || empty($description)) {
                // jika tidak ada value yang di inputkan maka gagalkan peroses pemasukan databse
                $_SESSION['editfall'] = "Tambah Data Gagal Harap Isi Semua Data Yang Ada Agar Data Dapat Di Simpan!";
                echo "
                        <script>
                            document.location.href='../../pages/portfolio/portfolio.php';
                        </script>;
                    ";
                return false;
            }
            
            $foto       = image_upload();
            
            // cek apakah upload gambar berhasil atau tidak
                if (!$foto) {

                    // jika gagal gagalkan peroses pemasukan data
                       echo"<script>
                            document.location.href='../../pages/portfolio/tambahPortfolio.php';
                        </script>";
                    return false;
                }

            // masukan semua data ke dalam databse
                mysqli_query($connect, "INSERT INTO portfolio VALUES('', '$project','$subJudul', '$description', '$foto', '$namaAplikasi','$jenisAplikasi','$developer','$thnPembuatan', '$status', '$link')");


            //  cek nilai affectd dari $connect
                $aff = mysqli_affected_rows($connect);
            
            // cek apakah bilai affectd lebih dari 0 atau tidak
                if ($aff > 0) {

                    
                    $_SESSION['tambahber'] = "Tambah Data Berhasil";
                    // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                        echo"<script>
                                document.location.href='../../pages/portfolio/portfolio.php';
                            </script>";
                }else{
                // tapi selain dari itu jika nilai yang di kembalikan adalah -1 maka tampilkan pesan bahwa data gagal di edit
                    // jika nilai lebih dari 1 maka tampilkan bahwa tambah berhasil
                    $_SESSION['editfall'] = "Tambah Data Gagal";
                    // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                        echo"<script>
                                document.location.href='../../pages/portfolio/portfolio.php';
                            </script>";
                }












?>