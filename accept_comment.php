<?php
// Database connection
include 'includes/config.php';

// Check if the comment ID is set in the form
if (isset($_POST['comment_id'])) {
    // Get the comment ID
    $comment_id = $_POST['comment_id'];

    // Update the comment in the database
    $sql = "UPDATE comments SET comment_id = 1 WHERE id = ?";
    
    // Prepare the statement
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("i", $comment_id); // Bind the comment ID
        if ($stmt->execute()) {
            // Redirect back to the dashboard or display success message
            header("Location: dashboard.php?success=1");
            exit();
        } else {
            echo "Error updating comment: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }
} else {
    echo "Invalid request.";
}

$con->close();
?>
<?php
if (isset($_GET['success'])) {
    echo "<p>Comment accepted successfully!</p>";
}
?>