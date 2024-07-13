<?php
// session_start();
// if (empty($_SESSION['username_user'])) {
//     header('location:');
// }
include("proses\connect.php");
// $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_user]' "); 
// $hasil = mysqli_fetch_array($query);

// Periksa apakah pengguna sudah login
if (isset($_SESSION['username_user'])) {
    $query = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$_SESSION[username_user]' "); 
    $hasil = mysqli_fetch_array($query);
} else {
    // Jika pengguna belum login, set variabel $hasil ke nilai default atau arahkan ke halaman login
    $hasil = null; // atau bisa menggunakan array kosong $hasil = array();
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