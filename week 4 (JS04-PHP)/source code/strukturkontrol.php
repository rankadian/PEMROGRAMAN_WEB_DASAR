<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Program</title>
    <style>
        body {
            font-family: Arial, 'Times New Roman', Times, serif;
            line-height: 1.5;
            margin: 20px;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="result">
        <?php
        // 1
        $nilaiNumerik = 92;
        if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
            echo "<p>Nilai huruf: A</p>";
        } elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
            echo "<p>Nilai huruf: B</p>";
        } elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
            echo "<p>Nilai huruf: C</p>";
        } else {
            echo "<p>Nilai huruf: D</p>";
        }

        // 2
        $jarakSaatIni = 0;
        $jarakTarget = 500;
        $peningkatanHarian = 30;
        $hari = 0;
        while ($jarakSaatIni < $jarakTarget) {
            $jarakSaatIni += $peningkatanHarian;
            $hari++;
        }
        echo "<p>Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.</p>";

        // 3
        $jumlahLahan = 10;
        $tanamanPerLahan = 5;
        $buahPerTanaman = 10;
        $jumlahBuah = 0;
        for ($i = 1; $i <= $jumlahLahan; $i++) {
            $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
        }
        echo "<p>Jumlah buah yang akan dipanen adalah: $jumlahBuah</p>";

        // 4
        $skorUjian = [85, 92, 78, 96, 88];
        $totalSkor = 0;
        foreach ($skorUjian as $skor) {
            $totalSkor += $skor;
        }
        echo "<p>Total skor ujian adalah: $totalSkor</p>";

        // 5
        $nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

        foreach ($nilaiSiswa as $nilai) {
            if ($nilai < 60) {
                echo "Nilai: $nilai (Tidak lulus) <br>";
                continue;

                echo "Nilai: $nilai (Lulus) <br>";
            }
        }
        ?>
    </div>
</body>

</html>