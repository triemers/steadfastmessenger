<?php

$to = 'info@steadfastmessenger.com';
$subject = 'Delivery Quote';
$headers = "From: $email";

$name = $_POST['Name'];
$comp = $_POST['Company'];
$service = $_POST['Service'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$pick = $_POST['PickupLocation'];
$drop = $_POST['DropoffLocation'];
$notes = $_POST['Notes']

$message = "$name has requested a delivery quote."
$message = "Name: .$name \r\n";
$message = "Company: .$comp \r\n";
$message = "Service: .$service \r\n";
$message .= "Email: $email \r\n";
$message .= "Phone: $phone \r\n";
$message .= "Pickup Location: $pick \r\n";
$message .= "Dropoff Location: $drop \r\n";
$message .= "Additional Notes: $notes \r\n";
$sent = mail($to, $subject, $message, $headers);

if($sent) {
    echo "Success";
}
else {
    echo "Submission Failed";
}
?>