<?php
$to = "randallerasmus1@gmail.com"
$subject = "Email from Byteservices Website";

//dont touch this please
$name = $_POST['name'];
$message = $_POST['message'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From:$email";

mail($to,$subject,$message,$headers);

echo "Email has been sent! thank you $name"

// $formcontent=" From: $name \n subject: $subject \n Message: $message";
// $recipient = "randallerasmus1@gmail.com";
//
// $mailheader = "From: $email \r\n";
// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
// header("location: contact-standart.html")
?>
