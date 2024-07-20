<?php

$username = $_SESSION['username_user'] ?? '';
 
$queryi = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
 
if (!$queryi) {
    echo "Query error: " . mysqli_error($conn);
    exit;
}

$resulti = mysqli_fetch_array($queryi);
 if (!$resulti) {
    echo "User not found";
    exit;
}
?>

<!-- Modal Profil -->
<div class="modal fade" id="modalProfil<?= $resulti['id_user']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Profil User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation form-floating" novalidate action="proses/proses_input_user.php" method="POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Your Name" name="nama" value="<?= htmlspecialchars($resulti['nama']); ?>" readonly>
                                <label for="floatingInput">Nama</label>
                                <div class="invalid-feedback">Please fill in the Name</div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email Anda" name="username" value="<?= htmlspecialchars($resulti['username']); ?>" readonly>
                                <label for="floatingInput">Email</label>
                                <div class="invalid-feedback">Please fill in the Email</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Level User" name="level" value="<?= htmlspecialchars($resulti['level'] == 1 ? 'Owner' : 'User'); ?>" readonly>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="NO-HP Anda" name="no_hp" value="<?= htmlspecialchars($resulti['no_hp']); ?>" readonly>
                                <label for="floatingInput">+62-8xxx-xxxxx</label>
                                <div class="invalid-feedback">Please fill in the Phone Number</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" name="alamat" readonly><?= htmlspecialchars($resulti['alamat']); ?></textarea>
                                <label for="floatingInput">Alamat</label>
                                <div class="invalid-feedback">Please fill in the Alamat</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end Profil -->

<div class="navbar1">
    <div class="navmain row">
        <div class="col-4"></div>
        <div class="col-4">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid justify-content-center">
                    <a class="navbar-brand d-flex align-items-center" href=".">
                        <img src="image/masjid.png" alt="Logo" width="68" height="54" class="d-inline-block align-text-top">
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
                                <span class="username d-none d-lg-inline"><?= htmlspecialchars($_SESSION['username_user']); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalProfil<?= $resulti['id_user']; ?>"><i class="bi bi-person-circle me-2"></i>PROFIL</a></li>
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
@media (max-width: 992px) {
    .username {
        display: none;
    }
}
</style>

<script>
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
