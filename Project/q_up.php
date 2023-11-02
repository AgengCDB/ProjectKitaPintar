<?php
include 'conn.php';
if(isset($_GET['qID'])) {
    $delete = mysqli_query($conn, "UPDATE question SET questionup = questionup + 1 WHERE questionid = '".$_GET['qID']."' ");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>