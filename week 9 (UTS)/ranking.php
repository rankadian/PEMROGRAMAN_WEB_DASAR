<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Score Ranking</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
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

        .score-item {
            padding: 10px;
            margin: 5px 0;
            border-radius: 4px;
            transition: background 0.3s, transform 0.2s;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .score-item:hover {
            transform: scale(1.02);
        }

        .highest {
            background: #d4edda;
            font-weight: bold;
        }

        .lowest {
            background: #f8d7da;
            font-weight: bold;
        }

        .score {
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Score Rankings</h2>
        <?php
        $scores = array(
            "Evan" => 85,
            "Devara" => 92,
            "Arden" => 78,
            "Zaki" => 95
        );

        $highest = max($scores);
        $lowest = min($scores);

        arsort($scores);

        foreach ($scores as $name => $score) {
            $class = '';
            if ($score === $highest) $class = 'highest';
            if ($score === $lowest) $class = 'lowest';

            echo "<div class='score-item $class'>";
            echo "<span>$name</span><span class='score'>$score</span>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>