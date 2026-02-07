<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $category = escapeString($_POST['category']);
    $text = escapeString($_POST['text']);

    $qInsert = "INSERT INTO visi_misi (category, text) VALUES('$category', '$text')";

    mysqli_query($connect, $qInsert) or die(mysqli_error($connect));
    echo " 
    <script>    
        alert('Data berhasil ditambah');
        window.location.href='../../pages/visi_misi/index.php';
    </script>
            ";
} else {
    echo "
    <script>    
        alert('Data gagal ditambah');
        window.location.href='../../pages/visi_misi/create.php';
    </script>
    ";
}
