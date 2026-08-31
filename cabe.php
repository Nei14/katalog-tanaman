<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cabe Rawit – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Cabe Rawit di galon bekas untuk warga Desa Mekarwangi." />
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
          <img src="images/cabe-rawit.png?v=2" alt="Cabe Rawit" class="plant-main-img" />
          <div class="img-badge"><i class="bi bi-fire"></i> Rempah Pedas</div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <p class="breadcrumb-text"><a href="index.php">Katalog</a> / Cabe Rawit</p>
        <h1 class="plant-name">Cabe Rawit</h1>
        <p class="plant-latin"><em>Capsicum frutescens</em></p>
        <p class="plant-desc">Cabe rawit adalah cabai kecil yang rasanya pedas. Enak untuk bumbu masak sehari-hari dan mudah tumbuh di galon bekas.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>3&ndash;4 Bln</span><small>Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>6&ndash;8 Jam</span><small>Sinar Matahari</small></div>
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
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-heart-pulse"></i><div><strong>Baik untuk Tubuh</strong><p>Mengandung vitamin C yang tinggi untuk menjaga daya tahan tubuh.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-fire"></i><div><strong>Menambah Nafsu Makan</strong><p>Rasa pedasnya membuat makanan lebih lezat dan menggugah selera.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-basket2"></i><div><strong>Hemat Belanja</strong><p>Tidak perlu beli cabe tiap hari &mdash; petik langsung dari galon di rumah.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-shield-check"></i><div><strong>Anti Nyeri</strong><p>Kandungan capsaicin-nya bisa membantu meredakan nyeri otot dan sendi.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>pagi dan sore</strong>. Jangan sampai tanahnya kering atau tergenang air.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Taruh di tempat yang kena <strong>matahari langsung</strong> minimal 6 jam sehari.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Tanah di Galon</h5><p>Lubangi bawah galon 5&ndash;6 titik. Isi dengan campuran <strong>tanah : pupuk : sekam (1:1:1)</strong>.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-flower3"></i></div><div class="care-body"><h5>Pemupukan</h5><p>Tambahkan pupuk organik <strong>2 minggu sekali</strong> agar tanaman tumbuh subur.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1&ndash;2: Semai</h6><p>Semai benih di tanah lembap. Benih akan mulai tumbuh dalam 7&ndash;10 hari.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Minggu 3&ndash;4: Pindah ke Galon</h6><p>Setelah bibit punya 4&ndash;6 daun, pindahkan ke galon bekas. Lakukan pagi atau sore hari.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 2&ndash;3: Berbunga</h6><p>Muncul bunga kecil berwarna putih. Pastikan cukup sinar matahari agar bunga tidak rontok.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 3&ndash;4: Panen</h6><p>Cabe siap dipetik saat sudah berwarna merah cerah.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips:</strong> Petik cabe yang sudah merah menggunakan gunting bersih agar tanaman terus berbuah.</div>
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
