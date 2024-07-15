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
                            <a class="navbar-brand d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <button class="navbar-toggler me-2" type="button">
                                    <i class="bi bi-person-circle"></i>
                                </button>
                                <span class="username d-none d-lg-inline"><?php echo $_SESSION['username_user']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-2"></i>PROFIL</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>SETTING</a></li>
                                <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-in-left me-2"></i>LOG OUT</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a class="navbar-brand" href="login"><i class="bi bi-box-arrow-in-right me-2"></i>Login</a>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>
</div>

<style>
    @media (max-width: 992px) { /* menyesuaikan breakpoint sesuai dengan kebutuhan */
        .username {
            display: none;
        }
    }
</style>

<script>
    // JavaScript untuk menangani menu dropdown saat ikon diklik
    document.addEventListener('DOMContentLoaded', function() {
        var dropdownToggle = document.querySelector('.navbar-brand[data-bs-toggle="dropdown"]');
        if (dropdownToggle) {
            dropdownToggle.addEventListener('click', function() {
                var dropdownMenu = this.nextElementSibling;
                dropdownMenu.classList.toggle('show');
            });
        }
    });
</script>
