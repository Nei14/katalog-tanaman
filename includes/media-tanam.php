<?php
/**
 * Komponen Panduan Media Tanam
 * $mediaMode = 'full'    → tampilan di halaman utama (index)
 * $mediaMode = 'compact' → tampilan collapsible di halaman detail
 */
$mediaMode = $mediaMode ?? 'full';
?>

<?php if ($mediaMode === 'full'): ?>
<!-- ===== TAMPILAN PENUH (index.php) ===== -->
<div class="hero-guide-card">
  <p class="guide-title">Panduan Singkat</p>
  <h5>Cara Tanam di Galon Bekas</h5>

  <!-- Bahan -->
  <p class="guide-desc">Yang dibutuhkan:</p>
  <div class="bahan-row">
    <div class="bahan-item">Galon Bekas (Le Mineral)</div>
    <div class="bahan-item">Tanah</div>
    <div class="bahan-item">Pupuk Kandang</div>
    <div class="bahan-item">Sekam Padi</div>
  </div>

  <!-- Resep Campuran -->
  <p class="guide-desc mt-3">Campuran tanah (aduk rata):</p>
  <div class="ratio-row">
    <div class="ratio-pill">
      <span class="rp-num">1 kg</span>
      <span class="rp-label">Tanah</span>
    </div>
    <span class="ratio-plus">+</span>
    <div class="ratio-pill">
      <span class="rp-num">&frac12; kg</span>
      <span class="rp-label">Pupuk Kandang</span>
    </div>
    <span class="ratio-plus">+</span>
    <div class="ratio-pill">
      <span class="rp-num">1 kg</span>
      <span class="rp-label">Sekam Padi</span>
    </div>
  </div>

  <!-- Tips -->
  <ul class="guide-steps mt-3">
    <li><span class="step-num">1</span>Lubangi bawah galon 5&ndash;6 titik supaya air tidak menggenang.</li>
    <li><span class="step-num">2</span>Isi bagian paling bawah dengan arang kayu &plusmn;5 cm dulu.</li>
    <li><span class="step-num">3</span>Masukkan campuran tanah hingga &frac34; penuh, lalu tanam bibit.</li>
  </ul>

  <div class="guide-note">
    Pupuk kandang harus sudah <strong>kering dan tidak berbau</strong> sebelum dicampur.
  </div>
</div>

<?php else: ?>
<!-- ===== TAMPILAN RINGKAS (halaman detail) ===== -->
<div class="media-tanam-compact" data-aos="fade-up">
  <button class="mtkompak-toggle" type="button" data-bs-toggle="collapse"
    data-bs-target="#mediaTanamDetail" aria-expanded="false">
    <span>Cara Tanam di Galon Bekas</span>
    <i class="bi bi-chevron-down ms-auto toggle-icon"></i>
  </button>
  <div class="collapse" id="mediaTanamDetail">
    <div class="mtkompak-body">

      <p class="mtkompak-label"><strong>Bahan yang dibutuhkan:</strong></p>
      <div class="mtkompak-bahan">
        <span>Galon Bekas (Le Mineral)</span>
        <span>Tanah</span>
        <span>Pupuk Kandang</span>
        <span>Sekam Padi</span>
      </div>

      <p class="mtkompak-label mt-3"><strong>Campuran tanah (aduk rata):</strong></p>
      <div class="mtkompak-recipe">
        <span class="recipe-chip">1 kg<br><strong>Tanah</strong></span>
        <span class="recipe-plus">+</span>
        <span class="recipe-chip">&frac12; kg<br><strong>Pupuk Kandang</strong></span>
        <span class="recipe-plus">+</span>
        <span class="recipe-chip">1 kg<br><strong>Sekam Padi</strong></span>
      </div>

      <div class="mtkompak-steps">
        <div class="mts"><span>1</span>Lubangi bawah galon 5&ndash;6 titik agar air tidak tergenang.</div>
        <div class="mts"><span>2</span>Taruh arang kayu &plusmn;5 cm di dasar galon dulu.</div>
        <div class="mts"><span>3</span>Masukkan campuran tanah, lalu tanam bibit.</div>
      </div>

      <p class="mtkompak-note">Pupuk kandang harus sudah kering dan tidak berbau sebelum dicampur.</p>
    </div>
  </div>
</div>
<?php endif; ?>
