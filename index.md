<?php
    session_start();
    if(empty($_SESSION['username_masjid'])){
        header('location:login');
    }
if (!isset($_GET['x']) || $_GET['x'] != 'login') {
    require("komponen/head.inc.php");
    include("komponen/navbar.inc.php");
    include("komponen/sidebar.inc.php");
}

if (isset($_GET['x']) && $_GET['x'] == 'home') {
    include("home.php");
} elseif (isset($_GET['x']) && $_GET['x'] == 'berita') {
    include("berita.php");
} elseif (isset($_GET['x']) && $_GET['x'] == 'profil') {
    include("profil.php");
} elseif (isset($_GET['x']) && $_GET['x'] == 'layanan') {
    include("layanan.php");
} elseif (isset($_GET['x']) && $_GET['x'] == 'login') {
    include("login.php");
}else{
    include("home.php");
}

if (!isset($_GET['x']) || $_GET['x'] != 'login') {
    require("komponen/footer.inc.php");
}
?>

<?php if (!isset($_GET['x']) || $_GET['x'] != 'login'): ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php endif; ?>
 
</body>
</html>