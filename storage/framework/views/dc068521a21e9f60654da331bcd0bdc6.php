<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WebEnterprise</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">

</head>

<body>

    
    <nav class="navbar custom-navbar navbar-expand-lg">
        <div class="container">
            <!-- Navbar Brand -->
            <a class="navbar-brand text-white" href="#">
                <img src="<?php echo e(asset('assets/img/Inaklug.png')); ?>" height="70" alt="">
                Inaklug
            </a>

            <!-- Button for toggling burger menu on mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar items that will collapse on mobile -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">LAYANAN KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">ARTIKEL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">HUBUNGI KAMI</a>
                    </li>
                </ul>
                <div class="custom-border rounded-pill mx-5">
                    <a class="nav-link text-white px-3 py-2" href="#">DAFTAR ONLINE</a>
                </div>
            </div>
        </div>
    </nav>

    

    <div class="about">
        <div class="container ">
            <h1 class="text-white">Tentang Kami</h1>
        </div>
    </div>

    <div class="d-flex justify-content-center align-items-center">
        <div class="text-start px-5 pb-5 content-box">
            <h1>PROFIL</h1>
            <p>Didirikan pada tahun 2018, Ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan international
                yang berpengalaman, terbesar, terpercaya dan juga memiliki jam terbang tinggi untuk melayani para
                anak-anak muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.</p>
            <div class="row">
                <div class="col d-flex flex-column align-items-center">
                    <img class="img my-3" src="<?php echo e(asset('../assets/img/visi.png')); ?>" alt="">
                    <div class="text-start">
                        <h2>Visi</h2>
                        <p>Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara
                            internasional
                            untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia
                            masa
                            depan yang tangguh, mandiri dan profesional.</p>
                    </div>
                </div>


                <div class="col d-flex flex-column align-items-center">
                    <img class="img my-3" src="<?php echo e(asset('../assets/img/misi.png')); ?>" alt="">
                    <div class="text-start">
                        <h2>Misi</h2>
                        <p>Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara
                            internasional
                            untuk menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia
                            masa
                            depan yang tangguh, mandiri dan profesional.</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="layanan rounded-pill mx-5 border border-purple">
                    <a class="nav-link text-center text-black px-3 py-2" href="#">Layanan Kami</a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <hr class="custom-hr">
    </div>

    <div class="d-flex justify-content-center align-items-center mt-5">
        <div class="row text-center">
            <h2>HUBUNGI KAMI</h2>
            <h3>Kantor Pusat</h3>
            <h5>MULA BY GALERIA JAKARTA, CILANDAK TOWN SQUARE, LT.BASEMENT</h5>
            <ul class="d-flex justify-content-center list-unstyled"> <!-- Tambahkan d-flex dan hilangkan list-style -->
                <li class="d-flex flex-column align-items-center mx-2"> <!-- Gunakan li sebagai pengganti col -->
                    <div class="rectangle rounded-pill d-flex justify-content-center align-items-center">
                        <a class="text-center text-white text-decoration-none" href="">LOKASI KAMI</a>
                    </div>
                </li>
                <li class="d-flex flex-column align-items-center mx-2"> <!-- Gunakan li sebagai pengganti col -->
                    <div
                        class="pesan border border-purple rounded-pill d-flex justify-content-center align-items-center">
                        <a class="text-center text-black text-decoration-none" href="">KIRIM PESAN</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="footer d-flex justify-content-center align-items-center">
        <p class="text-white">Copyright &copy; 2020 - Inaklug Indonesia | Hak cipta dilindungi undang - undang</p>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
<?php /**PATH C:\Users\rafli\Tugas_WebEnterprise\resources\views/welcome.blade.php ENDPATH**/ ?>