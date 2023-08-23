<?php  
// membutuhkan file connection untuk melakukan sebuah query delete
    require'../../connectAndFunction/query.php';


// get id dari url dan tampung ek dalam sebuah variable
    $id_bio = $_GET['iesaxd2'];

// lakukan sebuah query delete untuk menghapus data biography pada database
$querr = mysqli_query($connect, "DELETE FROM biography WHERE id_bio = '$id_bio'");


// pidahkan user ke helaman biography.php 
    header("Location: ../../pages/biography/biography.php");
?>