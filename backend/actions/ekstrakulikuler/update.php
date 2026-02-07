<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $ekstrakulikuler->image;
    $nama = escapeString($_POST['nama']);
    $pembina = escapeString($_POST['pembina']);
    $storages = "../../../storages/ekstrakulikuler/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($ekstrakulikuler->image) && file_exists($storages . $ekstrakulikuler->image)) {
            unlink($storages . $ekstrakulikuler->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE ekstrakulikuler SET image='$imageNew', nama='$nama', pembina='$pembina' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/ekstrakulikuler/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/ekstrakulikuler/create.php';
         </script>
     ";
    }
}
