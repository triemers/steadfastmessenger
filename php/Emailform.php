<?php

$to = 'info@steadfastmessenger.com';
$subject = 'Delivery Quote';
$headers = "From: $email";

$name = $_POST['FirstName'];
$comp = $_POST['LastName'];
$service ="CHANGE-ME";
$email = $_POST['Email'];
$phone = $_POST['Email'];
$pick = $_POST['Email'];
$drop = $_POST['Email'];

$message = "Name: .$name \r\n";
$message = "Company: .$comp \r\n";
$message = "Service: .$service \r\n";
$message .= "Email: $email \r\n";
$message .= "Phone: $phone \r\n";
$message .= "Pickup Location: $pick \r\n";
$message .= "Dropoff Location: $drop \r\n";

$sent = mail($to, $subject, $message, $headers);

if($sent) {
    echo "Success";
}
else {
    echo "Failure";
}
?>