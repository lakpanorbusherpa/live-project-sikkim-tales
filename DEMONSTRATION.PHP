<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background: #f7f7f7;
        }
        .container {
            width: 90%;
            max-width: 1261px;
            margin: 0 auto;
            padding: 20px;
        }
        .post-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .illustration {
            display: flex;
            justify-content: space-between;
            align-items: center;
            column-gap: 28px;
        }
        .illustration img {
            width: 54%;
        }
        .illustration .info {
            width: 45%;
        }
        .info h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
            font-weight: 500;
        }
        .info p {
            font-size: 1.1em;
            line-height: 1.5;
            margin-bottom: 1em;
        }
        .info .by {
            font-size: 0.9em;
            color: #999;
        }
        .gallery {
            display: flex;
            gap: 20px;
            max-width: 411px;
        }
        .gallery img {
            width: 100%;
        }
        .header {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 10px 0;
            flex-direction: row;
            gap: 81px;
        }
        .user-icon, .adventure-icon {
            display: flex;
            align-items: center;
        }
        .user-icon i, .adventure-icon i {
            font-size: 20px;
            margin-right: 5px;
            color: #333;
        }
        .user-icon span, .adventure-icon span {
            font-weight: bold;
            color: #333;
        }
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .description {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #555;
            background-color: azure;
        }
        .build-camping {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .content {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .left-column {
            width: 60%;
        }
        .right-column {
            width: 35%;
        }
        .quote {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .text {
            font-size: 2rem;
            line-height: 1.5;
            margin-bottom: 20px;
            color: #555;
        }
        .author {
            font-size: 14px;
            font-style: italic;
            color: #777;
        }
        .tags1 {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .tags h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        .tag-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 10px;
        }
        .tag {
            background-color: #f0f0f0;
            padding: 8px 12px;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }
        .left-righgt-border-color {
            background: #47be8142;
            border-left: 7px solid #51b574e8;
        }
        .blog-content-newstyle {
            margin-left: 25px;
        }
        .div-form {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            max-width: 59%;
            margin-left: 35px;
        }
        .div-form .container {
            max-width: 1272px;
            margin: 50px auto;
            padding: 37px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #beb7b7;
            box-sizing: border-box;
            height: 68px;
            border-radius: 10px;
            background-color: #78ddbe26;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #45a049;
        }
        .line {
            width: 100px;
            height: 5px;
            background-color: #4CAF50;
            margin-bottom: 20px;
        }
        .textarea {
            height: 162px;
        }
        .blog-checkbox {
            display: flex;
        }
        .blog-botton {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width: 164px;
            height: 63px;
        }
        .tags {
            background-color: #e0f2f7;
            padding: 10px;
            margin-bottom: 20px;
            display: flex;
            gap: 54%;
        }
        .tag {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            margin: 0 5px;
            border-radius: 20px;
        }
        .social-icons {
            text-align: right;
            margin-bottom: 20px;
        }
        .social-icon {
            display: inline-block;
            margin: 0 5px;
            border-radius: 50%;
            width: 38px;
            height: 38px;
            background-color: #c5bebe;
            color: white;
            text-align: center;
            line-height: 30px;
            font-size: 1.4rem;
            align-content: center;
        }
        .user-profile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .user-info {
            display: flex;
            align-items: center;
        }
        .user-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #ddd;
            margin-right: 15px;
        }
        .user-name {
            font-size: 1.5rem;
            color: #333;
        }
        .user-description {
            margin-top: 10px;
            color: #555;
        }
        .user-actions {
            display: flex;
            align-items: center;
        }
        .user-action {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 5px 10px;
            margin: 0 5px;
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="post-container">
        <?php
                include('config.php');
                $sql = "SELECT * FROM blog_detail_form where id ='2' ";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
            ?>
                <div class="illustration">
                        <img src="<?php echo htmlspecialchars($row['image1']); ?>" alt="snow mountain">
                        <div class="info">
                            <!-- <h1>The snow capped mountains at a distance welcomes you to Singalila</h1> -->
                            <h1> <?php echo htmlspecialchars($row['HeaderTitle']); ?> </h1>
                            <p>
                                <!-- With snow capped mountains, where glaciers melt and flow. The first rays of the sun makes Mount Kanchenjunga glow. The Nile of mother Sikkim is river Teesta ...
                            -->
                            <?php echo htmlspecialchars($row['Description']); ?>
                            </p>
                            <p class="by">BY RETA TORPHY</p>
                        </div>
                </div>

                    <div class="gallery">
                        <img src="<?php echo htmlspecialchars($row['image2']); ?>" alt="bridge night">
                    
                        <img src="<?php echo htmlspecialchars($row['image3']); ?>" alt="food">
                        <img src="<?php echo htmlspecialchars($row['image4']); ?>" alt="landscape">
                    </div>
        </div>

        <div class="header">
            <div class="user-icon">
                <i class="fas fa-user"></i>
                <span>User</span>
            </div>
            <div class="adventure-icon">
                <i class="fas fa-plane"></i>
                <span>Adventure</span>
            </div>
        </div>
        <div class="title">
            <!-- Things to see and do when visiting Sikkim -->
          <?php echo htmlspecialchars($row['SubHeading1']); ?>
        </div>

        <div class="description">
            <!-- Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi beatae vitae dicta sunt explicabo. -->
            <?php echo htmlspecialchars($row['SubHeading1Description']); ?>

        </div>
        
        <div class="build-camping">
                <!-- Build camping easily. -->
         <?php echo htmlspecialchars($row['SubHeading2']); ?>

        </div>

        <div class="content">
            <div class="left-column">
                <div class="description">
                    <!-- Less time collecting water means more time in class. Clean water and proper toilets at school means teenage girls don't have to stay home for a week out of every month. -->
                    <?php echo htmlspecialchars($row['SubHeading2']); ?>
                </div>
               
               <div class="left-righgt-border-color">
               
                <div class="blog-content-newstyle">
                        <div class="quote">
                            <i class="fas fa-quote-left"></i>
                        </div>
                    
                        <div class="text">
                                <?php echo htmlspecialchars($row['SubHeading2Description']); ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo "No recent posts found.";
}
?>


 
</body>
</html>
