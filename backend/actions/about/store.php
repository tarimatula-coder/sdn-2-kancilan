<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $keterangan = escapeString($_POST['keterangan']);
    $alamat = escapeString($_POST['alamat']);

    $bannerOld = $_FILES['banner']['tmp_name'];
    $bannerName = uniqid() . "_banner.png";
    $bannerPath = "../../../storages/about/" . $bannerName;

    $logoOld = $_FILES['logo']['tmp_name'];
    $logoName = uniqid() . "_logo.png";
    $logoPath = "../../../storages/about/" . $logoName;

    if (move_uploaded_file($bannerOld, $bannerPath) && move_uploaded_file($logoOld, $logoPath)) {
        $qInsert = "INSERT INTO about(name, keterangan, alamat, banner, logo) 
    VALUES('$name', '$keterangan', '$alamat', '$bannerName', '$logoName')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/about/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/about/create.php';
    </script>
    ";
    }
}
