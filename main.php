<?php
 
include("proses\connect.php");
 
if (isset($_SESSION['username_user'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_user]' "); 
    $hasil = mysqli_fetch_array($query);
} else {
    $hasil = null;  
}
include("proses\connect.php");
require("komponen/head.inc.php");
include("komponen/navbar.inc.php");
include("komponen/sidebar.inc.php");

if (!empty($page)) {
    include($page);
} else {
    echo "Halaman tidak ditemukan.";
}

require("komponen/footer.inc.php");
?>