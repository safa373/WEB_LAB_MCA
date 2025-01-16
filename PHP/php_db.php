<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully<br>";

    // database code
    $conn->close();
}
?>


//create database
$sql = "CREATE TABLE students (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table students created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }


//insert data
echo "Connected successfully<br>";

    // SQL query to insert data into the 'students' table
    $sql = "INSERT INTO students (firstname, lastname, email)
    VALUES ('John', 'Doe', 'johndoe@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }