<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $headmaster->image;
    $name = escapeString($_POST['name']);
    $keterangan = escapeString($_POST['keterangan']);
    $storages = "../../../storages/headmaster/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($headmaster->image) && file_exists($storages . $headmaster->image)) {
            unlink($storages . $headmaster->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE headmaster SET image='$imageNew', nama='$nama', mapel='$mapel', jenis_kelamin='$jenis_kelamin' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/headmaster/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/headmaster/create.php';
         </script>
     ";
    }
}
