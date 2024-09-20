<?php
// Check if form is submitted
if (isset($_POST['submit'])) {

    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "root@123";
    $dbname = "adminregistration";

    // Create connection to MySQL database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters for SQL INSERT statement
    $stmt = $conn->prepare("INSERT INTO comments (name, email, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $comment);

    // Set parameters from the form input and execute the statement
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Execute the statement and check if insertion was successful
    if ($stmt->execute()) {
        echo "Comment posted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
