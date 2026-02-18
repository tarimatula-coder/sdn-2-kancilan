<?php
include '../../app.php';
include './show.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tombol'])) {
    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Validasi input POST agar aman
    $name = isset($_POST['name']) ? escapeString($_POST['name']) : '';
    $keterangan = isset($_POST['keterangan']) ? escapeString($_POST['keterangan']) : '';
    $alamat = isset($_POST['alamat']) ? escapeString($_POST['alamat']) : '';

    // Ambil data lama dari DB
    $queryOld = mysqli_query($connect, "SELECT * FROM about WHERE id='$id'") or die(mysqli_error($connect));
    $dataOld = mysqli_fetch_assoc($queryOld);

    $bannerName = $dataOld['banner'];
    $logoName = $dataOld['logo'];

    // Upload banner baru jika ada
    if (!empty($_FILES['banner']['tmp_name'])) {
        $bannerName = uniqid() . "_banner.png";
        move_uploaded_file($_FILES['banner']['tmp_name'], "../../../storages/about/" . $bannerName);
    }

    // Upload logo baru jika ada
    if (!empty($_FILES['logo']['tmp_name'])) {
        $logoName = uniqid() . "_logo.png";
        move_uploaded_file($_FILES['logo']['tmp_name'], "../../../storages/about/" . $logoName);
    }

    // Query Update data
    $qUpdate = "UPDATE about SET 
                    name='$name',
                    keterangan='$keterangan',
                    alamat='$alamat',
                    banner='$bannerName',
                    logo='$logoName'
                WHERE id='$id'";

    mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));

    echo "<script>
        alert('Data berhasil diubah');
        window.location.href='../../pages/about/index.php';
    </script>";
}
