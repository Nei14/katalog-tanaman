<?php
/**
 * Komponen Panduan Media Tanam Pot Galon Bekas
 * Berdasarkan: Materi Workshop KKM 47 - Proker Galon Bekas
 *
 * Cara pakai:
 *   $mediaMode = 'full';    // tampilan lengkap (hero index)
 *   $mediaMode = 'compact'; // tampilan ringkas collapsible (halaman detail)
 *   require 'includes/media-tanam.php';
 */
$mediaMode = $mediaMode ?? 'full';
?>

<?php if ($mediaMode === 'full'): ?>
<!-- ===== TAMPILAN LENGKAP (index.php) ===== -->
<div class="hero-guide-card">
  <p class="guide-title"><i class="bi bi-journal-bookmark-fill me-1"></i>Panduan Media Tanam Pot Galon</p>
  <h5>Alat &amp; Bahan yang Diperlukan</h5>

  <!-- Bahan-bahan -->
  <div class="bahan-row">
    <div class="bahan-item"><i class="bi bi-bucket-fill"></i><span>Galon Bekas 19L</span></div>
    <div class="bahan-item"><i class="bi bi-bag-fill"></i><span>Tanah Digemburkan</span></div>
    <div class="bahan-item"><i class="bi bi-tree-fill"></i><span>Pupuk Organik / Pupuk Kandang</span></div>
    <div class="bahan-item"><i class="bi bi-wind"></i><span>Sekam Padi (Huut Badag)</span></div>
  </div>

  <h5 class="mt-3">Lapisan Isi Galon</h5>
  <p class="guide-desc">Susun lapisan dari bawah ke atas sesuai urutan berikut:</p>

  <div class="layer-stack">
    <div class="layer-item layer-arang">
      <span class="layer-badge">Dasar</span>
      <i class="bi bi-layers me-2"></i><strong>Arang Kayu &plusmn;5 cm</strong>
      <small>Berfungsi sebagai saluran drainase air ke bawah</small>
    </div>
    <div class="layer-item layer-media">
      <span class="layer-badge">Tengah</span>
      <i class="bi bi-layers-fill me-2"></i><strong>Campuran Media Tanam</strong>
      <small>Tanah + sekam padi (1:1) &mdash; menjaga tanah tidak padat</small>
    </div>
    <div class="layer-item layer-top">
      <span class="layer-badge">Atas</span>
      <i class="bi bi-flower3 me-2"></i><strong>Tanam Bibit</strong>
      <small>Isi hingga &frac34; tinggi galon, lalu tanam bibit</small>
    </div>
  </div>

  <h5 class="mt-3">4 Alternatif Campuran Media Tanam</h5>
  <p class="guide-desc">Pilih salah satu sesuai bahan yang tersedia:</p>

  <div class="alternatif-grid">
    <div class="alt-card alt-1">
      <span class="alt-num">1</span>
      <div class="alt-body">
        <strong>Tanah + Pupuk Kandang + Sekam Padi</strong>
        <span class="alt-ratio">Perbandingan 1 : 1 : 1</span>
      </div>
    </div>
    <div class="alt-card alt-2">
      <span class="alt-num">2</span>
      <div class="alt-body">
        <strong>Tanah + Pupuk Kandang + Abu Sekam Padi</strong>
        <span class="alt-ratio">Cocok jika tersedia abu sekam</span>
      </div>
    </div>
    <div class="alt-card alt-3">
      <span class="alt-num">3</span>
      <div class="alt-body">
        <strong>Tanah + Pasir + Pupuk Kandang</strong>
        <span class="alt-ratio">Kotoran ayam (pastikan sudah matang)</span>
      </div>
    </div>
    <div class="alt-card alt-4">
      <span class="alt-num">4</span>
      <div class="alt-body">
        <strong>Tanah + Pupuk Organik + Sekam Padi</strong>
        <span class="alt-ratio">Gunakan pupuk organik padat/cair</span>
      </div>
    </div>
  </div>

  <div class="guide-note">
    <i class="bi bi-info-circle-fill me-2"></i>
    <span>Jika menggunakan pupuk kandang, pastikan sudah <strong>matang/lama</strong> agar tidak berbau menyengat dan tidak merusak tanaman.</span>
  </div>
</div>

<?php else: ?>
<!-- ===== TAMPILAN RINGKAS (halaman detail) ===== -->
<div class="media-tanam-compact" data-aos="fade-up">
  <button class="mtkompak-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#mediaTanamDetail" aria-expanded="false">
    <i class="bi bi-layers-fill me-2"></i>
    <span>Panduan Media Tanam Pot Galon Bekas</span>
    <i class="bi bi-chevron-down ms-auto toggle-icon"></i>
  </button>
  <div class="collapse" id="mediaTanamDetail">
    <div class="mtkompak-body">
      <!-- Bahan -->
      <p class="mtkompak-label"><i class="bi bi-box2-fill me-1"></i> <strong>Alat &amp; Bahan</strong></p>
      <div class="mtkompak-bahan">
        <span><i class="bi bi-bucket"></i> Galon Bekas 19L</span>
        <span><i class="bi bi-bag"></i> Tanah Digemburkan</span>
        <span><i class="bi bi-tree"></i> Pupuk Organik/Kandang</span>
        <span><i class="bi bi-wind"></i> Sekam Padi (Huut Badag)</span>
      </div>

      <!-- Lapisan -->
      <p class="mtkompak-label mt-3"><i class="bi bi-stack me-1"></i> <strong>Lapisan Isi Galon (bawah ke atas)</strong></p>
      <div class="mtkompak-layers">
        <div class="mtlayer"><span class="mtl-num">1</span><div><strong>Arang Kayu &plusmn;5 cm</strong> &mdash; drainase</div></div>
        <div class="mtlayer"><span class="mtl-num">2</span><div><strong>Campuran Media</strong> &mdash; tanah + sekam (1:1)</div></div>
        <div class="mtlayer"><span class="mtl-num">3</span><div><strong>Tanam bibit</strong> &mdash; isi hingga &frac34; galon</div></div>
      </div>

      <!-- Alternatif -->
      <p class="mtkompak-label mt-3"><i class="bi bi-list-check me-1"></i> <strong>4 Alternatif Campuran Media Tanam</strong></p>
      <ol class="mtkompak-alt">
        <li>Tanah + Pupuk Kandang + Sekam Padi <em>(1:1:1)</em></li>
        <li>Tanah + Pupuk Kandang + Abu Sekam Padi</li>
        <li>Tanah + Pasir + Pupuk Kandang (kotoran ayam matang)</li>
        <li>Tanah + Pupuk Organik + Sekam Padi</li>
      </ol>
      <p class="mtkompak-note"><i class="bi bi-exclamation-triangle-fill me-1"></i>Gunakan pupuk kandang yang sudah matang agar tidak merusak tanaman.</p>
    </div>
  </div>
</div>
<?php endif; ?>
