function getJadwalSholat() {
    fetch('https://api.aladhan.com/v1/timingsByCity?city=Lhokseumawe&country=Indonesia&method=2')
    .then(response => response.json())
    .then(data => {
        const jadwalSholat = data.data.timings;

        // Mengisi nilai jadwal sholat ke dalam elemen HTML yang sesuai
        document.querySelector('.card-title').innerHTML = `<i class="bi bi-geo-alt-fill m-2"></i>Lhokseumawe, Aceh - ${data.data.date.gregorian.date}`;
        document.querySelector('.Imsak span').textContent = jadwalSholat.Imsak;
        document.querySelector('.Subuh span').textContent = jadwalSholat.Fajr;
        document.querySelector('.Dhuzur span').textContent = jadwalSholat.Dhuhr;
        document.querySelector('.Ashar span').textContent = jadwalSholat.Asr;
        document.querySelector('.Magrib span').textContent = jadwalSholat.Maghrib;
        document.querySelector('.Isya span').textContent = jadwalSholat.Isha;
    })
    .catch(error => {
        console.error('Terjadi kesalahan dalam mengambil data:', error);
    });
}

// Panggil fungsi getJadwalSholat untuk mengambil jadwal sholat di Lhokseumawe, Aceh
getJadwalSholat();
