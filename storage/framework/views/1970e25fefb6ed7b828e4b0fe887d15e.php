<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylehome.css')); ?>">

    <title>Home</title>
</head>

<body>
    
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <div class="container-fluid shadow-lg">
        <div class="banner-content">
            <div class="text-custom">
                <h2>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI ?</h2>
            </div>
            <a href="#selengkapnya" class="btn btn-outline-light align-content-center rounded-pill">
                SELENGKAPNYA <span class="arrow"><i class="fa-solid fa-chevron-down"></i></span>
            </a>
        </div>
    </div>

    <div class="container-tentang-kami">
        <h1 class="judul">TENTANG KAMI</h1>
        <div class="text-p">
            <p>INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah memberangkatkan lebih dari
                3000 mahasiswa Indonesia yang ingin kuliah, perjalanan wisata dan berkarir di negara maju di dunia.
            </p>
        </div>
    </div>
    <hr class="custom-hr-new">

    
    <div class="container-news">
        <h2 class="section-title">LAYANAN KAMI</h2>
        <div class="row custom-grid">
            <!-- Card 1 -->
            <div class="col ">
                <div class="card-container">
                    <div class="card-overlay">
                        <img src="<?php echo e(asset('assets/img/bachelor.png')); ?>" alt="Studi S1 - Bachelor" class="card-img">
                        <p class="text-card"><span class="underline"></span>Studi S1 - Bachelor</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col ">
                <div class="card-container">
                    <div class="card-overlay">
                        <img src="<?php echo e(asset('../assets/img/master.png')); ?>" alt="Studi S2 - Master" class="card-img">
                        <p class="text-card"><span class="underline"></span>Studi S2 - Master</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col ">
                <div class="card-container">
                    <div class="card-overlay">
                        <img src="<?php echo e(asset('assets/img/phd.jpg')); ?>" alt="Studi S3 - Ph.D" class="card-img">
                        <p class="text-card"><span class="underline"></span>Studi S3 - Ph.D</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col ">
                <div class="card-container">
                    <div class="card-overlay">
                        <img src="<?php echo e(asset('../assets/img/kursus.png')); ?>" alt="Kursus Bahasa Asing" class="card-img">
                        <p class="text-card"><span class="underline"></span>Kursus Bahasa Asing</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col ">
                <div class="card-container">
                    <div class="card-overlay">
                        <img src="<?php echo e(asset('assets/img/studytour.png')); ?>" alt="Study Tour" class="card-img">
                        <p class="text-card"><span class="underline"></span>Study Tour</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col ">
                <div class="card-container">
                    <div class="card-overlay">
                        <img src="<?php echo e(asset('assets/img/ausbildung.jpg')); ?>" alt="Ausbildung" class="card-img">
                        <p class="text-card"><span class="underline"></span>Ausbildung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container-mitra">
        <div class="text-mitra">
            <h1>MITRA KAMI</h1>
        </div>
        <div class="custom-grid-mitra">
            <div class="mitracard-container">
                <img src="<?php echo e(asset('assets/img/aviation.jpg')); ?>" class="card-image-mitra">
            </div>
            <div class="mitracard-container">
                <img src="<?php echo e(asset('assets/img/adrew.png')); ?>" class="card-image-mitra">
            </div>
            <div class="mitracard-container">
                <img src="<?php echo e(asset('assets/img/htw.png')); ?>" class="card-image-mitra">
            </div>
            <div class="mitracard-container">
                <img src="<?php echo e(asset('assets/img/studygroup.png')); ?>" class="card-image-mitra">
            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="banner-info">
            <div class="container-text">
                <div class="text-info">
                    <h2>GRATIS KONSELING STUDI DI LUAR NEGERI !!!</h2>
                </div>
                <div class="info-p">
                    <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
                </div>
            </div>
            <a href="#selengkapnya" class="btn-info btn-outline-light btn-start-consultation">
                MULAI KONSULTASI
                <span class="arrow ms-2"><i class="fa-solid fa-chevron-down"></i></span>
            </a>
        </div>
    </div>

    
    <div class="container-artikel">
        <div class="section-artikel">
            <h1>ARTIKEL TERBARU</h1>
        </div>
        <div class="row custom-grid-artikel">
            <!-- Card 1 -->
            <div class="col">
                <div class="card-container-artikel">
                    <img src="<?php echo e(asset('assets/img/studijerman.png')); ?>" class="card-img">

                </div>
                <div class="text-box">
                    <p class="text-card-artikel">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman
                    </p>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col">
                <div class="card-container-artikel">
                    <img src="<?php echo e(asset('../assets/img/korona.png')); ?>" class="card-img">

                </div>
                <div class="text-box">
                    <p class="text-card-artikel">Uni Eropa Menghadapi Virus Korona
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card-container-artikel">
                    <img src="<?php echo e(asset('assets/img/bahasajerman.png')); ?>" class="card-img">
                </div>
                <div class="text-box">
                    <p class="text-card-artikel">Belajar Bahasa Jerman Bersama Goethe Insistut
                    </p>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col">
                <div class="card-container-artikel">
                    <img src="<?php echo e(asset('../assets/img/gatescambride.png')); ?>" class="card-img">

                </div>
                <div class="text-box">
                    <p class="text-card-artikel">Apa Itu Gates Cambridge? Yuk Cari Tahu
                    </p>
                </div>
            </div>
        </div>
        <div class="button-container"><a href="# selengkapnya" class="btn-artikel">
                ARTIKEL LAINNYA
            </a></div>
    </div>

    <div class="d-flex">
        <hr class="custom-hr-new">
    </div>

    
    <div class="container-contact">
        <div class="title-section">
            <h1>HUBUNGI KAMI</h1>
        </div>
        <div class="row-contact">
            <h2>KANTOR PUSAT</h2>
            <div class="info-contact">
                Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br>
                Phone: (+62 21) 398 38706 - Fax: (+62 21) 316 1701 <br>
                Hotline: +6281519040071 / +628 11998167
            </div>
        </div>
        <ul class="custom-list">
            <li class="custom-list-item">
                <div class="rectangle-item">
                    <a class="text-link text-white" href="">LOKASI KAMI</a>
                </div>
            </li>
            <li class="custom-list-item">
                <div class="pesan-item">
                    <a class="text-link text-black" href="">KIRIM PESAN</a>
                </div>
            </li>
        </ul>
    </div>

    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
<?php /**PATH C:\Users\rafli\Tugas_WebEnterprise\resources\views/home.blade.php ENDPATH**/ ?>