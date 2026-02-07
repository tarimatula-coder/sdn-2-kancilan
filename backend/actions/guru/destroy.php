<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/guru/";

// hapus gambar lama jika ada
if (!empty($guru->image) && file_exists($storages . $guru->image)) {
    unlink($storages . $guru->image);
}

// Hapus data
$qDelete = "DELETE FROM guru WHERE id = '$guru->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/guru/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/guru/index.php';
         </script>
     ";
}
