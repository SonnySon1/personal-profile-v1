<?php 
// membutuhkan file connection.php untuk melakukan sebuah query 
require"connection.php";


function pesan($pesan){



// cek apakah user menekan tombol sendMassage atau ridak
   
        global $connect;

        // ambil semua data value yang di inputkan oleh user dan tampung semua ke dalam sebuah variable 
            $namaDepan         = htmlspecialchars(mysqli_escape_string($connect, $pesan['namaDepan']));
            $namaBelakang      = htmlspecialchars(mysqli_escape_string($connect, $pesan['namaBelakang']));
            $email             = htmlspecialchars(mysqli_escape_string($connect, $pesan['email']));
            $subject           = htmlspecialchars(mysqli_escape_string($connect, $pesan['subject']));
            $message           = htmlspecialchars(mysqli_escape_string($connect, $pesan['message']));

        // cek apakah ada data yang di inputkan oleh user bernilai null
            if (empty($namaDepan) || empty($email) || empty($subject) || empty($message)) {
                    
                // jika nilai bernilai null maka pindahkan user ke halaman index dan berikan pesan bahwa data yang di inputkan tidak boleh kosong
                        $_SESSION['messfall'] = "Pesan Gagal Terkirim";
                        $_SESSION['textf'] = "Pesan gagal terkirim harap isi semua data yang ada untuk mengirim pesan";
                        echo"<script>
                                document.location.href='../index.php#contact-section';
                            </script>";
                    return false;

                    return false;

            }
            
            // tapi jika data sudah memenuhi persyaratan maka masukan massage user ke database untuk di tampilkan ke backend
            else{
                    
                // gabungkan nama depan dengan nama belakang
                    $nama = $namaDepan.' '.$namaBelakang;

                // siapkan tanggal untuk tanggal pada pesan
                    $date = date("Y-m-d");

                // masukan massage user ke dalam database
                    $query = mysqli_query($connect, "INSERT INTO message VALUES('', '$date', '$nama', '$email', '$subject', '$message')");
            

                    // cek apakah $query berhasil atau tidak jika berhasil maka tampilkan pesan berhasil
                        if ($query == true) {
                            $_SESSION['mess'] = "Pesan Terkirim";
                            $_SESSION['text'] = "Pesan Kamu Berhasil di kirim";
                                // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                                    echo"<script>
                                        document.location.herf='../index.php#contact-section';
                                        </script>";
                                }else{
                            $_SESSION['mess'] = "Pesan Gagal Terkirim";
                            $_SESSION['text'] = "Pesan Kamu Gagal di kirim";
                                // jika nilai lebih dari 0 maka tampilkan bahwa tambah berhasil
                                    echo"<script>
                                        document.location.herf='../index.php#contact-section';
                                        </script>";
                        }


            }
    
    }









?>