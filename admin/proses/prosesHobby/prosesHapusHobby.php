<?php  
session_start();
// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/query.php';


// get id dari url dan tampung ek dalam sebuah variable
    $id_hobby = $_GET['iesaxd'];

// lakukan sebuah query delete untuk menghapus data hobby pada database
$querr = mysqli_query($connect, "DELETE FROM hobby WHERE id_hobby = '$id_hobby'");


    if ($querr == true) {
        
        $_SESSION['dell'] = "Hapus Data Berhasil";
        // jika nilai lebih dari 0 maka tampilkan bahwa berhasil
            echo"<script>
                 document.location.href='../../pages/hobby/hobby.php';
                </script>";

    }
?>