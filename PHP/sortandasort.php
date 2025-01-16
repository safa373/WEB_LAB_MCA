<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Student Names</h1>
    <?php
            $students = ["Alice", "Bob", "Charlie", "David", "Eve"];

            echo "<h2>Original Array</h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";

            asort($students);
            echo "<h2>Array Sorted with asort(): </h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";

            arsort($students);
            echo "<h2>Array Sorted with arsort(): </h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";
    ?>
</body>
</html>






//from user




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Names</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Student Names</h1>

    <!-- Form to input student names -->
    <form method="POST">
        <label for="names">Enter student names (separate with commas):</label><br>
        <input type="text" id="names" name="names" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the names entered by the user
            $namesInput = $_POST['names'];
            
            // Convert the comma-separated names into an array
            $students = explode(',', $namesInput);
            
            // Trim any leading/trailing whitespace from each name
            $students = array_map('trim', $students);

            // Display the original array
            echo "<h2>Original Array</h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";

            // Sort the array in ascending order
            asort($students);
            echo "<h2>Array Sorted with asort(): </h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";

            // Sort the array in descending order
            arsort($students);
            echo "<h2>Array Sorted with arsort(): </h2>";
            echo "<pre>";
            print_r($students);
            echo "</pre>";
        }
    ?>

</body>
</html>