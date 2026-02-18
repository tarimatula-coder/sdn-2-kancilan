<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $keterangan = escapeString($_POST['keterangan']);

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";

    $storages = "../../../storages/galleri/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO galleries (keterangan, image) VALUES('$keterangan','$imageNew')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/galleri/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/galleri/create.php';
    </script>
    ";
    }
}
