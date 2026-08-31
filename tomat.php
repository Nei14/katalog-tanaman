<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tomat Ceri – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Tomat Ceri di galon bekas untuk warga Desa Mekarwangi." />
  <link rel="icon" href="images/logo-kkm.jpg" type="image/jpeg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css" />
  <link rel="stylesheet" href="css/detail.css" />
</head>
<body>
<?php require 'includes/navbar.php'; ?>

<section class="detail-hero">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-5" data-aos="fade-right">
        <div class="plant-img-card">
          <img src="images/tomat-ceri.png?v=2" alt="Tomat Ceri" class="plant-main-img" />
          <div class="img-badge"><i class="bi bi-brightness-high"></i> Sayuran Buah</div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <p class="breadcrumb-text"><a href="index.php">Katalog</a> / Tomat Ceri</p>
        <h1 class="plant-name">Tomat Ceri</h1>
        <p class="plant-latin"><em>Solanum lycopersicum var. cerasiforme</em></p>
        <p class="plant-desc">Tomat kecil manis-asam yang mudah ditanam di galon. Bisa dimakan langsung dan mempercantik tampilan rumah.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>2&ndash;3 Bln</span><small>Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>6&ndash;8 Jam</span><small>Matahari</small></div>
          <div class="fact"><i class="bi bi-droplet"></i><span>1&ndash;2x/hari</span><small>Siram</small></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="detail-body py-4">
  <div class="container">
    <?php $mediaMode = 'compact'; require 'includes/media-tanam.php'; ?>

    <div class="content-section" data-aos="fade-up">
      <p class="content-section-title"><i class="bi bi-star-fill"></i> Manfaat</p>
      <div class="row g-3">
        <div class="col-12 col-md-6"><div class="benefit-card"><i class="bi bi-heart-pulse"></i><div><strong>Kaya Vitamin</strong><p>Mengandung vitamin C dan likopen yang bagus untuk jantung dan kulit.</p></div></div></div>
        <div class="col-12 col-md-6"><div class="benefit-card"><i class="bi bi-droplet-half"></i><div><strong>Menyegarkan</strong><p>Kandungan airnya tinggi, cocok dimakan langsung sebagai camilan sehat.</p></div></div></div>
        <div class="col-12 col-md-6"><div class="benefit-card"><i class="bi bi-eye"></i><div><strong>Baik untuk Mata</strong><p>Kandungan luteinnya membantu menjaga kesehatan mata sehari-hari.</p></div></div></div>
        <div class="col-12 col-md-6"><div class="benefit-card"><i class="bi bi-palette2"></i><div><strong>Cantik di Rumah</strong><p>Buahnya yang merah-kuning juga mempercantik tampilan rumah.</p></div></div></div>
      </div>
    </div>

    <div class="content-section" data-aos="fade-up">
      <p class="content-section-title"><i class="bi bi-tools"></i> Cara Merawat</p>
      <div class="row g-3">
        <div class="col-12 col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>1&ndash;2 kali sehari</strong>. Tanah harus tetap lembap, tapi jangan sampai tergenang.</p></div></div></div>
        <div class="col-12 col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Butuh <strong>sinar matahari langsung</strong> minimal 6 jam sehari.</p></div></div></div>
        <div class="col-12 col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-scissors"></i></div><div class="care-body"><h5>Pangkas Tunas Liar</h5><p>Potong tunas kecil di ketiak daun agar buah tumbuh lebih banyak dan besar.</p></div></div></div>
      </div>
    </div>

    <div class="content-section" data-aos="fade-up">
      <p class="content-section-title"><i class="bi bi-calendar-check"></i> Kapan Dipanen?</p>
      <div class="harvest-info">
        <div class="harvest-timeline">
          <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1&ndash;2: Semai</h6><p>Semai benih di tanah lembap. Benih tumbuh dalam 7&ndash;10 hari.</p></div></div>
          <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Minggu 3&ndash;5: Pindah ke Galon</h6><p>Setelah bibit punya 4&ndash;6 daun, pindahkan ke galon. Pasang tongkat penyangga.</p></div></div>
          <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 2: Berbunga</h6><p>Muncul bunga kuning kecil. Jaga agar cukup sinar matahari.</p></div></div>
          <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 2&ndash;3: Panen</h6><p>Tomat siap dipetik saat warnanya sudah merah atau kuning penuh.</p></div></div>
        </div>
        <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips:</strong> Panen setiap 2&ndash;3 hari sekali agar tanaman terus berbuah lebih banyak.</div>
      </div>
    </div>

    <div class="text-center mt-4" data-aos="fade-up">
      <a href="index.php" class="btn-back-bottom"><i class="bi bi-arrow-left-circle"></i> Kembali ke Katalog</a>
    </div>
  </div>
</section>

<?php require 'includes/footer-detail.php'; ?>
<?php require 'includes/scripts.php'; ?>
</body>
</html>
