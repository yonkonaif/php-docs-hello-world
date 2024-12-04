<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee World</title>

    <!-- Link to Page-Specific CSS -->
    <link rel="stylesheet" href="/CoffeWorld/css/coffee_origins.css">
</head>
<body>
    <h1>Coffee Origin</h1>
    <p>Explore the unique flavors and rich cultures of coffee-growing regions around the globe</p>
    <!-- Your page content goes here -->
    <div class="gallery">
        <div id="Ethiopia">
            <img src="/CoffeWorld/images/ethiopia.webp" class="thumbnail" alt="Ethiopian Coffee" onclick="enlargeImage('/CoffeWorld/images/ethiopia.webp')">
            <h3>Ethiopia</h3>
        </div>
        <div id="Colombia">
            <img src="/CoffeWorld/images/colombia.webp" class="thumbnail" alt="Colombian Coffee" onclick="enlargeImage('/CoffeWorld/images/colombia.webp')">
            <h3>Colombia</h3>
        </div>
        <div id="Brazil">
            <img src="/CoffeWorld/images/brazil.webp" class="thumbnail" alt="Brazilian Coffee" onclick="enlargeImage('/CoffeWorld/images/brazil.webp')">
            <h3>Brazil</h3>
        </div>
        <div id="Mexico">
            <img src="/CoffeWorld/images/mexico.webp" class="thumbnail" alt="mexican Coffee" onclick="enlargeImage('/CoffeWorld/images/mexico.webp')">
            <h3>Mexico</h3>
        </div>
    </div>

    <img id="enlarged-image" alt="Enlarged Coffee Image">

    <script>
        function enlargeImage(src) {
            const enlargedImg = document.getElementById('enlarged-image');
            enlargedImg.src = src;
            enlargedImg.style.display = 'block';
        }
    </script>

</body>
</html>
<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\footer.php');
?>