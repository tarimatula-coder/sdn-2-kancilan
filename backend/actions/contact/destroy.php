<?php
include '../../app.php';
include './show.php';
$storages = "../../../storages/contact/";

// hapus gambar lama jika ada
if (!empty($contact->image) && file_exists($storages . $contact->image)) {
    unlink($storages . $contact->image);
}

// Hapus data
$qDelete = "DELETE FROM contact WHERE id = '$contact->id'";
$result = mysqli_query($connect, $qDelete) or die(mysqli_error($connect));

// cek apakah data berhasil di hapus atau tidak
if ($result) {
    echo " 
         <script>    
            alert('Data berhasil dihapus');
            window.location.href='../../pages/contact/index.php';
        </script>
            ";
} else {
    echo "
         <script>    
            alert('Data gagal dihapus');
            window.location.href='../../pages/contact/index.php';
         </script>
     ";
}
