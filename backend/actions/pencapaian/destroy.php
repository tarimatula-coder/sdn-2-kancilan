<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/pencapaian/";

// hapus gambar lama jika ada
if (!empty($pencapaian->image) && file_exists($storages . $pencapaian->image)) {
    unlink($storages . $pencapaian->image);
}

// Hapus data
$qDelete = "DELETE FROM pencapaian WHERE id = '$pencapaian->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/pencapaian/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/pencapaian/index.php';
         </script>
     ";
}
