<?php
    include_once 'conn.php';
    if(isset($_POST['kirimjawaban'])) {
        $insert = mysqli_query($conn, "INSERT INTO answer VALUES
                                (null,
                                '".$_GET['idpertanyaan']."',
                                '".$_SESSION['user_id']."',
                                '".$_POST['answertext']."',
                                '0',
                                '0')
                                ");
        if($insert) {
            echo 'Berhasil Mengunggah Jawaban';
        } else {
            echo 'Gagal Mengunggah Jawaban';
        }
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>