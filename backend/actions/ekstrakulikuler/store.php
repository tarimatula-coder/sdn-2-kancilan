<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $nama = escapeString($_POST['nama']);
    $pembina = escapeString($_POST['pembina']);

    $storages = "../../../storages/ekstrakulikuler/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO ekstrakulikuler(image, nama, pembina) VALUES('$imageNew', '$nama', '$pembina')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/ekstrakulikuler/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/ekstrakulikuler/create.php';
    </script>
    ";
    }
}
