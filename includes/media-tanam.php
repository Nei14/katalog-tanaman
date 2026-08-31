<?php
/**
 * Komponen Panduan Media Tanam - Versi Ringkas & Mudah Dipahami
 * $mediaMode = 'full'    → tampilan di halaman utama (index)
 * $mediaMode = 'compact' → tampilan collapsible di halaman detail
 */
$mediaMode = $mediaMode ?? 'full';
?>

<?php if ($mediaMode === 'full'): ?>
<!-- ===== TAMPILAN PENUH (index.php) ===== -->
<div class="hero-guide-card">
  <p class="guide-title"><i class="bi bi-journal-bookmark-fill me-1"></i>Panduan Singkat</p>
  <h5>Cara Tanam di Galon Bekas</h5>

  <!-- Bahan -->
  <p class="guide-desc">Yang dibutuhkan:</p>
  <div class="bahan-row">
    <div class="bahan-item"><i class="bi bi-bucket-fill"></i><span>Galon Bekas</span></div>
    <div class="bahan-item"><i class="bi bi-bag-fill"></i><span>Tanah</span></div>
    <div class="bahan-item"><i class="bi bi-tree-fill"></i><span>Pupuk Kandang</span></div>
    <div class="bahan-item"><i class="bi bi-wind"></i><span>Sekam Padi</span></div>
  </div>

  <!-- Resep Campuran -->
  <p class="guide-desc mt-3">Campuran tanah (aduk rata):</p>
  <div class="ratio-row">
    <div class="ratio-pill"><span class="rp-num">1</span><span class="rp-label">Tanah</span></div>
    <span class="ratio-plus">+</span>
    <div class="ratio-pill"><span class="rp-num">1</span><span class="rp-label">Pupuk Kandang</span></div>
    <span class="ratio-plus">+</span>
    <div class="ratio-pill"><span class="rp-num">1</span><span class="rp-label">Sekam Padi</span></div>
  </div>

  <!-- Tips -->
  <ul class="guide-steps mt-3">
    <li><span class="step-num">1</span>Lubangi bawah galon 5&ndash;6 titik supaya air tidak menggenang.</li>
    <li><span class="step-num">2</span>Isi bagian paling bawah dengan arang kayu &plusmn;5 cm dulu.</li>
    <li><span class="step-num">3</span>Masukkan campuran tanah hingga &frac34; penuh, lalu tanam bibit.</li>
  </ul>

  <div class="guide-note">
    <i class="bi bi-lightbulb-fill me-2"></i>
    <span>Pupuk kandang harus sudah <strong>kering dan tidak berbau</strong> sebelum dicampur.</span>
  </div>
</div>

<?php else: ?>
<!-- ===== TAMPILAN RINGKAS (halaman detail) ===== -->
<div class="media-tanam-compact" data-aos="fade-up">
  <button class="mtkompak-toggle" type="button" data-bs-toggle="collapse"
    data-bs-target="#mediaTanamDetail" aria-expanded="false">
    <i class="bi bi-layers-fill me-2"></i>
    <span>Cara Tanam di Galon Bekas</span>
    <i class="bi bi-chevron-down ms-auto toggle-icon"></i>
  </button>
  <div class="collapse" id="mediaTanamDetail">
    <div class="mtkompak-body">

      <p class="mtkompak-label"><strong>Bahan yang dibutuhkan:</strong></p>
      <div class="mtkompak-bahan">
        <span><i class="bi bi-bucket"></i> Galon Bekas</span>
        <span><i class="bi bi-bag"></i> Tanah</span>
        <span><i class="bi bi-tree"></i> Pupuk Kandang</span>
        <span><i class="bi bi-wind"></i> Sekam Padi</span>
      </div>

      <p class="mtkompak-label mt-3"><strong>Campuran tanah (ukuran sama rata):</strong></p>
      <div class="mtkompak-recipe">
        <span class="recipe-chip">1 bagian<br><strong>Tanah</strong></span>
        <span class="recipe-plus">+</span>
        <span class="recipe-chip">1 bagian<br><strong>Pupuk Kandang</strong></span>
        <span class="recipe-plus">+</span>
        <span class="recipe-chip">1 bagian<br><strong>Sekam Padi</strong></span>
      </div>

      <div class="mtkompak-steps">
        <div class="mts"><span>1</span>Lubangi bawah galon 5&ndash;6 titik agar air tidak tergenang.</div>
        <div class="mts"><span>2</span>Taruh arang kayu &plusmn;5 cm di dasar galon dulu.</div>
        <div class="mts"><span>3</span>Masukkan campuran tanah, lalu tanam bibit.</div>
      </div>

    </div>
  </div>
</div>
<?php endif; ?>
