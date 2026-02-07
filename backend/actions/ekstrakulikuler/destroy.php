<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/ekstrakulikuler/";

// hapus gambar lama jika ada
if (!empty($ekstrakulikuler->image) && file_exists($storages . $ekstrakulikuler->image)) {
    unlink($storages . $ekstrakulikuler->image);
}

// Hapus data
$qDelete = "DELETE FROM ekstrakulikuler WHERE id = '$ekstrakulikuler->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/ekstrakulikuler/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/ekstrakulikuler/index.php';
         </script>
     ";
}
