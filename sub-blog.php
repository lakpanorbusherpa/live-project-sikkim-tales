<?php
// Database connection
include 'includes/config.php';

$blog_id = $_GET['id']; // Get the blog ID from URL

// Prepare the SQL statement
$sql = $con->prepare("SELECT * FROM blog_detail_form WHERE id = ?");
$sql->bind_param("i", $blog_id); // "i" stands for integer (the data type of blog_id)
$sql->execute();
$result = $sql->get_result();
$blog = $result->fetch_assoc();

if ($blog) {
    // Fetch blog details successfully
} else {
    $error = "Blog not found!";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanchenjunga Base Camp Trek</title>
    <link rel="stylesheet" href="blog.css">
</head>
<body>
    <div class="container">
            <!--  image   at the  top section  -->

            
            <div class="post-container">
        <?php if (isset($blog)) { ?>
            <div class="illustration">
                <img src="<?php echo htmlspecialchars($blog['image1']); ?>" alt="snow mountain">
                <div class="info">
                    <h1><?php echo htmlspecialchars($blog['HeaderTitle']); ?></h1>
                    <p><?php echo htmlspecialchars($blog['Description']); ?></p>
                    <p class="by">BY RETA TORPHY</p>
                </div>
            </div>

            <div class="gallery">
                <img src="<?php echo htmlspecialchars($blog['image2']); ?>" alt="bridge night">
                <img src="<?php echo htmlspecialchars($blog['image3']); ?>" alt="food">
                <img src="<?php echo htmlspecialchars($blog['image4']); ?>" alt="landscape">
            </div>

            <!-- Main Header Section -->
            <section class="main-header">
                <div class="title">
                    <h1>
                        <?php echo htmlspecialchars($blog['blogname']); ?> 
                        <?php echo htmlspecialchars($blog['district']); ?>
                    </h1>
                    <div class="details">
                        <span class="rating">4.3 / 5</span>
                        <span class="reviews">(583 Reviews)</span>
                        <span class="duration">11D/10N</span>
                        <span class="location">Yuksom</span>
                    </div>
                </div>
                <div class="price">
                    <span class="amount">INR <?php echo htmlspecialchars($blog['blogprice']); ?></span> 
                    <span class="per-person">per Adult</span>
                    <span class="offer">10% Off</span>
                </div>
            </section>
             <!--  display  flex  devigion -->
            <div class="flex-the-content">  
                <div style="margin-right: 31px; max-width: 900px;">

                            <div class="tags1">
                                <h3>TAGS</h3>
                                <div class="tag-list">
                                <form action="category.php" method="GET">
                                    <button  class="tag" type="submit" name="category" value="Adventure">Adventure</button>
                                    <button  class="tag" type="submit" name="category" value="Camping">Camping</button>
                                    <button  class="tag" type="submit" name="category" value="Natural">Natural</button>
                                    <button  class="tag" type="submit" name="category" value="Policy">Policy</button>
                                    <button  class="tag" type="submit" name="category" value="Solar Energy">Solar Energy</button>
                                    <button  class="tag" type="submit" name="category" value="Travels">Travels</button>
                                </form>

                                </div>
                            </div>

                            <!-- Additional content sections -->
                            <!-- Highlights and Overview sections -->
                            <section class="highlights">
                                <h2><?php echo htmlspecialchars($blog['blogname']); ?> <?php echo htmlspecialchars($blog['SubHeading1']); ?> Highlights</h2>
                                <ul>
                                    <li><?php echo htmlspecialchars($blog['SubHeading1Description']); ?></li>
                                </ul>
                            </section>

                            <section class="overview">
                                <h2><?php echo htmlspecialchars($blog['blogname']); ?> <?php echo htmlspecialchars($blog['SubHeading1']); ?> Overview</h2>
                                <p><?php echo htmlspecialchars($blog['SubHeading2Description']); ?></p>
                            </section>


                            <section class="comments-section">
                              <div class="comment" style="
                                align-items: end;
                                text-align: left;
                            ">
                                <div class="user-icon">
                                  <i class="fa-solid fa-user user-icon-placeholder"></i>
                                </div>
                                <div style="
                                height: 100px;
                            ">
                                
                                  <div style="
                                margin-left: 81px;
                                font-size: 35px;
                            ">
                                  <h2 style="color: #96c4ec;"> Recent comment</h2>
                                  </div>
                                </div>
                              </div>

                              <div class="comment">
                                <div class="user-icon">
                                  <img src="user logo.png" alt="User 2" class="user-img">
                                </div>
                                <div class="comment-content">
                                  <div class="comment-header">
                                    <strong>You</strong> <span>3 weeks, 1 day ago</span> | <a href="#">Delete</a>
                                  </div>
                                  <div class="comment-text">
                                    Glad you like it. I’ll upload another approach later this day. Glad you like it. I’ll upload another approach later this day.
                                  </div>
                                </div>
                              </div>

                              <div class="comment">
                                <div class="user-icon">
                                  <img src="user logo.png" alt="User 1" class="user-img">
                                </div>
                                <div class="comment-content">
                                  <div class="comment-header">
                                    <strong>Ricky Gervais</strong> <span>3 days ago</span>
                                  </div>
                                  <div class="comment-text">
                                    Thanks, looking forward to it!
                                  </div>
                                </div>
                              </div>

                              <div class="comment">
                                <div class="user-icon">
                                  <img src="user logo.png" alt="User 3" class="user-img">
                                </div>
                                <div class="comment-content">
                                  <div class="comment-header">
                                    <strong>Ricky Gervais</strong> <span>20 mins ago</span>
                                  </div>
                                  <div class="comment-text">
                                    Liked it a lot!
                                  </div>
                                </div>
                              </div>
                            </section>


                            <!--  add a  comment    form  section form   for   user   to comment  at the   end  -->
                            <section>
                                    <div class="div-form ">
                                        <div class="container-form-comment">
                                            <h2>Add a Comment</h2>
                                                <div class="line"></div>
                                                    <p>Your email address will not be published.</p>
                                        
                                                   



                                                    <form action="comment-db-connection1.php" method="POST">
                                                            <label for="name">Name:</label><br>
                                                            <input type="text" id="name" name="name" required><br><br>

                                                            <label for="email">Email:</label><br>
                                                            <input type="email" id="email" name="email" required><br><br>
                                                            
                                                            <div class="blog-checkbox">
                                                            <input type="checkbox" id="save-info" name="save-info">
                                                            <label for="save-info">Save my name, email, and website in this browser for the next time I comment.</label>
                                                            </div>


                                                            <label for="comment">Comment:</label><br>
                                                            <textarea class="textarea commentboxx"  id="comment" name="comment" rows="4" required></textarea><br><br>

                                                            <button class="blog-botton" type="submit" name="submit">Post Comment</button>
                                                        </form>






                                        </div>
                                    </div>
                            </section>
                </div>  
                  <!--right side  section  form -  -->
                <div class="right-form-div-space-gap">
                        <div><aside class="contact-form">
                                <h3> OkhreyBase Camp Trek , 
                                    <!--  fetching  destrict data  from  database -->
                                    West Sikkim: Get 10% off!</h3>


                                <form action="submit-form.php" method="post">
                                    <input type="text" placeholder="Your Name" required="">
                                    <input type="email" placeholder="Your Email" required="">
                                    <input type="tel" placeholder="+91 Phone" required="">
                                    <input type="date" placeholder="Choose Date of Travel" required="">
                                    <input type="number" placeholder="Traveller Count" required="">
                                    <textarea placeholder="Message" required=""></textarea>
                                    <p class="privacy-notice">
                                        <span>✔ We assure the privacy of your contact data.</span><br>
                                        <span>✔ This data will only be used by our team to contact you.</span>
                                    </p>
                                    <button type="submit">Send Enquiry</button>
                                </form>
                            </aside>
                        </div>

                        <div class="tags1 width-of-right-category">
                                <h3>TAGS</h3>
                                <div class="tag-list">
                                    <button class="tag"  onclick="window.location.href='category.php?id= ADVENTURE';">ADVENTURE</button>
                                   <button class="tag"   onclick="window.location.href='category.php?id= CAMPING ';">CAMPING</button>
                                   <button class="tag"  onclick="window.location.href='category.php?id= CAMPING ';">NATURAL</button>
                                   <button class="tag"  onclick="window.location.href='category.php?id= POLICY';">POLICY</button>
                                   <button class="tag"  onclick="window.location.href='category.php?id= SOLAR ENERGY';">SOLAR ENERGY</button>
                                   <button class="tag"  onclick="window.location.href='category.php?id= TRAVELS';">TRAVELS</button>
                                </div>
                        </div>

                        <!-- comment setion -->
                        
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
  }

  .comments-section {
    width: 96%;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    margin-right: 134px;
  }

  .comment {
    display: flex;
    margin-bottom: 25px;
    padding: 15px;
    background-color: #fafafa;
    border-radius: 10px;
    transition: transform 0.2s ease-in-out;
  }

  .comment:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
  }

  .user-icon {
    margin-right: 15px;
  }

  .user-icon-placeholder {
    font-size: 50px;
    color: #888;
  }

  .user-img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 2px solid #007bff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }

  .comment-content {
    flex: 1;
    border-left: 4px solid #007bff;
    padding-left: 15px;
  }

  .comment-header {
    font-size: 15px;
    color: #333;
  }

  .comment-header strong {
    font-weight: bold;
    font-size: 18px;
    color: #333;
  }

  .comment-header span {
    color: #777;
    font-size: 14px;
    margin-left: 5px;
  }

  .comment-header a {
    color: #007bff;
    font-size: 14px;
    text-decoration: none;
    font-weight: bold;
  }

  .comment-header a:hover {
    text-decoration: underline;
  }

  .comment-text {
    margin-top: 5px;
    font-size: 16px;
    color: #555;
    line-height: 1.6;
  }

  @media (max-width: 768px) {
    .comment {
      flex-direction: column;
    }

    .user-icon {
      margin-bottom: 10px;
    }

    .comment-content {
      padding-left: 0;
      border-left: none;
    }
  }
</style>

                </div>

            </div>  <!-- closure  of the ( flex-the-content )Divigion ---->

            <!-- Comment form and other sections -->
        <?php } else { ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php } ?>
    </div>
</body>
</html>