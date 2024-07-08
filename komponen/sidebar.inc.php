<div class="navbar2">

        <nav class="nav-menu navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon position-relative"></span>Menu
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">dashboard
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-nav">
                            <a class="nav-link  <?php echo (isset($_GET['x']) && $_GET['x']=='home') ? 'border-bottom' : '' ; ?>" href="home" >BERANDA</a> 
                            <!-- style="border-bottom: 1px solid; -->
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php echo (isset($_GET['x']) && $_GET['x']=='profil') ? 'border-bottom' : '' ; ?>" href="profil" id="navbarDropdownProfil" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    PROFIL
                                </a>
                                <ul class="dropdown-menu aria-labelledby=" id="navbarDropdownProfil">
                                    <li><a class="dropdown-item " href="profil">VISI DAN MISI</a></li>
                                    <li><a class="dropdown-item" href="#">SEJARAH</a></li>
                                    <li><a class="dropdown-item" href="#">IMAM DAN MUADZIN</a></li>
                                </ul>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php echo (isset($_GET['x']) && $_GET['x']=='berita') ? 'border-bottom' : '' ; ?>" href="#" id="navbarDropdownBerita" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    BERITA
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownBerita">
                                    <li><a class="dropdown-item" href="berita">TATA LAKSANA JUMAT</a>
                                    </li>
                                    <li><a class="dropdown-item" href="#">ARTIKEL</a></li>
                                    <li><a class="dropdown-item" href="#">AGENDA</a></li>
                                </ul>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle <?php echo (isset($_GET['x']) && $_GET['x']=='layanan') ? 'border-bottom' : '' ; ?>" href="layanan" id="navbarDropdownLayanan" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    LAYANAN
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownLayanan">
                                    <li><a class="dropdown-item" href="layanan">DONASI DAN ZAKAT</a></li>
                                    <li><a class="dropdown-item" href="#">KONSULTASI AGAMA</a></li>
                                    <li><a class="dropdown-item" href="#">FORUM DISKUSI</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>