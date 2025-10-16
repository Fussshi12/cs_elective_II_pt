<?php
//retriveal of inputs from view.html
$firstname = $_POST['firstname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$quote = $_POST['quote']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">
    <?php 
        echo" You are $firstname, a $age-year-old $gender. Your motto in life is: $quote";
    ?>
    </h1>
    
</body>
</html>