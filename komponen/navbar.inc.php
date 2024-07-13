<div class="navbar1">
    <div class="navmain row">
        <div class="col-4"></div>
        <div class="col-4">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid justify-content-center">
                    <a class="navbar-brand d-flex align-items-center" href=".">
                        <img src="image\masjid.png" alt="Logo" width="68" height="54" class="d-inline-block align-text-top">
                        <span class="ms-2">MASJID AL-BAYAAN</span>
                    </a>
                </div>
            </nav>
        </div>
        <div class="col-4 text-center center-content">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid justify-content-center">
                    <?php if (isset($_SESSION['username_user'])): ?>
                        <div class="dropdown">
                            <a class="navbar-brand" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $_SESSION['username_user']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">PROFIL</a></li>
                                <li><a class="dropdown-item" href="#">SETTING</a></li>
                                <li><a class="dropdown-item" href="logout">LOG OUT</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a class="navbar-brand" href="login">Login</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
</div>
