<?php $navMode = 'index'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Katalog Tanaman Pot – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Katalog tanaman pot program edukasi budidaya tanaman di pot galon bekas KKM Kelompok 47 Universitas Muhammadiyah Cirebon – Desa Mekarwangi." />
  <link rel="icon" href="images/logo-kkm.jpg" type="image/jpeg" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/common.css" />
  <link rel="stylesheet" href="css/index.css" />
</head>
<body>

<?php require 'includes/navbar.php'; ?>

<!-- HERO + PANDUAN (GABUNGAN) -->
<section class="hero">
  <div class="container">
    <div class="row align-items-start g-4 g-lg-5">

      <!-- KIRI: Teks Sambutan -->
      <div class="col-lg-6" data-aos="fade-right">
        <div class="hero-badge"><i class="bi bi-patch-check"></i> Program Edukasi KKM Kelompok 47</div>
        <h1>Budidaya Tanaman Pot<br /><span>Galon Bekas</span></h1>
        <p>KKM Kelompok 47 Universitas Muhammadiyah Cirebon di Desa Mekarwangi hadir untuk membantu warga menanam tanaman bermanfaat menggunakan galon bekas yang sudah tidak terpakai — kreatif, hemat, dan ramah lingkungan!</p>
        <div class="hero-stats">
          <div class="hero-stat"><span class="num">5</span><span class="label">Jenis Tanaman</span></div>
          <div class="hero-stat"><span class="num">100%</span><span class="label">Organik</span></div>
          <div class="hero-stat"><span class="num">Gratis</span><span class="label">Panduan</span></div>
        </div>
      </div>

      <!-- KANAN: Kartu Panduan Media Tanam -->
      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="120">
        <div class="hero-guide-card">
          <p class="guide-title"><i class="bi bi-journal-bookmark-fill me-1"></i>Panduan Racikan Media Tanam</p>
          <h5>Campuran Media Tanam Pot Galon Bekas</h5>
          <p class="guide-desc">Gunakan racikan ini untuk hasil tanam terbaik. Campur rata sebelum dimasukkan ke dalam galon.</p>
          <div class="ratio-row">
            <div class="ratio-pill">
              <span class="rp-num">2</span>
              <span class="rp-label"><i class="bi bi-bag me-1"></i>Tanah</span>
            </div>
            <span class="ratio-plus">+</span>
            <div class="ratio-pill">
              <span class="rp-num">1</span>
              <span class="rp-label"><i class="bi bi-tree me-1"></i>Pupuk Kandang</span>
            </div>
            <span class="ratio-plus">+</span>
            <div class="ratio-pill">
              <span class="rp-num">1</span>
              <span class="rp-label"><i class="bi bi-wind me-1"></i>Sekam Padi</span>
            </div>
          </div>
          <ul class="guide-steps">
            <li><span class="step-num">1</span>Bersihkan galon 19L bekas dan potong bagian atas untuk bukaan tanam.</li>
            <li><span class="step-num">2</span>Buat <strong style="color:#fff;">5–6 lubang drainase</strong> di bagian bawah galon menggunakan paku yang dipanaskan.</li>
            <li><span class="step-num">3</span>Lapisi dasar dengan kerikil atau pecahan styrofoam (±3 cm) sebelum isi media tanam.</li>
            <li><span class="step-num">4</span>Isi media campuran 2:1:1 hingga ¾ tinggi galon, lalu tanam bibit.</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- KATALOG -->
<section class="py-5" id="katalog">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <p class="text-uppercase fw-bold" style="color:var(--lapis); letter-spacing:2px; font-size:.8rem;">
        <i class="bi bi-grid-3x3-gap me-1"></i>Koleksi Tanaman
      </p>
      <h2 class="section-title">Katalog Tanaman Pot</h2>
      <div class="divider-leaf"></div>
      <p class="section-subtitle mt-3">Pilih tanaman favoritmu dan pelajari cara merawatnya menggunakan pot galon bekas di rumah.</p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Cabe Rawit -->
      <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="0">
        <div class="plant-card">
          <div class="img-wrapper">
            <img src="images/cabe-rawit.png?v=2" alt="Tanaman Cabe Rawit" class="card-img-top" />
            <span class="card-category-badge"><i class="bi bi-fire"></i> Rempah Pedas</span>
          </div>
          <div class="card-body">
            <div class="latin-name">Capsicum frutescens</div>
            <h3 class="card-title">Cabe Rawit</h3>
            <p class="card-text">Tanaman penghasil cabai mungil pedas yang mudah tumbuh di galon bekas. Cocok untuk bumbu dapur segar sehari-hari.</p>
            <a href="cabe.php" class="btn-detail mt-3"><i class="bi bi-arrow-right-circle"></i> Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Tomat Ceri -->
      <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="80">
        <div class="plant-card">
          <div class="img-wrapper">
            <img src="images/tomat-ceri.png?v=2" alt="Tanaman Tomat Ceri" class="card-img-top" />
            <span class="card-category-badge"><i class="bi bi-brightness-high"></i> Sayuran Buah</span>
          </div>
          <div class="card-body">
            <div class="latin-name">Solanum lycopersicum var. cerasiforme</div>
            <h3 class="card-title">Tomat Ceri</h3>
            <p class="card-text">Varietas tomat mungil berwarna merah-kuning yang manis dan produktif. Cocok ditanam di balkon atau teras rumah.</p>
            <a href="tomat.php" class="btn-detail mt-3"><i class="bi bi-arrow-right-circle"></i> Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Sereh Merah -->
      <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
        <div class="plant-card">
          <div class="img-wrapper">
            <img src="images/sereh-merah.png?v=2" alt="Tanaman Sereh Merah" class="card-img-top" />
            <span class="card-category-badge"><i class="bi bi-heart-pulse"></i> Herbal</span>
          </div>
          <div class="card-body">
            <div class="latin-name">Cymbopogon nardus</div>
            <h3 class="card-title">Sereh Merah</h3>
            <p class="card-text">Tanaman herbal aromatik dengan batang kemerahan. Kaya manfaat untuk kesehatan dan aroma masakan tradisional.</p>
            <a href="sereh-merah.php" class="btn-detail mt-3"><i class="bi bi-arrow-right-circle"></i> Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Sereh Hijau -->
      <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="240">
        <div class="plant-card">
          <div class="img-wrapper">
            <img src="images/sereh-hijau.png?v=2" alt="Tanaman Sereh Hijau" class="card-img-top" />
            <span class="card-category-badge"><i class="bi bi-heart-pulse"></i> Herbal</span>
          </div>
          <div class="card-body">
            <div class="latin-name">Cymbopogon citratus</div>
            <h3 class="card-title">Sereh Hijau</h3>
            <p class="card-text">Sereh hijau klasik yang wajib ada di dapur. Mudah tumbuh subur di galon bekas dengan perawatan minimal.</p>
            <a href="sereh-hijau.php" class="btn-detail mt-3"><i class="bi bi-arrow-right-circle"></i> Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Jahe Merah -->
      <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="320">
        <div class="plant-card">
          <div class="img-wrapper">
            <img src="images/jahe-merah.png?v=2" alt="Tanaman Jahe Merah" class="card-img-top" />
            <span class="card-category-badge"><i class="bi bi-shield-check"></i> Obat</span>
          </div>
          <div class="card-body">
            <div class="latin-name">Zingiber officinale var. rubrum</div>
            <h3 class="card-title">Jahe Merah</h3>
            <p class="card-text">Rimpang berkhasiat tinggi dengan kandungan gingerol lebih besar dari jahe biasa. Sempurna untuk kesehatan dan minuman herbal.</p>
            <a href="jahe.php" class="btn-detail mt-3"><i class="bi bi-arrow-right-circle"></i> Lihat Detail</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MENGAPA BERTANAM DI POT -->
<section class="info-strip" id="panduan">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="text-white" style="font-weight:800;">Mengapa Bertanam di Pot Galon?</h2>
      <p style="color:rgba(255,255,255,.7); font-size:.95rem;">Keuntungan nyata yang bisa kamu rasakan langsung</p>
    </div>
    <div class="row g-4">
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="0">
        <div class="info-card">
          <div class="icon-wrap"><i class="bi bi-house-heart"></i></div>
          <h5>Hemat Lahan</h5>
          <p>Cocok untuk rumah kecil, balkon, atau teras sempit sekalipun.</p>
        </div>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="100">
        <div class="info-card">
          <div class="icon-wrap"><i class="bi bi-recycle"></i></div>
          <h5>Daur Ulang Galon</h5>
          <p>Memanfaatkan galon bekas sebagai media tanam produktif yang ramah lingkungan.</p>
        </div>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="200">
        <div class="info-card">
          <div class="icon-wrap"><i class="bi bi-piggy-bank"></i></div>
          <h5>Hemat Belanja</h5>
          <p>Hasil panen bisa langsung dikonsumsi, mengurangi pengeluaran dapur.</p>
        </div>
      </div>
      <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="300">
        <div class="info-card">
          <div class="icon-wrap"><i class="bi bi-heart-pulse"></i></div>
          <h5>Menyehatkan</h5>
          <p>Tanaman herbal dan sayuran segar organik langsung dari kebun sendiri.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>

<button id="scrollTop" title="Kembali ke atas"><i class="bi bi-arrow-up"></i></button>

<?php require 'includes/scripts.php'; ?>
<script>
  const btn = document.getElementById('scrollTop');
  window.addEventListener('scroll', () => {
    btn.style.display = window.scrollY > 300 ? 'flex' : 'none';
  });
  btn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
</script>
</body>
</html>
