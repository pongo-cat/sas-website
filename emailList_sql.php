<!--Sends email to user (confirming message) and me-->

<?php

$message = $_POST['message'];
$message = wordwrap($message, 70, "\r\n");

$cust_email = $_POST['email'];
$name = $_POST['name'];
$sas_email = "sleipnirartstudio@gmail.com";

$cust_header = "From: $sas_email";
mail($cust_email, "Message Confirmation", "Thank you for your message, $name! We will get back to you as soon as possible.", $cust_header);
mail($sas_email, "New Message", "You have a new message from $name. Here is the message: $message", "From: $cust_email");

echo "<script>alert('Message sent successfully!')</script>";
echo"<script>window.location.href='contact.php'</script>";

?>

