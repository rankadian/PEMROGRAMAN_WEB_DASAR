<?php
function tampilkanMenuBertingkat($menu)
{
    echo "<ul>";
    foreach ($menu as $item) {
        echo "<li>" . $item['nama'] . "</li>";
        if (isset($item['sub'])) {
            tampilkanMenuBertingkat($item['sub']);
        }
    }
    echo "</ul>";
}

$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "sub" => [
            [
                "nama" => "Wisata",
                "sub" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner",
                "sub" => [
                    [
                        "nama" => "Hiburan"
                    ]
                ]
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

tampilkanMenuBertingkat($menu);
