<?php
if (isset($_GET['id'])) {
    $blog_id = intval($_GET['id']);

    // Fetch blog details based on the id
    $query = "SELECT * FROM blog_detail_form WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $blog_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $blog = $result->fetch_assoc();

    if ($blog) {
        // Display blog details in your HTML template (already provided in your question)
        include 'sub-blog.php';  // Include the template you provided
    } else {
        echo "Blog not found.";
    }
} else {
    echo "Invalid blog ID.";
}
?>
