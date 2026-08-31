<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cabe Rawit – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Cabe Rawit di pot galon bekas – manfaat, perawatan, dan estimasi panen untuk warga Desa Mekarwangi." />
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
        <p class="plant-desc">Cabe rawit adalah tanaman penghasil cabai mungil berasa pedas yang sangat populer di dapur Indonesia. Selain bumbu masak, cabe rawit juga memiliki manfaat kesehatan berkat kandungan capsaisinnya.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>3–4 Bulan</span><small>Estimasi Panen</small></div>
          <div class="fact"><i class="bi bi-sun"></i><span>6–8 Jam</span><small>Sinar Matahari</small></div>
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
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-heart-pulse"></i><div><strong>Meningkatkan Metabolisme</strong><p>Capsaicin dalam cabe rawit membantu mempercepat metabolisme tubuh dan membantu pembakaran lemak.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-shield-check"></i><div><strong>Kaya Antioksidan</strong><p>Mengandung vitamin C dan A yang tinggi untuk meningkatkan daya tahan tubuh secara alami.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-thermometer-sun"></i><div><strong>Anti-inflamasi</strong><p>Memiliki sifat anti-radang yang membantu meredakan nyeri sendi dan otot.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-basket2"></i><div><strong>Bumbu Dapur Segar</strong><p>Tersedia segar langsung dari galon — jauh lebih hemat dan sehat dibanding beli di pasar.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>2 kali sehari</strong> (pagi dan sore). Jangan biarkan tanah terlalu kering atau tergenang. Pastikan lubang drainase galon tidak tersumbat.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Butuh <strong>sinar matahari penuh 6–8 jam</strong> per hari. Letakkan di halaman atau balkon yang mendapat sinar matahari langsung.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Media Tanam di Pot Galon</h5><p>Gunakan galon bekas 19 liter yang sudah dilubangi <strong>5–6 titik di bagian bawah</strong> untuk drainase. Isi dengan campuran <strong>tanah : pupuk kandang : sekam padi = 2:1:1</strong>. Lapisi dasar galon dengan potongan styrofoam/kerikil agar air tidak menggenang.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-flower3"></i></div><div class="care-body"><h5>Pemupukan</h5><p>Beri pupuk organik cair <strong>setiap 2 minggu</strong> sekali. Gunakan kompos atau pupuk kandang fermentasi untuk hasil terbaik.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Minggu 1–2: Semai</h6><p>Semai benih di media semai atau cocopeat. Jaga kelembapan hingga benih berkecambah dalam 7–10 hari.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Minggu 3–4: Pindah Tanam</h6><p>Pindahkan bibit yang sudah memiliki 4–6 daun ke galon bekas. Lakukan saat pagi atau sore hari.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 2–3: Berbunga</h6><p>Tanaman mulai berbunga berwarna putih kecil. Pastikan sinar matahari cukup agar bunga tidak rontok.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 3–4: Panen Perdana</h6><p>Cabe siap dipanen saat berwarna merah cerah. Panen secara rutin agar tanaman terus produktif.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips Panen:</strong> Panen cabe saat buah sudah berwarna merah penuh untuk rasa paling pedas. Gunakan gunting bersih agar batang tidak rusak dan tanaman tetap produktif.</div>
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
