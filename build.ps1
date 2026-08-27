# build.ps1
# Script untuk generate static HTML dari PHP files
# Output ke folder dist/ -> deploy folder ini ke Vercel
#
# Cara pakai: .\build.ps1
# Requirements: PHP CLI tersedia (sudah ada jika pakai XAMPP)

$phpExe  = "C:\xampp\php\php.exe"
$rootDir = $PSScriptRoot
$distDir = Join-Path $rootDir "dist"

# Validasi PHP CLI ada
if (-not (Test-Path $phpExe)) {
    Write-Error "PHP CLI tidak ditemukan di $phpExe. Sesuaikan path jika berbeda."
    exit 1
}

# Bersihkan dan buat folder dist
Write-Host "Membersihkan folder dist..." -ForegroundColor Yellow
if (Test-Path $distDir) { Remove-Item $distDir -Recurse -Force }
New-Item -ItemType Directory -Path $distDir | Out-Null

# Daftar halaman yang akan di-render
$pages = @(
    @{ php = "index.php";       html = "index.html" }
    @{ php = "cabe.php";        html = "cabe.html" }
    @{ php = "tomat.php";       html = "tomat.html" }
    @{ php = "sereh-merah.php"; html = "sereh-merah.html" }
    @{ php = "sereh-hijau.php"; html = "sereh-hijau.html" }
    @{ php = "jahe.php";        html = "jahe.html" }
)

Write-Host "Merender halaman PHP..." -ForegroundColor Cyan

foreach ($page in $pages) {
    $phpFile  = Join-Path $rootDir $page.php
    $htmlFile = Join-Path $distDir $page.html

    & $phpExe -f $phpFile > $htmlFile 2>&1

    # Fix link: ganti .php -> .html dalam output HTML
    (Get-Content $htmlFile -Raw) `
        -replace 'href="index\.php"',      'href="index.html"' `
        -replace 'href="cabe\.php"',       'href="cabe.html"' `
        -replace 'href="tomat\.php"',      'href="tomat.html"' `
        -replace 'href="sereh-merah\.php"', 'href="sereh-merah.html"' `
        -replace 'href="sereh-hijau\.php"', 'href="sereh-hijau.html"' `
        -replace 'href="jahe\.php"',       'href="jahe.html"' |
    Set-Content $htmlFile -Encoding UTF8

    Write-Host "  [OK] $($page.php) -> dist/$($page.html)" -ForegroundColor Green
}

# Copy static assets
Write-Host "Menyalin assets..." -ForegroundColor Cyan
Copy-Item -Path (Join-Path $rootDir "css")    -Destination (Join-Path $distDir "css")    -Recurse -Force
Copy-Item -Path (Join-Path $rootDir "images") -Destination (Join-Path $distDir "images") -Recurse -Force

Write-Host ""
Write-Host "Build selesai! Folder dist/ siap deploy ke Vercel." -ForegroundColor Green
Write-Host "Cara deploy:" -ForegroundColor White
Write-Host "  1. Install Vercel CLI: npm i -g vercel" -ForegroundColor Gray
Write-Host "  2. Masuk ke folder dist: cd dist" -ForegroundColor Gray
Write-Host "  3. Deploy: vercel" -ForegroundColor Gray
