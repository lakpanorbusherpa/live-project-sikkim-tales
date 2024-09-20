

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }

        /* Sidebar navigation styles */
        .sidebar {
            width: 250px;
            background-color: #f7f6d7;
            height: 100vh;
            padding-top: 20px;
            padding-left: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar img {
            width: 100px;
            margin-bottom: 20px;
        }

        .sidebar h2 {
            margin: 0 0 30px;
        }

        .nav-links {
            list-style-type: none;
            padding: 0;
        }

        .nav-links li {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .nav-links li i {
            margin-right: 10px;
            font-size: 20px;
        }

        .nav-links a {
            text-decoration: none;
            color: #000;
            font-size: 18px;
        }

        .nav-links a:hover {
            color: #007bff;
        }

        /* Main content styles */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .comment-table {
            border-collapse: collapse;
            width: 100%;
        }

        .comment-table th, .comment-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .comment-table th {
            background-color: #f0f0f0;
        }

        .delete-btn {
            background-color: #ff0000;
            color: #fff;
            border: none;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #cc0000;
        }

        .td-sl {
            width: 20px;
        }

        .td-email {
            width: 110px;
        }

        .td-ph-no {
            width: 127px;
        }

        .td-delete {
            width: 68px;
        }

        .accept-btn {
            background-color: #0dc12cfa;
            color: #fff;
            border: none;
            padding: 5px 10px;
            font-size: 14px;
            cursor: pointer;
        }

        .accept-btn:hover {
            background-color: #f47521;
        }

        .td-accept {
            width: 20px;
        }

        th {
            background-color: #ff8c3b;
        }

        tr {
            background-color: #00ecec;
        }

        /* Search bar and heading container */
        .search-heading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .heading-comment-verification {
            text-align: left;
            margin: 0;
            font-size: 24px;
        }

        .search-bar {
            position: relative;
        }

        .search-bar input[type="text"] {
            padding: 10px;
    font-size: 13px;
    border: 1px solid #ccc;
    border-radius: 25px;
    padding-left: 40px;
    width: 366px;
    margin-left: 68%;
    height: 30px;
    margin-bottom: 47px;
        }

        .search-bar i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #aaa;
        }
        th {
    background-color: #ff8c3b;
        }
    </style>
</head>
<body>
    <!-- Sidebar navigation -->
    <div class="sidebar">
        <img src="logo.png" alt="Logo">
        <h2>Admin Dashboard</h2>
        <ul class="nav-links">
            <li><i class="fas fa-home"></i><a href="#">Dashboard</a></li>
            <li><i class="fas fa-edit"></i><a href="#">Package Comment</a></li>
            <li><i class="fas fa-cogs"></i><a href="#">Blog Comment</a></li>
            <li><i class="fas fa-flag"></i><a href="#" style="color: #007bff;">All Comments</a></li>
        </ul>
        <h3>Reports</h3>
    </div>

    <!-- Main content -->
    <div class="main-content">
    <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
        <div class="search-heading-container">
            <h1 class="heading-comment-verification">Verify Comment List That will be displayed in Comment Box</h1>
            
        </div>
        
        <table class="comment-table">
        <tr>
                <th class="td-sl">SL No.</th>
                <th class="td-email">User Id</th>
                <th class="td-ph-no">Phone Number</th>
                <th>Comment</th>
                <th class="td-accept">Accept</th>
                <th class="td-delete">Delete</th>
            </tr>
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
                                echo "<td>" . htmlspecialchars($comment['email']) . "</td>"; // Phone Number
                                echo "<td>" . htmlspecialchars($comment['comment']) . "</td>"; // Comment
                                echo "<td>
                                                <form action='accept_comment.php' method='POST'>
                                                    <input type='hidden' name='comment_id' value='{$comment['id']}'>
                                                    <button type='submit' class='accept-btn'>Accept</button>
                                                </form>
                                            </td>"; // Accept button
                                echo "<td><button class='delete-btn' data-id='{$comment['id']}'>Delete</button></td>"; // Delete button with data-id
                                echo "</tr>";
                                $sl_no++; // Increment serial number
                            }
                        } else {
                            echo "<tr><td colspan='6'>No comments found.</td></tr>";
                        }
                        ?>

        </table>
    </div>

    <!-- JavaScript to handle deletion of rows -->
    
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
   

    <!-- Include FontAwesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>