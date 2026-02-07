<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $judul = escapeString($_POST['judul']);
    $iconOld = $_FILES['icon']['tmp_name'];
    $iconNew = time() . ".png";
    $link = escapeString($_POST['link']);

    $storages = "../../../storages/social_media/";
    if (move_uploaded_file($iconOld, $storages . $iconNew)) {
        $qInsert = "INSERT INTO social_media (judul, icon, link ) VALUES('$judul', '$iconNew', '$link' )";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/social_media/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/social_media/create.php';
    </script>
    ";
    }
}
