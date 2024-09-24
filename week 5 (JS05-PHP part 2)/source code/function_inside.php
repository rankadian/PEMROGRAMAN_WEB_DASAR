<?php
function hitungUmur($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

function sapaan($nama, $salam = "Assalamu'alaikum")
{
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    // Menggunakan fungsi lain
    echo "Saya berusia " . hitungUmur(2004, 2024) . " tahun<br>";
}

// Memanggil fungsi sapaan
sapaan("Evan");
