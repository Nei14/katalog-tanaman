<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sereh Merah – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Sereh Merah di pot galon bekas – manfaat, perawatan, dan estimasi panen untuk warga Desa Mekarwangi." />
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
          <img src="images/sereh-merah.png?v=2" alt="Sereh Merah" class="plant-main-img" />
          <div class="img-badge"><i class="bi bi-heart-pulse"></i> Herbal</div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <p class="breadcrumb-text"><a href="index.php">Katalog</a> / Sereh Merah</p>
        <h1 class="plant-name">Sereh Merah</h1>
        <p class="plant-latin"><em>Cymbopogon nardus</em></p>
        <p class="plant-desc">Sereh merah adalah tanaman herbal aromatik dengan batang berwarna kemerahan yang kaya manfaat. Dikenal sebagai tanaman obat tradisional dengan kandungan minyak atsiri yang tinggi untuk kesehatan dan relaksasi.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>3–4 Bulan</span><small>Estimasi Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>5–7 Jam</span><small>Sinar Matahari</small></div>
          <div class="fact"><i class="bi bi-droplet"></i><span>2x/hari</span><small>Frekuensi Siram</small></div>
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
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-shield-check"></i><div><strong>Anti-nyamuk Alami</strong><p>Minyak atsiri dari sereh merah (sitronelal) terbukti efektif mengusir nyamuk secara alami tanpa bahan kimia berbahaya.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-wind"></i><div><strong>Relaksasi &amp; Aromaterapi</strong><p>Aroma sereh merah memiliki efek menenangkan yang membantu mengurangi stres dan kecemasan sehari-hari.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-thermometer-sun"></i><div><strong>Anti-inflamasi</strong><p>Mengandung senyawa anti-radang yang membantu meredakan nyeri sendi, sakit kepala, dan peradangan tubuh.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-cup-hot"></i><div><strong>Teh Herbal Menyehatkan</strong><p>Batang sereh merah dapat diseduh menjadi teh herbal yang membantu melancarkan pencernaan dan meningkatkan imunitas.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>2 kali sehari</strong> secara teratur di pagi dan sore hari. Sereh merah menyukai tanah lembap namun tidak tergenang. Pastikan drainase galon lancar.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Tumbuh optimal dengan <strong>5–7 jam sinar matahari</strong> per hari. Toleran terhadap cahaya semi-teduh, namun sinar penuh menghasilkan tanaman lebih aromatik.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Media Tanam di Pot Galon</h5><p>Gunakan galon bekas 19 liter yang dilubangi <strong>5–6 titik di bagian bawah</strong>. Isi dengan campuran <strong>tanah : pupuk kandang : sekam padi = 2:1:1</strong>. Pot galon yang lebar dan dalam ideal untuk menampung rumpun sereh yang tumbuh melebar.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-scissors"></i></div><div class="care-body"><h5>Perawatan Rumpun</h5><p>Pisahkan rumpun setiap 6–8 bulan untuk mencegah galon terlalu sesak. Pemisahan rumpun juga sebagai cara perbanyakan tanaman secara vegetatif.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1–2: Penanaman Bibit</h6><p>Tanam anakan atau batang sereh merah ke galon. Pastikan akar tertanam minimal 5 cm dalam tanah. Siram hingga tanah lembap merata.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Bulan 1–2: Pertumbuhan Akar</h6><p>Tanaman mulai beradaptasi dan akar berkembang. Mulai terlihat tunas baru dari pangkal rumpun. Jaga kelembapan tanah secara konsisten.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 3: Rumpun Melebar</h6><p>Rumpun sereh tumbuh semakin lebat. Batang tua bagian pangkal mulai mengeras dan siap dipanen untuk keperluan memasak atau herbal.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 3–4: Panen Pertama</h6><p>Ambil batang dari luar rumpun dengan memotong dekat pangkal. Sisakan 3–5 batang agar tanaman terus tumbuh dan berproduksi.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips Panen:</strong> Panen batang sereh yang sudah berdiameter minimal 1 cm dengan memotong dekat pangkal menggunakan pisau tajam bersih. Jangan cabut seluruh rumpun agar tanaman tetap produktif jangka panjang.</div>
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
