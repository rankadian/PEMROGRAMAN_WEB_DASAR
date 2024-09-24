<?php
// Ubah "saya arek malang" menjadi array dengan perintah explode
$pesan = "saya arek malang";
$pesanPerKata = explode(" ", $pesan);

// Ubah setiap kata dalam array menjadi kapital
$pesanPerKata = array_map(function ($kata) {
    return strtoupper($kata);
}, $pesanPerKata);

// Gabungkan kembali array menjadi string
$pesan = implode(" ", $pesanPerKata);

echo $pesan . "<br>";
