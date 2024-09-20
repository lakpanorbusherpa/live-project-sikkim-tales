<?php
// Connect to the database
include('db_connection.php'); // Replace with your actual database connection file

if (isset($_GET['Category'])) {
    $selectedCategory = $_GET['Category'];

    // Prepare the SQL query to fetch data for the selected category
    $stmt = $conn->prepare("SELECT * FROM your_table_name WHERE Category = ?");
    $stmt->bind_param('s', $selectedCategory);
    $stmt->execute();
    $result = $stmt->get_result();

    // Display the data related to the selected category
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h1>" . $row['HeaderTitle'] . "</h1>";
            echo "<p>" . $row['Description'] . "</p>";
            // Add other fields as necessary
        }
    } else {
        echo "No records found for this category.";
    }
} else {
    echo "No category selected.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotoBikes Rental</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/phone.css">
    <link rel="stylesheet" href="services.css">
    <link rel="stylesheet" href="blog.css">
</head>
<body>
<!-------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">



<?php include('includes/header.php'); ?>
<div>
    <img  class="heading-image-blog" src="3d imagemount flag.JPG">
</div>


    <!----------- the  flex direction  and  seperation   of   blog   divigion   and  form  and   recent   datas    in   left  and  right----->
<div  style="
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;

">
            
        <div class="container container-flex">
            
        <div class="blog-category-container">
    <?php
        include('config.php');
        $sql = "SELECT * FROM blog_detail_form ORDER BY id DESC";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {
    ?>

                <div class="category-item" style="width: 488px; box-shadow: 15px 21px 20px 6px rgb(47 46 46 / 30%); background: #daeee0fa; height: 440px; position: relative;height:585px">
                    
                    <img style="width: inherit; margin-top: -19px;" src="<?php echo htmlspecialchars($row['image1']); ?>" alt="">  
                    
                    <!-- Add a date in the top of the card -->
                    <div style=" position: absolute; color: #dcdcec; margin-left: 289px; margin-top: -31px; width: 74px; text-align: center;">
                        <h1 class="heading1"> 12<p style="margin-top: 2px;"> DEC</p></h1>
                    </div>

                    <div class="price-container same-container">
                        <div style="display: flex; flex-direction: row;"> 
                            <i class="fa-sharp fa-solid fa-circle-user" style="margin-top: 23px; color: #0f9476; margin-right: 12px;"></i> 
                            <h3 class="price1"> 0 user</h3>
                        </div>

                        <div style="display: flex; margin-left: -53px;"> 
                            <i class="fa-solid fa-comments" style="color: #0f9476; margin-top: 23px; margin-right: 12px;"></i>
                            <h3> 0 comment</h3>
                        </div>
                    </div>

                        <!-- blog-name -->
                    <h3><?php echo htmlspecialchars($row['blogname']); ?> 
                     <!--  fetching  destrict data  from  database -->
                    <?php echo htmlspecialchars($row['district']); ?></h3>
                    <div class="align-text-info"> 
                        Capital of Sikkim, Gangtok is a hill resort and one of the most popular places in north-east India 
                       <p> known for its scenic beauty and striking views of Mount Kanchenjunga, the third highest peak in the world.....
                    </div>
                    <!-- Read more button -->
                      <button type="button" class="book-now blog-button" style="width: 263px;" onclick="window.location.href='sub-blog.php?id=<?php echo $row['id']; ?>';">Read more -------- </button>

                </div>
    <?php 
            } 
        } else {
            echo "No recent posts found.";
        }
    ?>
</div>




        <!------##########################################################################################################---->
        <!-- left section  recent  post  section goes  from  here   -->

            <div class="container1">
        <!-- Search box -->
        <div class="search-box">
            <form>
                <input type="text" placeholder="Search">
                <input type="submit" value="Search">
            </form>
        </div>

        <!-- Recent posts section -->
        <div class="recent-posts" style="margin-top: 60px;">
            <h3 class="section-title">RECENT POSTS</h3>
            <span class="green-line"></span>
            <ul>
                <li><a href="#">Things To See And Do When Visiting Japan</a></li>
                <li><a href="#">A Place Where Start New Life With Adventure Travel</a></li>
                <li><a href="#">Journeys Are Best Measured With Friends</a></li>
                <li><a href="#">Travel The Most Beautiful Places In The World</a></li>
                <li><a href="#">Top 10 Destinations & Adventure Travel Trips</a></li>
            </ul>
        </div>

        <!-- Recent comments section -->
        <div class="recent-comments">
            <h3 class="section-title">RECENT COMMENTS</h3>
            <span class="green-line"></span>
            <ul>
                <li><a href="#">John: This is an amazing article!</a></li>
                <li><a href="#">Jane: Loved the travel guide!</a></li>
                <li><a href="#">Alice: Can't wait to try this...</a></li>
            </ul>
        </div>
    </div>

   
    </div>



            </div>


  
    </head>



    

   



<?php include('includes/footer.php'); ?>
</body>
</html>
