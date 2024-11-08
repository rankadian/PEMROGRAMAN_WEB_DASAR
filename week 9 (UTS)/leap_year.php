<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
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
            width: 93%;
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
            background: #e9ecef;
            border-radius: 4px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Leap Year Checker</h2>
        <form method="POST">
            <div class="form-group">
                <label>Enter Year:</label>
                <input type="number" name="year" required>
            </div>
            <button type="submit" name="check">Check Year</button>
        </form>

        <?php
        if (isset($_POST['check'])) {
            $year = $_POST['year'];
            $isLeapYear = ((($year % 4 == 0) && ($year % 100 != 0)) || ($year % 400 == 0));

            echo "<div class='result'>";
            if ($isLeapYear) {
                echo "$year is a leap year!";
            } else {
                echo "$year is not a leap year.";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>