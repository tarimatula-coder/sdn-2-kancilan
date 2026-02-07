<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/pencapaian/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM pencapaian WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$pencapaian = $result->fetch_object();
if (!$pencapaian) {
    die("Data tidak di temukan");
}
