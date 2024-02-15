<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h2>Enter a number to generate its multiplication table:</h2>
    <form method="post">
        <input type="number" name="number" required>
        <input type="submit" value="Generate Table">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        echo "<h2>Multiplication Table for $number</h2>";
        echo "<table>";
        echo "</tr>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            $a=$i*$number;
            echo "<th>$a</th>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>

</body>
</html>
