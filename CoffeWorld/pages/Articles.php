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
    <link rel="stylesheet" href="../css/Articles.css">

</head>

<body>
    <h1>Explore Coffee Articles</h1>
    <p>Discover the latest news, trends, and insights about coffee from around the world.</p>
    <?php
        // Database connection
        $conn = new mysqli('localhost', 'root', '', 'coffee');

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch articles from the articles table
        $sql = "SELECT title, date_published, content FROM articles";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<h4>" . $row["date_published"] . "</h3>";
                echo "<p>" . $row["content"] . "</p>";
                echo "<hr>";

            }
        } else {
            echo "0 results";
        }

        // Close connection
        $conn->close();
    ?>
</body>

<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\footer.php');
?>