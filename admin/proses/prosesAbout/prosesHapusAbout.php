<?php  
session_start();
// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/query.php';


// get id dari url dan tampung ek dalam sebuah variable
    $id_about = $_GET['iesaxd'];

// lakukan sebuah query delete untuk menghapus data about pada database
    $querr = mysqli_query($connect, "DELETE FROM about WHERE id_about = '$id_about'");

    
    if ($querr == true) {
        
        $_SESSION['dell'] = "Hapus Data Berhasil";
        // jika nilai lebih dari 0 maka tampilkan bahwa berhasil
            echo"<script>
                 document.location.href='../../pages/about/about.php';
                </script>";

    } 
?>