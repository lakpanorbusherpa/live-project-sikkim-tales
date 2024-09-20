<?php
// Database connection
include 'includes/config.php';

// Fetch all comments from the database
$sql = "SELECT * FROM comments ORDER BY id ASC";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $sl_no = 1; // Serial number for the table
    while ($comment = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$sl_no}</td>"; // Serial number
        echo "<td>" . htmlspecialchars($comment['name']) . "</td>"; // User ID or Name
        echo "<td>" . htmlspecialchars($comment['email']) . "</td>"; // Email
        echo "<td>" . htmlspecialchars($comment['comment']) . "</td>"; // Comment

        // Accept form
        echo "<td>
                <form action='accept_comment.php' method='POST'>
                    <input type='hidden' name='comment_id' value='{$comment['id']}'>
                    <button type='submit' class='accept-btn'>Accept</button>
                </form>
              </td>";

        // Delete button (optional, for JS handling)
        echo "<td><form action='delete_comment.php' method='POST'>
                    <button class='delete-btn'>Delete</button>
                </form>
                
            </td>";
                   
        echo "</tr>";

        $sl_no++; // Increment serial number
    }
} else {
    echo "<tr><td colspan='6'>No comments found.</td></tr>";
}
?>
