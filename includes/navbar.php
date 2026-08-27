<?php
/**
 * Navbar komponen bersama
 * $navMode = 'index'  → tampilkan link menu
 * $navMode = 'detail' → tampilkan tombol kembali
 */
$navMode = $navMode ?? 'index';
?>
<nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo-kkm.jpg" alt="Logo KKM 47" class="brand-logo" />
      <div>
        KKM 47 Mekarwangi
        <span class="sub">Universitas Muhammadiyah Cirebon</span>
      </div>
    </a>

    <?php if ($navMode === 'detail'): ?>
      <a href="index.php" class="btn-back ms-auto">
        <i class="bi bi-arrow-left-circle"></i> Kembali ke Katalog
      </a>
    <?php else: ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navMenu" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navMenu">
        <ul class="navbar-nav ms-auto gap-1">
          <li class="nav-item">
            <a class="nav-link" href="#katalog"><i class="bi bi-grid me-1"></i>Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#panduan"><i class="bi bi-info-circle me-1"></i>Panduan</a>
          </li>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</nav>
