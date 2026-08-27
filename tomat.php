<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tomat Ceri – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Tomat Ceri di pot galon bekas – manfaat, perawatan, dan estimasi panen untuk warga Desa Mekarwangi." />
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
    <div class="row align-items-center g-5">
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
        <p class="plant-desc">Tomat ceri adalah varietas tomat berbuah kecil berwarna merah hingga kuning cerah. Rasanya manis-asam segar dan sangat cocok ditanam di galon bekas, balkon, atau teras rumah sebagai tanaman hias produktif.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>2–3 Bulan</span><small>Estimasi Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>6–8 Jam</span><small>Sinar Matahari</small></div>
          <div class="fact"><i class="bi bi-droplet"></i><span>1–2x/hari</span><small>Frekuensi Siram</small></div>
          <div class="fact"><i class="bi bi-bucket"></i><span>Galon 19L</span><small>Media Tanam</small></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="detail-body py-5">
  <div class="container">
    <ul class="nav nav-tabs detail-tabs mb-4" id="plantTab" role="tablist" data-aos="fade-up">
      <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#manfaat">Manfaat</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#perawatan">Perawatan</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#panen">Panen</button></li>
    </ul>
    <div class="tab-content" data-aos="fade-up" data-aos-delay="100">
      <div class="tab-pane fade show active" id="manfaat">
        <div class="row g-3">
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-heart-pulse"></i><div><strong>Kaya Likopen</strong><p>Likopen dalam tomat adalah antioksidan kuat yang membantu melindungi sel dari kerusakan dan menurunkan risiko penyakit jantung.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-droplet-half"></i><div><strong>Menjaga Hidrasi</strong><p>Kandungan air yang tinggi (95%) membuat tomat ceri sangat baik untuk menjaga hidrasi tubuh sepanjang hari.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-eye"></i><div><strong>Menyehatkan Mata</strong><p>Mengandung lutein dan zeaxanthin yang membantu melindungi kesehatan mata dari paparan sinar biru dan radikal bebas.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-palette2"></i><div><strong>Hias &amp; Produktif</strong><p>Selain bermanfaat, tanaman tomat ceri juga cantik sebagai tanaman hias pot dengan buah berwarna merah-kuning yang menarik.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>1–2 kali sehari</strong> secara merata dan konsisten. Tanah harus selalu lembap tetapi tidak becek. Cek kelembapan tanah sebelum menyiram.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Butuh <strong>sinar matahari penuh 6–8 jam</strong> per hari. Kekurangan sinar matahari menyebabkan buah sedikit dan kurang manis.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Media Tanam di Pot Galon</h5><p>Gunakan galon bekas 19 liter yang sudah dilubangi <strong>5–6 titik di dasar</strong> untuk drainase optimal. Isi dengan campuran <strong>tanah : pupuk kandang : sekam padi = 2:1:1</strong>. Pasang ajir/tongkat penyangga setinggi 60–80 cm sejak awal tanam.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-scissors"></i></div><div class="care-body"><h5>Pemangkasan (Wiwil)</h5><p>Pangkas tunas air (wiwil) secara rutin agar energi tanaman terfokus pada pembentukan buah dan tidak terbuang ke daun.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1–2: Semai &amp; Kecambah</h6><p>Semai benih di media semai lembap. Benih berkecambah dalam 7–10 hari. Jaga suhu hangat dan sinar matahari cukup.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Minggu 3–5: Bibit &amp; Pindah Tanam</h6><p>Setelah bibit punya 4–6 daun sejati, pindahkan ke galon bekas. Pasang ajir penyangga sejak awal.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 2: Berbunga</h6><p>Tanaman mulai berbunga kuning kecil. Pastikan sinar matahari cukup dan hindari penyiraman berlebihan saat fase ini.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 2–3: Panen Perdana</h6><p>Tomat ceri siap dipanen saat berwarna merah/kuning penuh dan terasa sedikit lunak saat ditekan ringan.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips Panen:</strong> Panen tomat ceri saat sudah berwarna penuh dan terasa sedikit lembut. Panen berkala setiap 2–3 hari membantu tanaman terus menghasilkan buah baru secara maksimal.</div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5" data-aos="fade-up">
      <a href="index.php" class="btn-back-bottom"><i class="bi bi-arrow-left-circle"></i> Kembali ke Katalog</a>
    </div>
  </div>
</section>

<?php require 'includes/footer-detail.php'; ?>
<?php require 'includes/scripts.php'; ?>
</body>
</html>
