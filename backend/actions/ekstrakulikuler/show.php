<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/ekstrakulikuler/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM ekstrakulikuler WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$ekstrakulikuler = $result->fetch_object();
if (!$ekstrakulikuler) {
    die("Data tidak di temukan");
}
