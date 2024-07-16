<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Donasi</title>
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-ol9XBumCHyR6O-vQ"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">DONASI</h2>
        <p class="text-center">Donasi dari anda akan sangat membantu kemakmuran dan kesejahteraan masjid</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="donasiForm">
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

    <script>
        document.getElementById('donasiForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch('proses/proses_donasi.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    snap.pay(data.token, {
                        onSuccess: function(result) {
                            fetch('proses/confirm_donasi.php', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    nama: formData.get('nama'),
                                    email: formData.get('email'),
                                    jumlah: formData.get('jumlah'),
                                    pesan: formData.get('pesan'),
                                    result: result
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    alert('Donasi berhasil');
                                    window.location.href = "layanan";
                                } else {
                                    alert('Donasi gagal: ' + data.message);
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                            });
                        },
                        onPending: function(result) {
                            alert('Pembayaran tertunda');
                            window.location.href = "layanan";
                        },
                        onError: function(result) {
                            alert('Pembayaran gagal');
                            window.location.href = "layanan";
                        },
                        onClose: function() {
                            alert('Anda menutup popup tanpa menyelesaikan pembayaran');
                        }
                    });
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });
    </script>
</body>
</html>
