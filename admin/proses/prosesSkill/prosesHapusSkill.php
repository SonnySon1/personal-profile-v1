<?php  
session_start();

// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/query.php';


// get id dari url dan tampung ek dalam sebuah variable
    $id_skill = $_GET['iesaxd'];

// lakukan sebuah query delete untuk menghapus data skill pada database
    $querr = mysqli_query($connect, "DELETE FROM skill WHERE id_skill = '$id_skill'");


    if ($querr == true) {
        
        $_SESSION['dell'] = "Hapus Data Berhasil";
        // jika nilai lebih dari 0 maka tampilkan bahwa berhasil
            echo"<script>
                 document.location.href='../../pages/edit/edit.php';
                </script>";

    }
?>