<body>
    <!-- SELECTION HOME -->
    <div class="container-xl">
        <section id="home">
            <div class="row">
                <div class="col mb-2">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image\2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image\3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div class="icon-boxes position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="container d-flex justify-content-center">
                            <div class="row gy-4 mt-5 d-flex justify-content-center align-items-center">

                                <div class="col-xl-3 col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bi bi-person-fill"></i></i></div>
                                        <h4 class="title"><a href="profil" class="stretched-link">PROFILE</a></h4>
                                    </div>
                                </div><!--End Icon Box -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bi bi-newspaper"></i></div>
                                        <h4 class="title"><a href="berita" class="stretched-link">BERITA</a></h4>
                                    </div>
                                </div><!--End Icon Box -->

                                <div class="col-xl-3 col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><i class="bi bi-cash"></i></div>
                                        <h4 class="title"><a href="layanan" class="stretched-link">LAYANAN</a></h4>
                                    </div>
                                </div><!--End Icon Box -->

                                <!--End Icon Box -->

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">Jadwal Azan</div>
                        <div class="card-body">
                            <h3 class="card-title tgl"><i class="bi bi-geo-alt-fill"></i></h3>
                            <p class="card-text">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center Imsak">
                                    Imsak
                                    <span class="badge text-bg-primary rounded-pill">04:30</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center Subuh">
                                    Subuh
                                    <span class="badge text-bg-primary rounded-pill">04:45</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center Dhuzur">
                                    Dhuzur
                                    <span class="badge text-bg-primary rounded-pill">12:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center Ashar">
                                    Ashar
                                    <span class="badge text-bg-primary rounded-pill">15:30</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center Magrib">
                                    Magrib
                                    <span class="badge text-bg-primary rounded-pill">18:00</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center Isya">
                                    Isya
                                    <span class="badge text-bg-primary rounded-pill">19:15</span>
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END SELECTION HOME -->
        <!-- SELECTION PROFILE -->
        
        <h2  class="text-center">Pencarian Hadis</h2>
        <div class="row">
            <div class="col-lg">
                <h3 class="mb-4">Cari Hadis</h3>
                <form id="form-hadis" action="home">
                    <div class="form-group">
                        <label for="hadis">Koleksi Hadis</label>
                        <input type="text" class="form-control" id="hadis" placeholder="Masukkan perawi hadis" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor-hadis">Nomor Hadis</label>
                        <input type="number" class="form-control" id="nomor-hadis" placeholder="Masukkan nomor hadis" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Cari</button>
                </form>
                <div class="mt-4" id="hasil-hadis"></div>
            </div> 
        </div>
        

        <!-- END SELECTION PROFILE -->
    </div>
<script>
    //JS Hadist
    function gethadis() {
    
        document.getElementById('form-hadis').addEventListener('submit', function (event) {
            event.preventDefault();
    
            let collection = document.getElementById('hadis').value;
            let number = document.getElementById('nomor-hadis').value;
    
            fetch(`https://api.hadith.gading.dev/books/${collection}/${number}`)
                .then(response => response.json())
                .then(data => {
                    
                    let resultDiv = document.getElementById('hasil-hadis');
                    if (data.data) {
                        resultDiv.innerHTML = `
                            <h3>Hasil Hadis:</h3>
                            <p><strong>Koleksi:</strong> ${data.data.name}</p>
                            <p><strong>Nomor:</strong> ${data.data.contents.number}</p>
                            <p style="font-family: 'Times New Roman', Times, serif;"><strong>Hadis:</strong> ${data.data.contents.arab}</p>
                            <p><strong>Terjemahan:</strong> ${data.data.contents.id}</p>
                        `;
                    } else {
                        resultDiv.innerHTML = `<p>Hadis tidak ditemukan. Pastikan koleksi dan nomor yang dimasukkan benar.</p>`;
                    }
                })
                .catch(error => {
    
                    let resultDiv = document.getElementById('hasil-hadis');
                    resultDiv.innerHTML = `<p>Terjadi kesalahan: ${error.message}</p>`;
                });
        });
    };
    gethadis();</script>
</body>