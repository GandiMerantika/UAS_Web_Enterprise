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
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/stylehubungiKami.css')); ?>">
    <script src="https://www.google.com/recaptcha/enterprise.js?render=your-site-key"></script>

</head>

<body>
    
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container-fluid-hubungi shadow-lg">
        <div class="bg-overlay position-absolute top-0 left-0 h-100">
        </div>
        <div class="bg-text position-absolute text-white">
            <h1 class="title">HUBUNGI KAMI</h1>
        </div>
    </div>

    <div class="container-news">
        <div class="container my-5">
            <h2 class="section-title text-center mb-4">KIRIM PESAN</h2>
            <form id="contactForm" class="row g-3" method="POST" action="<?php echo e(route('hubungiKami.store')); ?>">
                <?php echo csrf_field(); ?>
                <!-- Nama -->
                <div class="col-md-6">
                    <label for="name" class="form-label">Nama*</label>
                    <input type="text" id="name" name="name" class="form-control-hk"
                        placeholder="Nama lengkap Anda" required>
                </div>
                <!-- Email -->
                <div class="col-md-6">
                    <label for="email" class="form-label">E-Mail*</label>
                    <input type="email" id="email" name="email" class="form-control-hk"
                        placeholder="Alamat E-mail Anda" required>
                </div>
                <!-- Perusahaan / Organisasi -->
                <div class="col-md-6">
                    <label for="company" class="form-label">Perusahaan / Organisasi</label>
                    <input type="text" id="company" name="company" class="form-control-hk"
                        placeholder="Nama Perusahaan / Organisasi">
                </div>
                <!-- Telepon -->
                <div class="col-md-6">
                    <label for="phone" class="form-label">Telepon</label>
                    <input type="tel" id="phone" name="phone" class="form-control-hk"
                        placeholder="Nomor Telepon Anda">
                </div>
                <!-- Isi Pesan -->
                <div class="col-12">
                    <label for="message" class="form-label">Isi Pesan*</label>
                    <textarea id="message" name="message" class="form-control-hk"rows="4" placeholder="Isi pesan Anda ..." required></textarea>
                </div>
                <div class="form-col">
                    <!-- reCAPTCHA -->
                    <div class="g-recaptcha" data-sitekey="6LcnabEqAAAAAHZ9sRR3-r4-hTyg1jPbMTR4guY-">
                    </div>
                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">KIRIM PESAN</button>
                </div>


            </form>
        </div>
    </div>


    <!-- Body 3 -->
    <div class="container-contact">
        <div class="title-section">
            <h1>LOKASI KAMI</h1>
        </div>
        <div class="row-contact">
            <h2>KANTOR PUSAT</h2>
            <div class="info-contact">
                Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br>
                Phone: (+62 21) 398 38706 - Fax: (+62 21) 316 1701 <br>
                Hotline: +6281519040071 / +628 11998167
            </div>
            <h2>KANTOR CABANG</h2>
            <div class="info-contact">
                Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat <br>
                Phone: (+62 21) 398 38706 - Fax: (+62 21) 316 1701 <br>
                Hotline: +6281519040071 / +628 11998167
            </div>
        </div>
    </div>

    
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const formData = new FormData(this);

            fetch('<?php echo e(route('hubungiKami.store')); ?>', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    },
                    body: formData,
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    window.location.href = '<?php echo e(route('home')); ?>'; // Pindah ke halaman Home
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengirim pesan.');
                });
        });
    </script>
</body>

</html>
<?php /**PATH C:\Users\rafli\UAS_WEB2\resources\views/hubungiKami.blade.php ENDPATH**/ ?>