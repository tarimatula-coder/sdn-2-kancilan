<?php
include '../../app.php';

if (isset($_POST['tombol'])) {

    $imageOld = $_FILES['image']['tmp_name'];
    $imageNew = time() . ".png";
    $nama = escapeString($_POST['nama']);
    $kategori = escapeString($_POST['kategori']);
    $tingkat = escapeString($_POST['tingkat']);
    $tahun = escapeString($_POST['tahun']);
    $peraih = escapeString($_POST['peraih']);
    $keterangan = escapeString($_POST['keterangan']);

    $storages = "../../../storages/pencapaian/";
    if (move_uploaded_file($imageOld, $storages . $imageNew)) {
        $qInsert = "INSERT INTO pencapaian(image, nama, kategori, tingkat, tahun, peraih, keterangan) VALUES('$imageNew', '$nama', '$kategori', '$tingkat', '$tahun', '$peraih', '$keterangan')";

        mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
        echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/pencapaian/index.php';
    </script>
            ";
    } else {
        echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/pencapaian/create.php';
    </script>
    ";
    }
}
