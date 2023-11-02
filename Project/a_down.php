<?php
include 'conn.php';
if(isset($_GET['aID'])) {
    $delete = mysqli_query($conn, "UPDATE answer SET answerdown = answerdown + 1 WHERE answerid = '".$_GET['aID']."' ");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>