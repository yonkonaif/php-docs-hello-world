<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee World</title>

    <!-- Link to External CSS (common styles) -->
    <link rel="stylesheet" href="../css/Write_for_Us.css">
</head>


<body>
    <h1>Share your insights about coffee</h1>
    <form action="../database/post_article.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="content">Content:</label>
        <textarea name="content" id="content" required></textarea>
        
        <button type="submit">Submit</button>
    </form>

</body>
<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\footer.php');
?>