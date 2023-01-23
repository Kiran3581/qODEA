<?php
    session_start();
    include 'dbconn.php';
    $title = "| Home";
    require_once('common_files/header.php');
?>

    <h1>Hello <?php $_SESSION['username']; ?>!</h1>


<?php
    require_once('common_files/footer.php');
?>