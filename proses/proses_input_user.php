<?php 
include("connect.php");

$nama = isset($_POST['nama']) ? htmlentities($_POST['nama']) : ""; 
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : ""; 
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : ""; 
$no_hp = isset($_POST['no_hp']) ? htmlentities($_POST['no_hp']) : ""; 
$alamat = isset($_POST['alamat']) ? htmlentities($_POST['alamat']) : ""; 
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : "";

if(!empty ($_POST['submit_validate_user'])){
    $query = mysqli_query($conn, "INSERT INTO tb_user (nama, username, level , no_hp, alamat, password) values ('$nama', '$username', '$level', '$no_hp', '$alamat', '$password')");
    if(!$query){
    $message = '<script>alert("Data gagal dimasukkan")</script>';
    }else{
    $message = '<script> alert("Data berhasil dimasukkan");
        window.location="../user"</script>
        </script>';
    
    }echo $message;
        }
?>