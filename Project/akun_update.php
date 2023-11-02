<?php
    include_once 'conn.php';
    if(isset($_POST['updateakun'])) {
        $update = mysqli_query($conn, "UPDATE users SET username='".$_POST['uname']."', useremail='".$_POST['uemail']."' WHERE userid=".$_SESSION['user_id']."");
        if($update) {
            $_SESSION['username'] = $_POST['uname'];
            $_SESSION['useremail'] = $_POST['uemail'];
            echo 'Berhasil Mengupdate Akun';
        } else {
            echo 'Gagal Mengupdate Akun';
        }
    }
    header('location:akun.php');
?>