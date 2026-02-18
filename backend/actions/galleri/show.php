<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/galleri/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM galleries WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$galleri = $result->fetch_object();
if (!$galleri) {
    die("Data tidak di temukan");
}
