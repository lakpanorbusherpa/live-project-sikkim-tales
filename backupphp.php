<html>
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
        echo "<td>
                <form action='accept_comment.php' method='POST'>
                    <input type='hidden' name='comment_id' value='{$comment['id']}'>
                    <button type='submit' class='accept-btn'>Accept</button>
                </form>
              </td>"; // Accept button
        echo "<td><button class='delete-btn' data-id='{$comment['id']}'>Delete</button></td>"; // Delete button with comment ID
        echo "</tr>";
        $sl_no++; // Increment serial number
    }
} else {
    echo "<tr><td colspan='6'>No comments found.</td></tr>";
}



//java  scrit


?>
<script>
    const deleteBtns = document.querySelectorAll('.delete-btn');
    deleteBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const commentId = btn.getAttribute('data-id'); // Get the comment ID from data-id attribute
            const row = btn.parentNode.parentNode; // Get the parent row element

            // Send AJAX request to delete the comment
            if (confirm("Are you sure you want to delete this comment?")) { // Optional confirmation
                fetch('delete_comment.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: commentId }) // Send the comment ID to the server
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        row.remove(); // Remove the row from the table if deletion is successful
                    } else {
                        alert('Error deleting comment');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    });
</script>
</html>
