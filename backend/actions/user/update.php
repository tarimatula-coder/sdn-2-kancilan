<?php
include '../../app.php';
include './show.php';

if (isset($_POST['tombol'])) {
    $name = escapeString($_POST['name']);
    $email = escapeString($_POST['email']);
    $password = escapeString($_POST['password']);

    $qUpdate = "UPDATE user SET name='$name', email='$email', password='$password' WHERE id='$id'";

    $result = mysqli_query($connect, $qUpdate) or die(mysqli_error($connect));
    if ($result) {
        echo " 
         <script>    
            alert('Data berhasil diubah');
            window.location.href='../../pages/user/index.php';
        </script>
            ";
    } else {
        echo "
         <script>    
            alert('Data gagal diubah');
            window.location.href='../../pages/user/create.php';
         </script>
     ";
    }
}
