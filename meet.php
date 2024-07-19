    <div class="container mt-5">
        <h2 class="text-center">Janji Temu</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form id="janji-temu" method="POST">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">No. Telepon</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Nomor Telepon Anda" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal Janji Temu</label>
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="form-group">
                        <label for="time">Waktu Janji Temu</label>
                        <input type="time" class="form-control" id="time" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea class="form-control" id="message" rows="3"
                            placeholder="Pesan atau Keterangan Tambahan" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Buat Janji Temu</button>
                </form>
            </div>
        </div>
    </div>