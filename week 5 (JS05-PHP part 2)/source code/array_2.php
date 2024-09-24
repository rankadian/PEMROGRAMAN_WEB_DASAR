<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        th {
            width: 20%;
            margin: 20px auto;
        }
    </style>
    <title></title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan'
        ];

        echo "<tr>";
        echo "<td>{$Dosen['nama']}</td>";
        echo "<td>{$Dosen['domisili']}</td>";
        echo "<td>{$Dosen['jenis_kelamin']}</td>";
        echo "</tr>";
        ?>
    </table>
</body>

</html>