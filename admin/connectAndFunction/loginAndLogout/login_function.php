<?php  
// kalanlan session untuk mengakses variable super global $_SESSION 
    session_start();


    // cek apakah ada session login atau tidak
    if(isset($_SESSION['login'])) {

        // jika jik atidak ada maka pindahkan user ke halaman login untuk proses login sebagai admin dan set session menjadi true
            if ($_SESSION['login'] = true) {
                
                // set session jadi true
                 $_SESSION['login'] = true;
                // pindahkan user ke  halaman about
                    header("Location: pages/about/about.php");

            }

    }


// membutuhkan file koneksi untuk emalkukan sebuah query
    require"connectAndFunction/connection.php";

// siapkan variable kosong untuk pesan
    $message = " ";


// function login
    function login($data_user){
        // membutuhkan variable global $connect
            global $connect, $message;

        // ambil data user dari dan tampung ke masing masing value
            $username = mysqli_real_escape_string($connect, $_POST['username']);
            $password = mysqli_real_escape_string($connect, $_POST['password']);

        // cek apakah data yang di inputkan oleh user itu ada atau tidak
            if (empty($password) || empty($password)) {

                // jika data null maka tampilkan kesalan dan bahwa data login tidak boleh kosong 
                    $message = "Harap isi semua data untuk memenuhi persyaratan";

                // dan gagalkan proses login dengan cara return false
                    return false;
            }
        
        // cek apakah data yang di inputkan ada atau tidak dalam database dengan cara mengecek dari username 
            $query = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'");
            
            // tapi selain dari false jika nilai yang di kembalikan daldah true maka cek password user apakah benar atau salah
            if($query == true){   


                // lakukan fech data dari $query
                    $data_user = mysqli_fetch_assoc($query);
                
                    // cek apakah nila $data user null atau tidak jika null maka jangan jalankan statement berikutnya
                        if (!$data_user == null) {

                            // cek apakah password 
                                if ($password == $data_user['password']) {
                                    
                                    // set session untuk username dan set session untuk login  
                                        $_SESSION['name'] = $username;
                                        $_SESSION['login'] = true;

                                    // pindahkan kan user ke halaman about
                                        header("Location: pages/about/about.php");

                                        exit;
                                }  
                                
                            // tapi jika selain dari itu jika password berbeda dengan yang ada pada database maka tampilkan kesalahan bahwa password / username salah
                                else{

                                    $message = "Password yang anda masukan salah";
                                    
                                    return false;
                                    
                            }

                        } else{
                            // tampilkan kesalahan bahwa user tidak terdaftar
                                $message = "Akun tidak di temukan";
                        }
                        

            }
           


        return $message;
    }















?>