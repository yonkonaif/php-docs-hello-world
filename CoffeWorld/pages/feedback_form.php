<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\header.php');
    include ('C:\\xampp\\htdocs\\CoffeWorld\\database\\database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee World</title>

    <link rel="stylesheet" href="../css/feedback_form.css">
</head>
<body>
    <h1>Feedback</h1>
    
    <form action="../database/post_feedback.php" method="post">
        <fieldset>Personal Information</fieldset>
        <label for="First_Name"> First name </label>
            <input type="text" name="FName" id="FName">
        
        <label for="Last_Name"> Last name </label>
            <input type="text" name="LName" id="LName">
        
        <label for="Email"> Email </label>
            <input type="email" name="Email" id="Email"> 
        
        <label for="Age"> Age </label>
            <input type="text" name= "Age" id= "Age"> 

        <fieldset>Feedback</fieldset>
        <label for="Coffee_Type"> What's your favourite coffee type? </label>
            <select name="Coffee_Type" id="Coffee_Type">
                <option value="Espresso">Espresso</option>
                <option value="Latte">Latte</option>
                <option value="Americano">Americano</option>
                <option value="Mocha">Mocha</option>
                <option value="Flat White">Flat White</option>
            </select>
        
            <label for="Newsletter">Would you like to receive our newsletter?</label>
            <input type="checkbox" name="Newsletter" value="Yes"> Yes
            <input type="checkbox" name="Newsletter" value="No"> No

        <label for="Rating">Overall experience (1 as low, 5 as high)</label>
            <input type="radio" name="Rating" value="1"> 1
            <input type="radio" name="Rating" value="2"> 2
            <input type="radio" name="Rating" value="3"> 3
            <input type="radio" name="Rating" value="4"> 4
            <input type="radio" name="Rating" value="5"> 5

        <label for="Feedback"> Feedback
            <textarea name="Feedback" id="Feedback" cols="30" rows="10"></textarea>
        </label>

        <label for="Submit">
            <input type="submit" value="Submit">
        </label>
    </form>
    <script src="../javascript/validation.js"></script>
</body>
</html>
<?php
    include ('C:\\xampp\\htdocs\\CoffeWorld\\includes\\footer.php');
?>