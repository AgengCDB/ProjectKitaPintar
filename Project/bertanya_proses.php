<?php
    include_once 'conn.php';
    if(isset($_POST['kirimpertanyaan'])) {
        $insert = mysqli_query($conn, "INSERT INTO question VALUES
                                (null, 
                                '".$_SESSION['user_id']."',
                                '".$_POST['matapelajaran']."',
                                '".$_POST['questiontext']."',
                                '0',
                                '0')
                                ");
        if($insert) {
            echo 'Berhasil Mengunggah Pertanyaan';
        } else {
            echo 'Gagal Mengunggah Pertanyaan';
        }
    }
    header('location:bertanya.php');
?>