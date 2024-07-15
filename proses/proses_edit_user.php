<?php
include("connect.php");

$id_user = isset($_POST['id_user']) ? htmlentities($_POST['id_user']) : "";
$nama = isset($_POST['nama']) ? htmlentities($_POST['nama']) : ""; 
$username = isset($_POST['username']) ? htmlentities($_POST['username']) : ""; 
$level = isset($_POST['level']) ? htmlentities($_POST['level']) : ""; 
$no_hp = isset($_POST['no_hp']) ? htmlentities($_POST['no_hp']) : ""; 
$alamat = isset($_POST['alamat']) ? htmlentities($_POST['alamat']) : ""; 
$password = isset($_POST['password']) ? md5(htmlentities($_POST['password'])) : "";

if(!empty($_POST['submit_validate_user'])) {
    $query = mysqli_query($conn, "UPDATE tb_user SET nama='$nama', username='$username', level='$level', no_hp='$no_hp', alamat='$alamat' WHERE id_user='$id_user'");
    
    if(!$query) {
        $message = '<script>alert("Data gagal diubah")</script>';
    } else {
        $message = '<script>alert("Data berhasil diubah"); window.location="../user"</script>';
    }
    
    echo $message;
}
?>
