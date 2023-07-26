<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Shop Online</title>
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>E-Commerce Website</h2>
                <img src="src/pngwing.com.png" alt="logo" width="400px"/>
                <input type="text" name='name' />
                <br>
                <input type="text" name='price' />
                <br>
                <input type="file" id='file' name='image' style="display:none"/>
                <label for='file' >Upload Image</label>
                <button name='upload'>Publish</button>
                <br><br>
                <a href="products.php">All Products</a>
            </form>
        </div>
        <p>Developer By Eslam Badawy</p>
    </center>
</body>
</html>