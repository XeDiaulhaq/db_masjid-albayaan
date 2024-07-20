<?php
 
session_start();
include("komponen\head.inc.php");
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "home.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'berita') {
    $page = "berita.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'profil') {
    $page = "profil.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'meet') {
    $page = "meet.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'profil') {
    $page = "profil.php";

} elseif (isset($_GET['x']) && $_GET['x'] == 'layanan') {
    $page = "layanan.php";
} elseif (isset($_GET['x']) && $_GET['x'] == 'user') {
    if (isset($_SESSION['level_user']) && $_SESSION['level_user'] == 1) {
        $page = "user.php";
    } else {
        $page = "home.php";
    }
    
} elseif (isset($_GET['x']) && $_GET['x'] == 'logout') {
    include ("proses/proses_logout.php");  
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include "login.php";
    exit; 
}else{
    $page = "home.php";
}

include("main.php");
?>
