<div class="container mt-5">
    <h2 class="text-center">DONASI</h2>
    <p class="text-center">Donasi dari anda akan sangat membantu kemakmuran dan kesejahteraan masjid</p>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post" action="proses/proses_donasi.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="nama" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="amount">Donation Amount</label>
                    <input type="number" class="form-control" id="amount" name="jumlah" placeholder="Enter donation amount" required>
                </div>
                <div class="form-group">
                    <label for="message">Message (Optional)</label>
                    <textarea class="form-control" id="message" name="pesan" rows="3"></textarea>
                </div>
                <?php if (isset($_SESSION['username_user'])): ?>
                    <button type="submit" class="btn btn-primary btn-block mt-2" name="submit_validate_donasi">Donate</button>
                <?php else: ?>
                    <button type="button" class="btn btn-secondary btn-block mt-2" disabled>Login to Donate</button>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
