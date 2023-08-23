<?php  
require'connection.php';

// siapkan data awal untuk menampung index terakhir
    $dataAkhir = 6;

// cari jumlah halaman dengan cara membagi semua data dengan data akhir
    // lakukan sebuah query untuk mengambil data pada database
    $querr = mysqli_query($connect, "SELECT * FROM blog");

    // lakukan fech data dari $querr
        $barisData = mysqli_fetch_assoc($querr);
        
// ambil nilai ada berapa data dalam query
    $dataDiDatabase = count($barisData);

// bagi halaman dengan cara membagi $dataDiDatabase dengan data akhir dan bulatkan bilangan pecahan ke atas menggunakan fungsi ceill
    $jmlHalaman = ceil($dataDiDatabase / $dataAkhir);


// ambil data halaman dari get 

// dan cek menggunakan pengkondisisan apakah get 0 atau tidak jika 0 maka set menjadi 1 
    if (isset($_GET['page'])) {
        $halamanAkf =  $_GET['page'];
    }else{
        $halamanAkf = 1;
    }


// jumlahkan bilangan  data akhir di kalikan dengan halamanAkf dan di kurangi dengan data akhir 
    $dataAwal = $dataAkhir*$halamanAkf-$dataAkhir;















?>