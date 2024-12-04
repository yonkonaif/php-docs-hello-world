<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee World</title>

    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="/CoffeWorld/styles.css">
    <style>
        /* General reset and body styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* Header styling */
        header {
            background-color: black;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        /* Logo styling */
        #logo img {
            width: 100px;
            color: white;
            height: auto;
        }

        /* Navigation bar */
        nav ul {
            display: flex;
            justify-content: center;
            padding: 0;
            margin-top: 10px;
            list-style: none;
        }
        
        nav ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }
        
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        nav ul li::after{
            content: '';
            width: 0%;
            height: 2px;
            background: white;
            display: block;
            margin: auto;
        }
        nav ul li:hover::after{
            width: 100%;
        }

    </style>
    
    <link rel="icon" href="/CoffeWorld/images/coffee.png">
</head>
<body>
    <header>
        <!-- Logo -->
        <div id="logo">
            <a href="index.php">
                <img src="../images/coffee_logo.png" alt="Coffee World Logo">
            </a>
        </div>

        <!-- Navigation menu -->
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="types_of_coffee.php">Types of Coffee</a></li>
                <li><a href="coffee_origins.php">Coffee Origins</a></li>
                <li><a href="coffee_journey.php">The journey of coffee</a></li>
                <li><a href="feedback_form.php">Feedback</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
                <li><a href="Write_for_Us.php">Write for Us</a></li>
                <li><a href="articles.php">Articles</a></li>
                <li><a href="FAQ.php">FAQ</a></li>
                <li><a href="about.php">About Me</a></li>
            </ul>
        </nav>
    </header>
