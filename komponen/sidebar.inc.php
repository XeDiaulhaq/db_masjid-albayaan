<div class="navbar2 ">
    <nav class="nav-menu navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon position-relative"></span>Menu
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">dashboard
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <div class="navbar-nav">
                        <a class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'border-bottom' : ''; ?>"
                            href=".">BERANDA</a>

                        <!-- style="border-bottom: 1px solid; -->
                    </div>
                    <div class="navbar-nav">
                        <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'berita') ? 'border-bottom' : ''; ?>"
                            href="berita">BERITA</a>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($_GET['x']) && $_GET['x']=='profil') ? 'border-bottom' : '' ; ?>"
                            href="profil" id="navbarDropdownProfil" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PROFIL
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                            <li><a class="dropdown-item " href="profil">PROFIL MASJID</a></li>

                            <li><a class="dropdown-item" href="#visi">VISI DAN MISI</a></li>
                        </ul>
                    </div>

                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($_GET['x']) && $_GET['x']=='layanan') ? 'border-bottom' : '' ; ?>"
                            href="layanan" id="navbarDropdownLayanan" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            LAYANAN
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownLayanan">
                            <li><a class="dropdown-item" href="layanan">DONASI</a></li>
                            <li><a class="dropdown-item" href="meet">JANJI TEMU</a></li>
                        </ul>
                    </div>
                    <?php 
                        // Cek apakah pengguna sudah login
                        if (isset($hasil['level'])) { 
                            // Jika level user adalah 1, tampilkan OWNER MENU
                            if ($hasil['level'] == '1') { ?>
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($_GET['x']) && $_GET['x']=='user') ? 'border-bottom' : '' ; ?>"
                            href="user" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            OWNER MENU
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownUser">
                            <li><a class="dropdown-item" href="user">USER</a></li>
                            <li><a class="dropdown-item" href="#">REPORT</a></li>
                        </ul>
                    </div>
                    <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>

    </nav>
</div>