<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tentang Kami</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/stylehome.css') }}">
</head>

<body>


    {{-- Navbar --}}
    @include('partials.navbar')

    <div class="about">
        <div class="container ">
            <h1 class="text-white">TENTANG KAMI</h1>
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
                    <img class="img my-3" src="{{ asset('../assets/img/visi.png') }}" alt="">
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
                    <img class="img my-3" src="{{ asset('../assets/img/misi.png') }}" alt="">
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
                <div class="button-container"><a href="#selengkapnya" class="btn-artikel">
                        LAYANAN KAMI
                    </a></div>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <hr class="custom-hr">
    </div>

    <div class="container-contact " style="margin-top: 50px">
        <div class="title-section">
            <h1>HUBUNGI KAMI</h1>
        </div>
        <div class="row row-contact">
            <h2>KANTOR PUSAT</h2>
            <div class="info-contact">
                Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br> Phone : (+62 21) 398 38706 -
                Fax:
                (+62 21) 316 1701 <br> Hotline: +6281519040071 / +62811998167
            </div>
        </div>
        <ul class="custom-list"> <!-- Ganti kelas untuk lebih umum -->
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


    {{-- Footer --}}
    @include('partials.footer')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
