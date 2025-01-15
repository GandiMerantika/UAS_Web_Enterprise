{{-- Navbar --}}
<nav class="navbar custom-navbar navbar-expand-lg">
    <!-- Navbar Brand -->
    <div class="container custom-container">
        <a class="navbar-brand text-white" href="{{ route('home') }}">
            <img src="{{ asset('assets/img/Inaklug.png') }}" height="70" alt="">
            Inaklug
        </a>

        <!-- Button for toggling burger menu on mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar items that will collapse on mobile -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('tentangKami') }}">TENTANG KAMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="">LAYANAN KAMI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('artikel') }}">ARTIKEL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('hubungiKami') }}">HUBUNGI KAMI</a>
                </li>
            </ul>
            <div class="input-group custom-search">
                <form class="d-flex" role="search">
                    <button class="btn fas fa-search" type="submit"></button>
                    <input class="form-control" type="search" placeholder="Ketik Pencarian" aria-label="Search">

                </form>
            </div>
            <div class="custom-border rounded-pill d-flex align-items-center justify-content-center">
                <a class="nav-link-custom text-white px-3 py-2" hr ef="#">DAFTAR ONLINE</a>
            </div>
        </div>
    </div>

</nav>
{{-- Navbar --}}
