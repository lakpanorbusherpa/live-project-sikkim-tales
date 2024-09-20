<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "root@123";
$dbname = "adminregistration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the upload directory
    $uploadDir = "uploads/blogs-images/";

    // Get form data and escape special characters
    $header_title = mysqli_real_escape_string($conn, $_POST["header-title"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $category = mysqli_real_escape_string($conn, $_POST["category"]);
    $sub_heading1_title = mysqli_real_escape_string($conn, $_POST["sub-heading1-title"]);
    $sub_heading1_description = mysqli_real_escape_string($conn, $_POST["sub-heading1-description"]);
    $sub_heading2_title = mysqli_real_escape_string($conn, $_POST["sub-heading2-title"]);
    $sub_heading2_description = mysqli_real_escape_string($conn, $_POST["sub-heading2-description"]);
    $blog_name = mysqli_real_escape_string($conn, $_POST["blog-name"]);
    $blog_price = mysqli_real_escape_string($conn, $_POST["booking-price"]);
    $blog_date = mysqli_real_escape_string($conn, $_POST["blog_date"]);
    $District = mysqli_real_escape_string($conn, $_POST["District"]);

    // Function to upload an image and return the file path
    function uploadImage($imageKey, $uploadDir) {
        if (isset($_FILES[$imageKey]) && $_FILES[$imageKey]["error"] == 0) {
            $imagePath = $uploadDir . basename($_FILES[$imageKey]["name"]);
            move_uploaded_file($_FILES[$imageKey]["tmp_name"], $imagePath);
            return $imagePath;
        }
        return null;
    }

    // Upload images
    $image1 = uploadImage("image1", $uploadDir);
    $image2 = uploadImage("image2", $uploadDir);
    $image3 = uploadImage("image3", $uploadDir);
    $image4 = uploadImage("image4", $uploadDir);

    // Prepare and bind SQL statement to prevent SQL injection
    $stmt = $conn->prepare(
    
        "INSERT INTO blog_detail_form 
            ( HeaderTitle, Description, image1, image2, image3, image4, Category, SubHeading1, SubHeading1Description, SubHeading2, SubHeading2Description, blogname, blogprice , blogdate ,district) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)"

    );
    $stmt->bind_param(
        "sssssssssssssss", 
        $header_title, $description, $image1, $image2, $image3, $image4, 
        $category, $sub_heading1_title, $sub_heading1_description, 
        $sub_heading2_title, $sub_heading2_description, $blog_name,  $blog_price , $blog_date , $District
    );

    // Execute the statement and check for success
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
