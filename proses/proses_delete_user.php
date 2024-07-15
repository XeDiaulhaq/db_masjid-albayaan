<?php
include("connect.php");

$id_user = isset($_POST['id_user']) ? htmlentities($_POST['id_user']) : "";

$query = mysqli_query($conn, "DELETE FROM tb_user WHERE id_user='$id_user'");

if(!$query){
    $message = '<script>alert("Data gagal dihapus")</script>';
}else{
    $message = '<script> alert("Data berhasil dihapus");
        window.location="../user"</script>
        </script>';
}
echo $message;

?>
