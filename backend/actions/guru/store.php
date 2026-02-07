<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $nama = escapeString($_POST['nama']);
    $mapel = escapeString($_POST['mapel']);
    $jenis_kelamin = escapeString($_POST['jenis_kelamin']);

    $storages = "../../../storages/guru/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO guru(image, nama, mapel, jenis_kelamin) VALUES('$imageNew', '$nama', '$mapel', '$jenis_kelamin')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/guru/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/guru/create.php';
    </script>
    ";
    }
}
