<?php
        function fibonacciSeries($n) {
                $num1 = 0;
                $num2 = 1;
                echo "Fibonacci Series up to $n terms: <br><br>";
                for ($i = 0; $i < $n; $i++) {
                        echo $num1 . " ";
                        $num3 = $num1 + $num2;
                        $num1 = $num2;
                        $num2 = $num3;
                }
        }
        fibonacciSeries(15);
?>




//from user


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series Generator</title>
</head>
<body>
    <h2>Fibonacci Series Generator</h2>
    <form method="POST">
        <label for="terms">Enter the number of terms:</label>
        <input type="number" id="terms" name="terms" min="1" required>
        <button type="submit">Generate</button>
    </form>

    <?php
    function fibonacciSeries($n) {
        $num1 = 0;
        $num2 = 1;
        $series = ""; // Initialize an empty string to store the series
        for ($i = 0; $i < $n; $i++) {
            $series .= $num1 . " ";
            $num3 = $num1 + $num2;
            $num1 = $num2;
            $num2 = $num3;
        }
        return $series;
    }

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $terms = intval($_POST['terms']); // Get the input value from the form
        if ($terms > 0) {
            echo "<h3>Fibonacci Series</h3>";
            echo "<p>" . fibonacciSeries($terms) . "</p>";
        } else {
            echo "<p>Please enter a positive integer.</p>";
        }
    }
    ?>
</body>
</html>