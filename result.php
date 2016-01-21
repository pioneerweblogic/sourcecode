<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
</head>

<body>

<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

//Sending Email to form owner
$header = "From: $email\n"
."Reply-To:$email\n";
$subject="Submission From My Form";
$email_to="naziazamir13@gmail.com";
$message="name:$fname.$lname\n"
."email: $email\n";

mail($email_to, $subject, $message, $header);

?>

<h2> Thank you for your submission </h2>
<p> Your information has been sent.  We will contact you soon by Email. </p>
<p> Again, thank you for your interest. </p>

<li><a href="index.html"> HOME </a></li>

</body>
</html>