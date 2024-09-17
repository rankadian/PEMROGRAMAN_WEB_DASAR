<?php
$hargaProduk = 120000;
$diskon = 0.20;

if ($hargaProduk > 100000) {
    $diskon = 0.20 * $hargaProduk;
}

$hargaFinal = $hargaProduk - $diskon;

echo "Harga yang harus dibayar setelah diskon: Rp $hargaFinal";
