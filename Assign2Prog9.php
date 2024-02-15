<?php

function convertNumberToWords($number) {
    $words = array(
        '0' => 'zero',
        '1' => 'one',
        '2' => 'two',
        '3' => 'three',
        '4' => 'four',
        '5' => 'five',
        '6' => 'six',
        '7' => 'seven',
        '8' => 'eight',
        '9' => 'nine',
        '10' => 'ten',
        '11' => 'eleven',
        '12' => 'twelve',
        '13' => 'thirteen',
        '14' => 'fourteen',
        '15' => 'fifteen',
        '16' => 'sixteen',
        '17' => 'seventeen',
        '18' => 'eighteen',
        '19' => 'nineteen',
        '20' => 'twenty',
        '30' => 'thirty',
        '40' => 'forty',
        '50' => 'fifty',
        '60' => 'sixty',
        '70' => 'seventy',
        '80' => 'eighty',
        '90' => 'ninety',
        '100' => 'hundred',
        '1000' => 'thousand',
        '1000000' => 'million',
        '1000000000' => 'billion',
        '1000000000000' => 'trillion'
    );

    if ($number < 21) {
        return $words[$number];
    }

    foreach (array(1000000000000, 1000000000, 1000000, 1000, 100) as $unit) {
        if ($number >= $unit) {
            $base = floor($number / $unit);
            $remainder = $number % $unit;
            if ($remainder > 0) {
                return convertNumberToWords($base) . ' ' . $words[$unit] . ' ' . convertNumberToWords($remainder);
            } else {
                return convertNumberToWords($base) . ' ' . $words[$unit];
            }
        }
    }

    $ten = floor($number / 10) * 10;
    $unit = $number % 10;
    return $words[$ten] . ' ' . $words[$unit];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number to Words Converter</title>
</head>
<body>
    <h2>Enter a number to convert into words:</h2>
    <form method="post">
        <input type="number" name="number" required>
        <input type="submit" value="Convert">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        echo "<h2>Result:</h2>";
        echo "<p>" . convertNumberToWords($number) . "</p>";
    }
    ?>

</body>
</html>
