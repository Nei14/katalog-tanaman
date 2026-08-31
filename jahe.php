<?php $navMode = 'detail'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jahe Merah – KKM 47 Desa Mekarwangi</title>
  <meta name="description" content="Panduan menanam Jahe Merah di galon bekas untuk warga Desa Mekarwangi." />
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
          <img src="images/jahe-merah.png?v=2" alt="Jahe Merah" class="plant-main-img" />
          <div class="img-badge"><i class="bi bi-shield-check"></i> Obat</div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <p class="breadcrumb-text"><a href="index.php">Katalog</a> / Jahe Merah</p>
        <h1 class="plant-name">Jahe Merah</h1>
        <p class="plant-latin"><em>Zingiber officinale var. rubrum</em></p>
        <p class="plant-desc">Jahe merah adalah jahe paling berkhasiat. Rimpangnya merah-oranye dengan rasa lebih pedas, sangat populer untuk jamu dan minuman penghangat tubuh.</p>
        <div class="quick-facts">
          <div class="fact"><i class="bi bi-clock"></i><span>8&ndash;10 Bln</span><small>Panen</small></div>
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
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-thermometer-sun"></i><div><strong>Menghangatkan Tubuh</strong><p>Segelas wedang jahe merah bisa menghangatkan tubuh dan memperlancar peredaran darah.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-heart-pulse"></i><div><strong>Meningkatkan Daya Tahan</strong><p>Kandungan gingerolnya membantu tubuh lebih kuat melawan penyakit dan masuk angin.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-emoji-smile"></i><div><strong>Meredakan Mual</strong><p>Sangat efektif untuk mengatasi mual, mabuk perjalanan, dan perut tidak nyaman.</p></div></div></div>
          <div class="col-md-6"><div class="benefit-card"><i class="bi bi-mortarboard"></i><div><strong>Bahan Jamu</strong><p>Jahe merah adalah bahan utama berbagai jamu tradisional yang sudah terbukti khasiatnya.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="perawatan">
        <div class="row g-3">
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-droplet-fill"></i></div><div class="care-body"><h5>Penyiraman</h5><p>Siram <strong>1&ndash;2 kali sehari</strong>. Tanah harus lembap tapi tidak tergenang. Kurangi siram saat musim kemarau.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-cloud-sun-fill"></i></div><div class="care-body"><h5>Sinar Matahari</h5><p>Cocok di tempat <strong>agak teduh</strong>. Hindari sinar matahari langsung seharian penuh karena bisa membuat daun terbakar.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-layers-fill"></i></div><div class="care-body"><h5>Tanah di Galon</h5><p>Lubangi bawah galon 5&ndash;6 titik. Isi dengan campuran <strong>tanah : pupuk : sekam (1:1:1)</strong>. Galon yang lebar lebih bagus karena rimpang tumbuh ke samping.</p></div></div></div>
          <div class="col-md-6"><div class="care-card"><div class="care-icon"><i class="bi bi-calendar-check"></i></div><div class="care-body"><h5>Masa Istirahat</h5><p>Saat kemarau, daun mungkin menguning &mdash; itu normal. Kurangi penyiraman dan tunggu musim hujan, tanaman akan tumbuh lagi.</p></div></div></div>
        </div>
      </div>
      <div class="tab-pane fade" id="panen">
        <div class="harvest-info">
          <div class="harvest-timeline">
            <div class="timeline-item"><div class="tl-dot">1</div><div class="tl-content"><h6>Bulan 1: Tanam Bibit</h6><p>Pilih rimpang jahe segar yang ada tunasnya. Rendam semalam, tanam dengan tunas menghadap atas sedalam 5&ndash;7 cm.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">2</div><div class="tl-content"><h6>Bulan 2&ndash;3: Tumbuh Tunas</h6><p>Tunas daun mulai muncul dari rimpang. Tanaman mulai berdiri tegak dengan daun hijau.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">3</div><div class="tl-content"><h6>Bulan 4&ndash;7: Rimpang Tumbuh</h6><p>Di dalam tanah, rimpang baru sedang berkembang. Berikan pupuk rutin untuk hasil terbaik.</p></div></div>
            <div class="timeline-item"><div class="tl-dot">4</div><div class="tl-content"><h6>Bulan 8&ndash;10: Panen</h6><p>Saat daun sudah menguning sendiri, rimpang siap dipanen. Keluarkan hati-hati dari galon.</p></div></div>
          </div>
          <div class="harvest-tip"><i class="bi bi-lightbulb-fill"></i><strong>Tips:</strong> Simpan sebagian rimpang yang kecil untuk dijadikan bibit tanaman berikutnya.</div>
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
