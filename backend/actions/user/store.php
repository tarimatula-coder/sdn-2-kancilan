<?php
include '../../app.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $email = escapeString($_POST['email']);
    $password = $_POST['password']; 

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $qInsert = "INSERT INTO user (name, email, password) VALUES('$name','$email','$hashedPassword')";

    if (mysqli_query($connect, $qInsert)) {
        echo " 
        <script>    
            alert('Data berhasil ditambah');
            window.location.href='../../pages/user/index.php';
        </script>
        ";
    } else {
        echo "
        <script>    
            alert('Data gagal ditambah');
            window.location.href='../../pages/user/create.php';
        </script>
        ";
    }
}
