<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f4f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4a90e2;
        }

        .student {
            margin-bottom: 20px;
            padding: 15px;
            background: #e9f5ff;
            border-left: 5px solid #4a90e2;
            border-radius: 4px;
            transition: background 0.3s;
        }

        .student:hover {
            background: #d1e9ff;
        }

        strong {
            font-size: 1.2em;
            color: #333;
        }

        .grades {
            font-size: 0.9em;
            color: #555;
        }

        .average {
            font-weight: bold;
            color: #4caf50;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Student Grade Averages</h2>
        <?php
        $students = array(
            "Evan" => array(75, 80, 85),
            "Devara" => array(90, 85, 88),
            "Arden" => array(70, 75, 80),
            "Zaki" => array(95, 92, 88)
        );

        foreach ($students as $name => $grades) {
            // Menghitung total dan jumlah untuk rata-rata
            $total = 0;
            $count = 0;

            // Menghitung total nilai
            for ($i = 0; $i < count($grades); $i++) {
                $total += $grades[$i];
                $count++;
            }

            // Menghitung rata-rata
            $average = $total / $count;

            // Menampilkan hasil
            echo "<div class='student'>";
            echo "<strong>$name</strong><br>";
            echo "Grades: ";

            // Menampilkan nilai satu per satu
            for ($j = 0; $j < count($grades); $j++) {
                echo $grades[$j];
                if ($j < count($grades) - 1) {
                    echo ", "; // Menambahkan koma antara nilai
                }
            }

            echo "<br>Average: " . number_format($average, 2);
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>