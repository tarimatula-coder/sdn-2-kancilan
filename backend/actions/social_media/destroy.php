<?php
include '../../app.php';
include './show.php';

$storages = "../../../storages/social_media/";

// hapus gambar lama jika ada
if (!empty($social_media->icon) && file_exists($storages . $social_media->icon)) {
    unlink($storages . $social_media->icon);
}

// Hapus data
$qDelete = "DELETE FROM social_media WHERE id = '$social_media->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/social_media/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/social_media/index.php';
         </script>
     ";
}
