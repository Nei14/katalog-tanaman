<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sereh Hijau – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Sereh Hijau di galon bekas untuk warga Desa Mekarwangi." />
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
        <p class="plant-desc">Sereh hijau adalah bumbu dapur yang hampir selalu ada di masakan Indonesia. Mudah tumbuh, tidak rewel, dan bisa dipanen berkali-kali.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>3&ndash;4 Bln</span><small>Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>4&ndash;6 Jam</span><small>Sinar Matahari</small></div>
          <div class="fact"><i class="bi bi-droplet"></i><span>1&ndash;2x/hari</span><small>Siram</small></div>
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
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-cup-hot"></i><div><strong>Bumbu Masak Wajib</strong><p>Bumbu penting untuk soto, rendang, nasi goreng, dan masakan sehari-hari lainnya.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-heart-pulse"></i><div><strong>Melancarkan Pencernaan</strong><p>Teh sereh hijau hangat bisa membantu perut tidak begah dan melancarkan pencernaan.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-shield-check"></i><div><strong>Antibakteri Alami</strong><p>Kandungan sitralnya bisa membantu melawan bakteri dan menjaga kesehatan tubuh.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-basket2"></i><div><strong>Hemat Belanja</strong><p>Tanam sendiri di rumah, tidak perlu beli sereh di pasar setiap hari.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>1&ndash;2 kali sehari</strong>. Sereh hijau cukup tahan kekeringan, tapi tumbuh lebih bagus jika tanahnya lembap.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Butuh <strong>4&ndash;6 jam cahaya</strong> sehari. Bisa tumbuh di tempat yang agak teduh, cocok untuk teras rumah.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Tanah di Galon</h5><p>Lubangi bawah galon 5&ndash;6 titik. Isi dengan campuran <strong>tanah : pupuk : sekam (1:1:1)</strong>. Tanam 1&ndash;2 rumpun per galon.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-flower3"></i></div><div class="care-body"><h5>Pemupukan</h5><p>Berikan pupuk organik <strong>sebulan sekali</strong> agar daun terus tumbuh subur dan beraroma.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1&ndash;2: Tanam Bibit</h6><p>Tanam batang sereh yang sudah ada akarnya. Siram hingga tanah lembap merata.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Bulan 1&ndash;2: Tumbuh Tunas</h6><p>Tunas baru mulai bermunculan dari pangkal. Daun tumbuh panjang berwarna hijau segar.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 3: Siap Dipanen</h6><p>Rumpun sudah cukup lebat. Batang bagian luar sudah bisa dipotong untuk masak.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 3&ndash;4 &amp; Seterusnya</h6><p>Panen terus berulang kali selama bertahun-tahun jika dirawat dengan baik.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips:</strong> Potong batang dekat pangkal (5&ndash;10 cm dari tanah). Selalu sisakan 3&ndash;4 batang agar rumpun terus tumbuh.</div>
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
