<?php
$name = $_POST['name'];
$facility = $_POST['facility'];
$email = $_POST['email'];
$role = $_POST['role'];
$message = $_POST['message'];

$to = "galawawdeh@gmail.com"; // غيّرها لإيميلك
$subject = "New Purifixes Lead";
$body = "
Name: $name
Facility: $facility
Email: $email
Role: $role
Message: $message
";

mail($to, $subject, $body);
header("Location: thankyou.html");
