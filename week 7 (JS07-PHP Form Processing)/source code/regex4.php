<?php
// $pattern = '/go*d/'; // cocokkan "god", "good", "gooood", dll.
// $text = 'god is good.';
// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0];
// } else {
//     echo "Tidak ada ada yang cocok";
// }

//Question No 5.5
// $pattern = '/go?d/';
// $text = 'god is good.';
// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan: " . $matches[0];
// } else {
//     echo "Tidak ada ada yang cocok";
// }

//Question No 5.5
$pattern = '/go{2,3}d/';
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0];
} else {
    echo "Tidak ada ada yang cocok";
}
