<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the comment ID from the request body
    $data = json_decode(file_get_contents("php://input"), true);
    $commentId = $data['id'];

    // Database connection
    include 'includes/config.php';

    // Prepare the SQL statement to delete the comment
    $stmt = $con->prepare("DELETE FROM comments WHERE id = ?");
    $stmt->bind_param("i", $commentId);

    if ($stmt->execute()) {
        // Success: return a success response
        echo json_encode(['success' => true]);
    } else {
        // Error: return an error response
        echo json_encode(['success' => false, 'message' => 'Failed to delete comment']);
    }

    // Close the statement and connection
    $stmt->close();
    $con->close();
}
?>
