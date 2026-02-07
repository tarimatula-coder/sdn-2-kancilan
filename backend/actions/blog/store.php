<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $judul = escapeString($_POST['judul']);
    $tanggal = escapeString($_POST['tanggal']);
    $penulis = escapeString($_POST['penulis']);
    $keterangan = escapeString($_POST['keterangan']);

    $storages = "../../../storages/blog/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO blog(image, judul, tanggal, penulis, keterangan) VALUES('$imageNew', '$judul', '$tanggal', '$penulis', '$keterangan')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/blog/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/blog/create.php';
    </script>
    ";
    }
}
