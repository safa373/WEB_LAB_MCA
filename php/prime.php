
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Checker</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter a Number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number = intval($_POST['number']);
        
        function isPrime($num) {
            if ($num <= 1) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if (isPrime($number)) {
            echo "<p>$number is a Prime Number.</p>";
        } else {
            echo "<p>$number is NOT a Prime Number.</p>";
        }
    }
    ?>
</body>
</html>
