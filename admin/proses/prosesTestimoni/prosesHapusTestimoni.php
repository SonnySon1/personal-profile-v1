<?php  
// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/query.php';


// get id dari url dan tampung ek dalam sebuah variable
    $id_testimoni = $_GET['iesaxd'];

// lakukan sebuah query delete untuk menghapus data testimoni pada database
    mysqli_query($connect, "DELETE FROM testimoni WHERE id_cln = '$id_testimoni'");


// pidahkan user ke helaman testimoni.php 
    header("Location: ../../pages/testimoni/testimoni.php");
?>