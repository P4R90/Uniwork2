<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$file = fopen('contacts.txt', 'a');
fwrite($file, "Name: " . $name . "\n");
fwrite($file, "Email: " . $email . "\n");
fwrite($file, "Subject: " . $subject . "\n");
fwrite($file, "Message: " . $message . "\n");
fclose($file);
?>