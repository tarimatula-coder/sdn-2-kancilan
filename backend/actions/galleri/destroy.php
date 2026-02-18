<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/galleri/";

// hapus gambar lama jika ada
if (!empty($galleri->image) && file_exists($storages . $galleri->image)) {
    unlink($storages . $galleri->image);
}

// Hapus data
$qDelete = "DELETE FROM galleries WHERE id = '$galleri->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/galleri/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/galleri/index.php';
         </script>
     ";
}
