<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sereh Merah – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Sereh Merah di galon bekas untuk warga Desa Mekarwangi." />
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
        <p class="plant-desc">Sereh merah berbatang kemerahan dan beraroma kuat. Bisa dipakai untuk obat, pengusir nyamuk alami, dan bahan teh herbal.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>3&ndash;4 Bln</span><small>Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>5&ndash;7 Jam</span><small>Sinar Matahari</small></div>
          <div class="fact"><i class="bi bi-droplet"></i><span>2x/hari</span><small>Siram</small></div>
          <div class="fact"><i class="bi bi-bucket"></i><span>Galon 19L</span><small>Pot</small></div>
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
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-shield-check"></i><div><strong>Pengusir Nyamuk Alami</strong><p>Aroma sereh merah terbukti mengusir nyamuk tanpa bahan kimia.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-wind"></i><div><strong>Menenangkan</strong><p>Aromanya bisa membantu mengurangi stres dan membuat pikiran lebih rileks.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-thermometer-sun"></i><div><strong>Obat Nyeri</strong><p>Bisa membantu meredakan nyeri sendi dan sakit kepala secara alami.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-cup-hot"></i><div><strong>Teh Herbal</strong><p>Batangnya bisa diseduh jadi teh yang membantu melancarkan pencernaan.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>pagi dan sore</strong>. Sereh suka tanah lembap, tapi jangan sampai airnya menggenang.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Butuh <strong>5&ndash;7 jam sinar matahari</strong> sehari. Semakin banyak cahaya, aromanya semakin kuat.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Tanah di Galon</h5><p>Lubangi bawah galon 5&ndash;6 titik. Isi dengan campuran <strong>tanah : pupuk : sekam (1:1:1)</strong>.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-scissors"></i></div><div class="care-body"><h5>Perawatan Rumpun</h5><p>Pisahkan rumpun yang sudah penuh setiap 6&ndash;8 bulan agar galon tidak sesak.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1&ndash;2: Tanam Bibit</h6><p>Tanam anakan sereh merah ke dalam galon. Siram hingga tanah lembap merata.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Bulan 1&ndash;2: Tumbuh Akar</h6><p>Tanaman mulai beradaptasi dan muncul tunas baru dari pangkal rumpun.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 3: Rumpun Melebar</h6><p>Rumpun tumbuh lebat. Batang tua mulai mengeras dan siap dipanen.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 3&ndash;4: Panen</h6><p>Ambil batang dari bagian luar rumpun. Sisakan 3&ndash;5 batang agar terus tumbuh.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips:</strong> Potong batang sereh dekat pangkal menggunakan pisau tajam. Jangan dicabut seluruhnya agar rumpun tetap tumbuh terus.</div>
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
