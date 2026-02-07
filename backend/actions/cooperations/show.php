<?php
if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../pages/cooperation/index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM cooperations WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$cooperation = $result->fetch_object();
if (!$cooperation) {
    die("Data tidak di temukan");
}
