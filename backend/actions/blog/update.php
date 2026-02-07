<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $imageNew = $blog->image;
    $judul = escapeString($_POST['judul']);
    $tanggal = escapeString($_POST['tanggal']);
    $penulis = escapeString($_POST['penulis']);
    $keterangan = escapeString($_POST['keterangan']);
    $storages = "../../../storages/blog/";

    //cek apakah user mengupload gambar baru
    if (!empty($_FILES['image']['tmp_name'])) {
        $imageOld = $_FILES['image']['tmp_name'];
        $imageNew = time() . '.png';

        // hapus gambar lama jika ada
        if (!empty($blog->image) && file_exists($storages . $blog->image)) {
            unlink($storages . $blog->image);
        }

        // simpan gambar baru
        move_uploaded_file($imageOld, $storages . $imageNew);
    }

    $qUpdate = "UPDATE blog SET image='$imageNew', judul='$judul', tanggal='$tanggal', penulis='$penulis', keterangan='$keterangan' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/blog/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/blog/create.php';
         </script>
     ";
    }
}
