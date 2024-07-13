<?php
session_start();
include("connect.php");

$username = isset($_POST['username']) ? htmlentities($_POST['username']) : ""; 
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : ""; 

if (!empty($_POST['submit_validate'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'");
    $hasil = mysqli_fetch_array($query);

    if ($hasil) {
        $_SESSION['username_user'] = $username;
        $_SESSION['level_user'] = $hasil['level'];
        header('Location:../home'); // Ubah ke lokasi yang benar
        exit(); // Tambahkan exit() di sini
    } else {
        echo "username atau password salah";
        echo "<script>
            alert('username atau password salah');
            window.location='../login';
        </script>";
    }
} else {
    echo "<script>
        alert('Form is not submitted correctly');
        window.location='login';
    </script>";
}
?>
