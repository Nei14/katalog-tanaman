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

Write-Host "Merender halaman PHP menggunakan build.php..." -ForegroundColor Cyan
& $phpExe build.php


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
