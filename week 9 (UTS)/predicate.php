<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Predicate</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 300px;
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

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        input[type="number"]:focus {
            border-color: #4a90e2;
            outline: none;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4a90e2;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #357ab8;
        }

        .result {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
            transition: transform 0.2s;
        }

        .result:hover {
            transform: scale(1.05);
        }

        .grade-A {
            background: #28a745;
            color: white;
        }

        .grade-B {
            background: #17a2b8;
            color: white;
        }

        .grade-C {
            background: #ffc107;
        }

        .grade-D {
            background: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Grade Calculator</h2>
        <form method="POST">
            <div class="form-group">
                <label>Enter Score (0-100):</label>
                <input type="number" name="score" min="0" max="100" required>
            </div>
            <button type="submit" name="calculate">Calculate Grade</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $score = $_POST['score'];

            if ($score >= 90) {
                $grade = 'A';
            } elseif ($score >= 80) {
                $grade = 'B';
            } elseif ($score >= 70) {
                $grade = 'C';
            } else {
                $grade = 'D';
            }

            echo "<div class='result grade-$grade'>";
            echo "Score: $score<br>";
            echo "Grade: $grade";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>