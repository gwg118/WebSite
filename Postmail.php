<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Post Email</title>
</head>
<body>

<?php
    $myEmailAddress = "gideon.gordon@gmail.com";
    $subject = "Question from Just Do It!";
    
    $name = $_POST ['Name'];
    $email = $_POST ['Email'];
    $message = $_POST ['Message'];
    $header = "from: $name <$email>";
    
    mail($myEmailAddress, $subject, $message, $header);
?>    

    <p> Thank you for your response!</p>    
</body>
</html>