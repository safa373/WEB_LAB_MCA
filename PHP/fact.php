<?php
function factorial($n) {
  if ($n < 0) {
    return "Factorial is not defined for negative numbers.";
  } elseif ($n == 0) {
    return 1;
  } else {
    return $n * factorial($n - 1);
  }
}

$number = 5; 
$result = factorial($number);
echo "The factorial of $number is $result";
?>







//from user


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form method="POST">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    // PHP code to handle form submission and calculate factorial
    function factorial($n) {
        if ($n < 0) {
            return "Factorial is not defined for negative numbers.";
        } elseif ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = intval($_POST['number']); // Get the number from the form
        $result = factorial($number);

        echo "<h3>Result</h3>";
        echo "<p>The factorial of <strong>$number</strong> is <strong>$result</strong>.</p>";
    }
    ?>
</body>
</html>