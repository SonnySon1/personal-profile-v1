<?php  
// membutuhkan file cennection.php untuk  melakukan sebuah query
    require'connection.php';


// function untuk query 
    function query($cmd){
        // membutuhkan variable super global $connect untuk melakkan seuah query
            global $connect; 


        // lakukan sebuah query berdasarkan syntaks query yang sudah di ampung ke dalam function $cmd
            $querr = mysqli_query($connect, $cmd);

        // siapkan varibale yang berisikan array kosong untuk menyimpan fech dari databas
            $data = [];

        // lakukan sebuah pengulangan untuk mengulang data array yang ada pada database menggunkan pengulangan foreach
            foreach($querr as $dataArr){
                $data[] = $dataArr;
            }
        // return $data untuk mengembalikan data yang sudah di fech
            return $data;
    }
?>