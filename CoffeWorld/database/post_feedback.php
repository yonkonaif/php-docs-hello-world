<?php
    $con = mysqli_connect("localhost", "root", "", "coffee");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize and retrieve form data
    $first_name = isset($_POST['FName']) ? htmlspecialchars($_POST['FName'], ENT_QUOTES, 'UTF-8') : null;
    $last_name = isset($_POST['LName']) ? htmlspecialchars($_POST['LName'], ENT_QUOTES, 'UTF-8') : null;
    $email = isset($_POST['Email']) ? htmlspecialchars($_POST['Email'], ENT_QUOTES, 'UTF-8') : null;
    $age = isset($_POST['Age']) ? htmlspecialchars($_POST['Age'], ENT_QUOTES, 'UTF-8') : null;
    $coffee_type = isset($_POST['Coffee_Type']) ? htmlspecialchars($_POST['Coffee_Type'], ENT_QUOTES, 'UTF-8') : null;
    $newsletter = isset($_POST['Newsletter']) ? htmlspecialchars($_POST['Newsletter'], ENT_QUOTES, 'UTF-8') : null;
    $rating = isset($_POST['Rating']) ? htmlspecialchars($_POST['Rating'], ENT_QUOTES, 'UTF-8') : null;
    $feedback = isset($_POST['Feedback']) ? htmlspecialchars($_POST['Feedback'], ENT_QUOTES, 'UTF-8') : null;

    // Insert feedback into the database
    $stmt = $con->prepare("INSERT INTO feedbacks (fname, lname, email, age, coffee_type, newsletter, rating, feedback) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $age, $coffee_type, $newsletter, $rating, $feedback);

    if ($stmt->execute()) {
        echo "Feedback submitted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }
 
    $stmt->close();
    $con->close();
?>