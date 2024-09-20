<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
       body {
    font-family: 'Open Sans', sans-serif;
    background-image: url('img-slide.jpg');
    background-size: cover; /* Ensure the image covers the entire body */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevents the image from repeating */
    background-attachment: fixed; /* Keeps the background fixed when scrolling */
}



        .container {
            background-color: #fff;
            margin: 30px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 90%;
        }

        h1, h2 {
            text-align: center;
            font-family: monospace;
            color: #54a0f2;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-family: monospace;
            font-size: large;
        }

        input[type="text"],
        textarea,
        select,
        input[type="date"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #54a0f2;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        input:focus, 
        textarea:focus, 
        select:focus {
            outline: none;
            border-color: #23527c;
        }

        .image-upload {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .image-upload div {
            text-align: center;
        }

        .image-upload label {
            width: 100%;
            height: 150px;
            border: 1px dashed #54a0f2;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .image-upload input[type="file"] {
            opacity: 0;
            position: absolute;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .image-upload img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: none;
            position: absolute;
            top: 0;
            left: 0;
        }

        button {
            display: block;
            width: 100%;
            background-color: rgb(29, 172, 233);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            border: none;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #23527c;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 15px;
                width: 95%;
            }

            h1, h2 {
                font-size: 20px;
            }

            input, select, textarea {
                font-size: 14px;
            }

            button {
                font-size: 16px;
            }
        }

        @media (max-width: 576px) {
            .container {
                padding: 5px;
                margin: 10px;
                width: 100%;
            }

            h1, h2 {
                font-size: 18px;
            }

            input, select, textarea {
                font-size: 12px;
                height: 40px;
            }

            button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Blog Details</h1>
    <form action="blog-admin-form-db-connection.php" method="POST" enctype="multipart/form-data">

        <label for="blog-name">Blog Name</label>
        <input type="text" name="blog-name" placeholder="Enter header title" required>

        <label for="District">Select District</label>
        <select name="District" required>
            <option value="West Sikkim">West Sikkim</option>
            <option value="East Sikkim">East Sikkim</option>
            <option value="North Sikkim">North Sikkim</option>
            <option value="South Sikkim">South Sikkim</option>
        </select>

        <label for="blog-date">Blog Date</label>
        <input type="date" name="blog_date" placeholder="Choose Date of Travel" required>

        <label for="booking-price">Booking Price</label>
        <input type="number" name="booking-price" placeholder="Enter booking price" required>

        <label for="header-title">Header Title</label>
        <input type="text" name="header-title" placeholder="Enter blog name" required>

        <label for="description">Description</label>
        <textarea name="description" placeholder="Enter description" required></textarea>

        <label for="images">Upload Images</label>
        <div class="image-upload">
            <div>
                <label>
                    <input type="file" id="image1" name="image1" accept="image/*" onchange="readURL(this, 'image1-preview')">
                    <img id="image1-preview" alt="Image 1 Preview">
                    <span>Choose Image</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="file" id="image2" name="image2" accept="image/*" onchange="readURL(this, 'image2-preview')">
                    <img id="image2-preview" alt="Image 2 Preview">
                    <span>Choose Image</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="file" id="image3" name="image3" accept="image/*" onchange="readURL(this, 'image3-preview')">
                    <img id="image3-preview" alt="Image 3 Preview">
                    <span>Choose Image</span>
                </label>
            </div>
            <div>
                <label>
                    <input type="file" id="image4" name="image4" accept="image/*" onchange="readURL(this, 'image4-preview')">
                    <img id="image4-preview" alt="Image 4 Preview">
                    <span>Choose Image</span>
                </label>
            </div>
        </div>

        <label for="category">Category</label>
        <select name="category" required>
            <option value="ADVENTURE">Adventure</option>
            <option value="CAMPING">Camping</option>
            <option value="NATURAL">Natural</option>
            <option value="POLICY">Policy</option>
            <option value="SOLAR ENERGY">Solar Energy</option>
            <option value="TRAVELS">Travels</option>
        </select>

        <h2>Sub Heading 1</h2>
        <label for="sub-heading1-title">Title</label>
        <input type="text" name="sub-heading1-title" placeholder="Enter sub-heading 1 title">

        <label for="sub-heading1-description">Description</label>
        <textarea name="sub-heading1-description" placeholder="Enter sub-heading 1 description"></textarea>

        <h2>Sub Heading 2</h2>
        <label for="sub-heading2-title">Title</label>
        <input type="text" name="sub-heading2-title" placeholder="Enter sub-heading 2 title">

        <label for="sub-heading2-description">Description</label>
        <textarea name="sub-heading2-description" placeholder="Enter sub-heading 2 description"></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

<script>
    function readURL(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(previewId).src = e.target.result;
                document.getElementById(previewId).style.display = 'block';
                document.getElementById(previewId).nextElementSibling.style.display = 'none'; // Hide the "Choose Image" text
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

</body>
</html>