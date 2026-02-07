<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/guru/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM guru WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$guru = $result->fetch_object();
if (!$guru) {
    die("Data tidak di temukan");
}
