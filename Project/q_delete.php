<?php
include 'conn.php';
if(isset($_GET['qID'])) {
    $delete = mysqli_query($conn, "DELETE FROM question WHERE questionid = '".$_GET['qID']."' ");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>