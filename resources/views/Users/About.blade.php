<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
        border-color: none;
    }

    .full-view-container {
        position: relative;
        width: 100%;
        height: 100vh;
        overflow: hidden;
    }

    .hero-image {
        position: absolute;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center center;
        opacity: 0;
        transition: opacity 1.5s ease;
        z-index: 1;
    }

    .hero-image.active {
        opacity: 1;
    }

    .svg-front {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 2;
        border: 0;
    }

    .content {
        position: absolute;
        top: 50%;
        left: 12%;
        transform: translateY(-50%);
        text-align: left;
        color: white;
        font-family: Arial, sans-serif;
        z-index: 3;
    }

    .content h1 {
        margin-bottom: 1px;
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .content p {
        color: rgb(255, 255, 255);
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .tombolLapor {
        padding: 5px 20px;
        background: rgb(255, 89, 0);
        color: azure;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        z-index: 3;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .tombolLapor:hover {
        background: rgb(177, 62, 0);
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
        transform: scale(0.95);
    }
</style>

<body>
    <section>
        <div class="full-view-container">
            <?php foreach ($dataset as $index => $image): ?>
            <div class="hero-image <?= $index === 0 ? 'active' : '' ?>"
             style="background-image: url('<?= asset('home/' . $image['content']); ?>');">
            </div>
            <?php endforeach; ?>

            <svg class="svg-front" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="rgb(255, 255, 255)" fill-opacity="1"
                    d="M0,224L80,234.7C160,245,320,267,480,282.7C640,299,800,309,960,304C1120,299,1280,277,1360,266.7L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                </path>
            </svg>
            <div class="content">
                <h1 class="h1"><b>LABU, Laporan Buku</b></h1>
                <p class="h5">Laporan Umum Perpustakaan</p>
                <a href="<?= url('/'); ?>"><button class="tombolLapor h5"><b>Home</b></button></a>
            </div>
        </div>
    <script>
        const images = document.querySelectorAll('.hero-image');
        let currentIndex = 0;

        // Fungsi untuk rotasi gambar
        setInterval(() => {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }, 7000); // Setiap 7 detik
    </script>
</section>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>