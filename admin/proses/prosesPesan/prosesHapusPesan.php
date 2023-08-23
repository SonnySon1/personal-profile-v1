<?php  
session_start();
// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/connection.php';


// get id dari url dan tampung ek dalam sebuah variable
$id_message = $_GET['iesaxd'];

// lakukan sebuah query delete untuk menghapus data pesan pada database
$querr =  mysqli_query($connect, "DELETE FROM message WHERE id_message = '$id_message'");


    if ($querr == true) {
        
        $_SESSION['dell'] = "Hapus Data Berhasil";
        // jika nilai lebih dari 0 maka tampilkan bahwa berhasil
            echo"<script>
                 document.location.href='../../pages/pesan/pesan.php';
                </script>";

    }
?>