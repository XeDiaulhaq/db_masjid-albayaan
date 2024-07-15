<?php
session_start();
if (!isset($_SESSION['username_user'])) {
    die("Donasi Diproses");
    header("location:../layanan");
}

require('connect.php');

$nama = $_POST['nama'];
$email = $_POST['email'];
$jumlah = $_POST['jumlah'];
$pesan = $_POST['pesan'];

if(!empty ($_POST['submit_validate_user'])){
    $query = mysqli_query($conn, "INSERT INTO tb_donasi (nama, email, jumlah, pesan) VALUES ('$nama', '$email', '$jumlah', '$pesan')");
    if(!$query){
    $message = '<script>alert("Data gagal dimasukkan")</script>';
    }else{
    $message = '<script> alert("Data berhasil dimasukkan");
        window.location="../user"</script>
        </script>';
    
    }echo $message;
        }