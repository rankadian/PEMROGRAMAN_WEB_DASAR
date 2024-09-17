<?php
// 1
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

// 2
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

// 3
$hasilAnd = $a && $b;
$hasilor = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

// 4
$a = 10;
$a += $b;
$hasilTambah = $a;
$a -= $b;
$hasilKurang = $a;
$a *= $b;
$hasilKali = $a;
$a /= $b;
$hasilBagi = $a;
$a %= $b;
$hasilModulus = $a;

// 5
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perhitungan</title>
    <style>
        body {
            font-family: Arial, 'Times New Roman', Times, serif;
            line-height: 10px;
        }
    </style>
</head>

<body>
    <h1>Hasil Perhitungan</h1>
    <div class="result">
        <!-- 1 -->
        <h3>Operasi Matematika</h3>
        <p>Penjumlahan: <?php echo $hasilTambah; ?></p>
        <p>Pengurangan: <?php echo $hasilKurang; ?></p>
        <p>Perkalian: <?php echo $hasilKali; ?></p>
        <p>Pembagian: <?php echo $hasilBagi; ?></p>
        <p>Sisa Pembagian: <?php echo $sisaBagi; ?></p>
        <p>Pangkat: <?php echo $pangkat; ?></p>

        <!-- 2 -->
        <h3>Perbandingan</h3>
        <p>Sama: <?php echo $hasilSama ? 'True' : 'False'; ?></p>
        <p>Tidak Sama: <?php echo $hasilTidakSama ? 'True' : 'False'; ?></p>
        <p>Lebih Kecil: <?php echo $hasilLebihKecil ? 'True' : 'False'; ?></p>
        <p>Lebih Besar: <?php echo $hasilLebihBesar ? 'True' : 'False'; ?></p>
        <p>Lebih Kecil Sama: <?php echo $hasilLebihKecilSama ? 'True' : 'False'; ?></p>
        <p>Lebih Besar Sama: <?php echo $hasilLebihBesarSama ? 'True' : 'False'; ?></p>

        <!-- 3 -->
        <h3>Operasi Logika</h3>
        <p>AND: <?php echo $hasilAnd ? 'True' : 'False'; ?></p>
        <p>OR: <?php echo $hasilor ? 'True' : 'False'; ?></p>
        <p>NOT A: <?php echo $hasilNotA ? 'True' : 'False'; ?></p>
        <p>NOT B: <?php echo $hasilNotB ? 'True' : 'False'; ?></p>

        <!-- 4 -->
        <h3>Operasi Penugasan</h3>
        <p>Setelah A += B: <?php echo $hasilTambah; ?></p>
        <p>Setelah A -= B: <?php echo $hasilKurang; ?></p>
        <p>Setelah A *= B: <?php echo $hasilKali; ?></p>
        <p>Setelah A /= B: <?php echo $hasilBagi; ?></p>
        <p>Setelah A %= B: <?php echo $hasilModulus; ?></p>

        <!-- 5 -->
        <h3>Perbandingan Identik</h3>
        <p>Identik: <?php echo $hasilIdentik ? 'True' : 'False'; ?></p>
        <p>Tidak Identik: <?php echo $hasilTidakIdentik ? 'True' : 'False'; ?></p>
    </div>
</body>

</html>