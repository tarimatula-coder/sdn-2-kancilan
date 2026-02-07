<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/cooperation/";

// hapus gambar lama jika ada
if (!empty($cooperation->image) && file_exists($storages . $cooperation->image)) {
    unlink($storages . $cooperation->image);
}

// Hapus data
$qDelete = "DELETE FROM cooperations WHERE id = '$cooperation->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/cooperation/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/cooperation/index.php';
         </script>
     ";
}
