<?php  
session_start();
// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/query.php';


// get id dari url dan tampung ek dalam sebuah variable
    $id_blog = $_GET['iesaxd3'];

// lakukan sebuah query delete untuk menghapus data blog pada database
$querr =  mysqli_query($connect, "DELETE FROM blog WHERE id_blog = '$id_blog'");


    if ($querr == true) {
        
        $_SESSION['dell'] = "Hapus Data Berhasil";
        // jika nilai lebih dari 0 maka tampilkan bahwa berhasil
            echo"<script>
                 document.location.href='../../pages/blog/blog.php';
                </script>";

    } 
?>