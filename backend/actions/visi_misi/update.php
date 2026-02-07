<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $category = escapeString($_POST['category']);
    $text = escapeString($_POST['text']);


    $qUpdate = "UPDATE visi_misi SET category='$category', text='$text' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/visi_misi/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/visi_misi/create.php';
         </script>
     ";
    }
}
