<?php
    $userid = '';
    $username = $_POST['uname'];
    $useremail = $_POST['uemail'];
    $password = password_hash($_POST['upass'], PASSWORD_BCRYPT);
    $userrole = 'user';

    $k = new PDO("mysql:host=localhost;dbname=kitapintar", "root", "");

    $sql = "INSERT INTO users (userid, username, useremail, password, userrole)
            VALUES (?, ?, ?, ?, ?)";
    
    $result = $k->prepare($sql);
    $result->execute([$userid, $username, $useremail, $password, $userrole]);

    header('Location: login.php');
?>