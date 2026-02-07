<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $link = escapeString($_POST['link']);
    $keterangan = escapeString($_POST['keterangan']);

    $storages = "../../../storages/contact/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO contact(image, link, keterangan) VALUES('$imageNew', '$link', '$keterangan')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/contact/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/contact/create.php';
    </script>
    ";
    }
}
