<?php
    $con = mysqli_connect("localhost", "root", "", "coffee");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8') : null;
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8') : null;

    // Check if the author already exists
    $sql_check_author = "SELECT author_id FROM authors WHERE email = ?";
    $stmt_check_author = mysqli_prepare($con, $sql_check_author);
    mysqli_stmt_bind_param($stmt_check_author, "s", $email);
    mysqli_stmt_execute($stmt_check_author);
    mysqli_stmt_store_result($stmt_check_author);

    // If the author does not exist, insert a new record (< 1)
    if (mysqli_stmt_num_rows($stmt_check_author) < 1) {
        $stmt = mysqli_prepare($con, "INSERT INTO authors (name, email) VALUES (?, ?)");
        mysqli_stmt_bind_param($stmt, "ss", $_POST["name"], $_POST["email"]);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
    
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8') : null;
    $content = isset($_POST['content']) ? htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8') : null;

    $sql = "SELECT author_id FROM authors WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $author_id = $row['author_id'];

    $stmt = mysqli_prepare($con, "INSERT INTO articles (title, content, author_id) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssi", $_POST["title"], $_POST["content"], $author_id);
    mysqli_stmt_execute($stmt);

    if (mysqli_query($con, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
?>
