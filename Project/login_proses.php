<?php
    session_start();

    $username = $_POST['uname'];
    $useremail = $_POST['uname'];
    $password = $_POST['upass'];

    $k = new PDO("mysql:host=localhost;dbname=kitapintar", "root", "");

    $sql = "SELECT * FROM users 
            WHERE username = ? OR useremail = ?";

    $result = $k->prepare($sql);
    $result->execute([$username, $useremail]);

    if($row = $result->fetch()) {
        if(password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['useremail'] = $row['useremail'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['user_id'] = $row['userid'];
            header('Location: index.php');
        }
        else {
            // login gagal
            header('Location: login.php');
        }
    } else {
        header("Location: login.php");
    }
?>