<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $name = escapeString($_POST['name']);
    $keterangan = escapeString($_POST['keterangan']);

    $storages = "../../../storages/headmaster/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO headmaster(image, name, keterangan) VALUES('$imageNew', '$name', '$keterangan')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/headmaster/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/headmaster/create.php';
    </script>
    ";
    }
}
