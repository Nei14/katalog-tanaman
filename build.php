<?php
// build.php - Script PHP untuk mengenerate HTML statis
// Mengatasi masalah encoding (karakter aneh) yang terjadi jika menggunakan PowerShell >
$pages = ['index', 'cabe', 'tomat', 'sereh-merah', 'sereh-hijau', 'jahe'];
$distDir = __DIR__ . '/dist';

if (!is_dir($distDir)) {
    mkdir($distDir, 0777, true);
}

foreach ($pages as $page) {
    // Jalankan output buffering
    ob_start();
    
    // Eksekusi file PHP seakan-akan diakses melalui browser
    // Tapi karena kita meloadnya di CLI, kita harus set variabel global kalau perlu
    $navMode = 'index'; // Default
    if ($page !== 'index') $navMode = 'detail';
    
    include __DIR__ . '/' . $page . '.php';
    
    $content = ob_get_clean();
    
    // Fix link: ubah .php ke .html
    foreach ($pages as $p) {
        $content = str_replace('href="' . $p . '.php"', 'href="' . $p . '.html"', $content);
    }
    
    file_put_contents($distDir . '/' . $page . '.html', $content);
    echo "  [OK] Rendered $page.html\n";
}
