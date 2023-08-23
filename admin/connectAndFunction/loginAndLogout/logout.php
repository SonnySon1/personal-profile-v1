<?php  
// start session untuk mengguanakan sesio0n
    session_start();

// destroy session
    session_destroy();
    $_SESSION['login'] = "";

header("Location: ../../index.php");

?>