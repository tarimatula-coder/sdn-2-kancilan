<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/about/";

// ==============================
// HAPUS FILE BANNER
// ==============================
if (!empty($about->banner) && file_exists($storages . $about->banner)) {
    unlink($storages . $about->banner);
}

// ==============================
// HAPUS FILE LOGO
// ==============================
if (!empty($about->logo) && file_exists($storages . $about->logo)) {
    unlink($storages . $about->logo);
}

// ==============================
// HAPUS DATA DATABASE
// ==============================
$id = $about->id;

$qDelete = "DELETE FROM about WHERE id = '$id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// ==============================
// CEK HASIL
// ==============================
if ($result) {
    echo " 
    <script>    
        alert('Data berhasil dihapus');
        window.location.href='../../pages/about/index.php';
    </script>
    ";
} else {
    echo "
    <script>    
        alert('Data gagal dihapus');
        window.location.href='../../pages/about/index.php';
    </script>
    ";
}
