<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);

array_splice($nilaiSiswa, 0, 2);
array_splice($nilaiSiswa, -2);

$totalNilai = array_sum($nilaiSiswa);

echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah adalah: $totalNilai";
