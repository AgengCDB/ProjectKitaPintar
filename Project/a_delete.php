<?php
include 'conn.php';
if(isset($_GET['aID'])) {
    $delete = mysqli_query($conn, "DELETE FROM answer WHERE answerid = '".$_GET['aID']."' ");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>