<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sereh Hijau – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Sereh Hijau di pot galon bekas – manfaat, perawatan, dan estimasi panen untuk warga Desa Mekarwangi." />
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
          <img src="images/sereh-hijau.png?v=2" alt="Sereh Hijau" class="plant-main-img" />
          <div class="img-badge"><i class="bi bi-heart-pulse"></i> Herbal</div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <p class="breadcrumb-text"><a href="index.php">Katalog</a> / Sereh Hijau</p>
        <h1 class="plant-name">Sereh Hijau</h1>
        <p class="plant-latin"><em>Cymbopogon citratus</em></p>
        <p class="plant-desc">Sereh hijau adalah tanaman herbal klasik yang wajib ada di setiap dapur Indonesia. Dikenal dengan aroma lemon segar yang khas, sereh hijau mudah tumbuh subur di galon bekas dengan perawatan minimal dan hasil panen yang melimpah.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>3–4 Bulan</span><small>Estimasi Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>4–6 Jam</span><small>Sinar Matahari</small></div>
          <div class="fact"><i class="bi bi-droplet"></i><span>1–2x/hari</span><small>Frekuensi Siram</small></div>
          <div class="fact"><i class="bi bi-bucket"></i><span>Galon 19L</span><small>Media Tanam</small></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="detail-body py-5">
  <div class="container">
    <?php $mediaMode = 'compact'; require 'includes/media-tanam.php'; ?>
    <ul class="nav nav-tabs detail-tabs mb-4 mt-4" id="plantTab" role="tablist" data-aos="fade-up">
      <li class="nav-item"><button class="nav-link active" data-bs-toggle="tab" data-bs-target="#manfaat">Manfaat</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#perawatan">Perawatan</button></li>
      <li class="nav-item"><button class="nav-link" data-bs-toggle="tab" data-bs-target="#panen">Panen</button></li>
    </ul>
    <div class="tab-content" data-aos="fade-up" data-aos-delay="100">
      <div class="tab-pane fade show active" id="manfaat">
        <div class="row g-3">
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-cup-hot"></i><div><strong>Bumbu Dapur Serbaguna</strong><p>Sereh hijau adalah bumbu wajib dalam masakan Indonesia — soto, rendang, nasi goreng, dan berbagai masakan tradisional lainnya.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-activity"></i><div><strong>Melancarkan Pencernaan</strong><p>Meminum teh sereh hangat membantu mengurangi kembung, mual, dan masalah pencernaan lainnya secara alami.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-moon-stars"></i><div><strong>Mengurangi Kecemasan</strong><p>Aroma citrus segar dari sereh hijau memiliki efek menenangkan saraf dan membantu tidur lebih nyenyak di malam hari.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-droplet-half"></i><div><strong>Detoksifikasi Tubuh</strong><p>Sereh hijau bersifat diuretik ringan yang membantu membuang racun dalam tubuh dan menjaga kesehatan ginjal.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>1–2 kali sehari</strong>. Sereh hijau cukup toleran terhadap kekeringan singkat, namun tanah yang konsisten lembap menghasilkan pertumbuhan terbaik dan lebih cepat.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Tumbuh optimal dengan <strong>4–6 jam sinar matahari</strong> per hari. Lebih toleran terhadap naungan parsial dibanding sereh merah — cocok untuk teras semi-teduh.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Media Tanam di Pot Galon</h5><p>Gunakan galon bekas 19 liter yang dilubangi <strong>5–6 titik di bagian bawah</strong> untuk drainase. Isi dengan campuran <strong>tanah : pupuk kandang : sekam padi = 2:1:1</strong>. Sereh hijau cocok ditanam 1–2 rumpun per galon agar tidak terlalu sesak.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-bag-check"></i></div><div class="care-body"><h5>Pemupukan</h5><p>Pupuk dengan <strong>kompos organik atau pupuk N tinggi</strong> setiap 1 bulan sekali untuk mendorong pertumbuhan daun yang rimbun dan batang yang kuat.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1–2: Penanaman</h6><p>Tanam bibit atau batang sereh yang sudah berakar. Tekan tanah di sekitar pangkal batang dan siram hingga merata.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Bulan 1–2: Fase Pertumbuhan</h6><p>Tunas baru mulai bermunculan dari pangkal rumpun. Daun tumbuh memanjang berwarna hijau segar. Mulai berikan pupuk organik pertama.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 3: Rumpun Subur</h6><p>Rumpun sereh sudah cukup lebat dengan banyak batang. Batang-batang yang sudah berdiameter cukup besar siap untuk dipanen pertama kali.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 3–4: Panen &amp; Seterusnya</h6><p>Panen batang dari bagian luar rumpun. Satu rumpun sereh hijau bisa dipanen berulang kali selama bertahun-tahun jika dirawat dengan baik.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips Panen:</strong> Potong batang sereh dekat pangkal (5–10 cm dari tanah) menggunakan pisau atau gunting tajam. Sisakan selalu minimal 3–4 batang agar rumpun dapat terus berkembang dan menghasilkan tunas baru.</div>
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
