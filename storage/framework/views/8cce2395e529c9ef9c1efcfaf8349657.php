<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layanan Kami</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylehome.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylelayananKami.css')); ?>">
    <link rel="stylesheet" href="styles.css"> <!-- Link tambahan untuk file CSS artikel -->
</head>

<body>
    
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid shadow-lg">
        <div class="bg-overlay position-absolute top-0 left-0 h-100">
        </div>
        <div class="bg-text position-absolute text-white">
            <h1 class="title">TIPS</h1>
            <h2 class="subtitle">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h2>
        </div>
    </div>

    <div class="container-news">
        <!-- Body 2 -->
        <div class="container my-4">
            <div class="row g-3">
                <!-- Card 1 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="<?php echo e(asset('../assets/img/tupai.png')); ?>" alt="Image 1"
                            class="card-img-top rounded image-card">
                        <div class="card-body p-2">
                            <p class="card-text text-center fw-bold">
                                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-6">
                    <div class="card border-0">
                        <img src="<?php echo e(asset('../assets/img/becak.png')); ?>" alt="Image 2"
                            class="card-img-top rounded image-card">
                        <div class="card-body p-2">
                            <p class="card-text text-center fw-bold">
                                Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Artikel Section -->
        <div class="container my-5">
            <h2 class="section-title">Artikel Terbaru</h2>
            <div class="row">
                <!-- Artikel 1 -->
                <div class="col-12 mb-3">
                    <div class="card news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset('../assets/img/news1.png')); ?>" class="img-fluid rounded-start"
                                    alt="Artikel 1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan
                                        Beasiswa</h5>
                                    <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset('../assets/img/news2.png')); ?>" class="img-fluid rounded-start"
                                    alt="Artikel 1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan
                                        Beasiswa</h5>
                                    <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset('../assets/img/news1.png')); ?>" class="img-fluid rounded-start"
                                    alt="Artikel 1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan
                                        Beasiswa</h5>
                                    <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-3">
                    <div class="card news-card">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo e(asset('../assets/img/news2.png')); ?>" class="img-fluid rounded-start"
                                    alt="Artikel 1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan
                                        Beasiswa</h5>
                                    <p class="card-text"><small class="text-muted">Selasa, 18 Feb 2020 12:01 WIB</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Artikel lainnya bisa ditambahkan di sini dengan format yang sama -->
            </div>
        </div>

        <!-- Pagination -->
        <div class="pagination mt-4">
            <span class="arrow">&larr;</span>
            <div class="page-item active">1</div>
            <div class="page-item">2</div>
            <div class="page-item">3</div>
            <div class="page-item">4</div>
            <div class="page-item">5</div>
            <span class="arrow">&rarr;</span>
        </div>
    </div>

    <!-- Body 3 -->
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
<?php /**PATH C:\Users\rafli\UAS_WEB2\resources\views/artikel.blade.php ENDPATH**/ ?>