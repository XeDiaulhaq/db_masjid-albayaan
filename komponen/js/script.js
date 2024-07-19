function getJadwalSholat() {
    fetch('https://api.aladhan.com/v1/timingsByCity?city=Lhokseumawe&country=Indonesia&method=2')
    .then(response => response.json())
    .then(data => {
        const jadwalSholat = data.data.timings;

        // Mengisi nilai jadwal sholat ke dalam elemen HTML yang sesuai
        document.querySelector('.card-title.tgl').innerHTML = `<i class="bi bi-geo-alt-fill m-2"></i>Lhokseumawe, Aceh - ${data.data.date.gregorian.date}`;
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

getJadwalSholat();

function getNews() {
    document.addEventListener('DOMContentLoaded', function() {
        const apiUrl = 'https://berita-indo-api.vercel.app/v1/cnn-news';

        fetch(apiUrl)
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(data => {
                if (!data || !data.data || !Array.isArray(data.data)) {
                    throw new Error('Invalid data format');
                }

                const newsContainer = document.getElementById('news-container');
                newsContainer.innerHTML = ''; // Clear the container

                data.data.forEach(news => {
                    const title = news.title ? news.title.toLowerCase() : '';
                    const contentSnippet = news.contentSnippet ? news.contentSnippet.toLowerCase() : '';

                    const newsCard = document.createElement('div');
                    newsCard.className = 'card mb-4';
                    newsCard.innerHTML = `
                        <div class="card-body">
                            <h3 class="card-title">${news.title}</h3>
                            <p class="card-text"><strong>Snippet:</strong> ${news.contentSnippet}</p>
                            <p class="card-text"><strong>Tanggal:</strong> ${new Date(news.isoDate).toLocaleDateString()}</p>
                            <p class="card-text"><strong>URL:</strong> <a href="${news.link}" target="_blank">${news.link}</a></p>
                            ${news.image ? `<p class="card-text"><strong>Gambar:</strong> <img src="${news.image.small}" class="img-fluid" alt="Image"></p>` : ''}
                        </div>
                    `;
                    newsContainer.appendChild(newsCard);
                });
            })
            .catch(error => {
                console.error('Error occurred:', error);
                document.getElementById('news-container').innerHTML = `<p>Error occurred: ${error.message}</p>`;
            });
    });
}

getNews();


document.getElementById('janji-temu').addEventListener('submit', function (event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const message = document.getElementById('message').value;

    const waMessage = `Assalamualaikum warahmatullahi wabarakatuh, saya ingin membuat janji temu. Berikut adalah detailnya:%0A%0A` +
        `Nama: ${name}%0A` +
        `Email: ${email}%0A` +
        `No. Telepon: ${phone}%0A` +
        `Tanggal: ${date}%0A` +
        `Waktu: ${time}%0A` +
        `Pesan: ${message}`;

    const waUrl = `https://wa.me/62895630243740?text=${waMessage}`; 

    window.open(waUrl, '_blank');
});