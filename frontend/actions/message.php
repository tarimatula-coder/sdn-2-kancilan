<?php
include '../../config/connection.php';
include '../../config/escapeString.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $email = escapeString($_POST['email']);
    $phone = escapeString($_POST['phone']);
    $pesan = escapeString($_POST['pesan']);

    $qInsert = "INSERT INTO message (name, email, phone, pesan) VALUES ('$name', '$email', '$phone', '$pesan')";

    if (mysqli_query($connect, $qInsert)) {
        echo "
            <script>
                alert('Data berhasil dikirim');
                window.location.href = '../index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Data gagal dikirim');
        window.location.href = '';
        </script>

        ";
    }
}
