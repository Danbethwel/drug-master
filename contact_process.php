<?php

// Set the recipient email address
$to = "danbeth2000@gmail.com";

// Get the sender's email address from the form input with the name attribute "email"
$from = $_REQUEST['email'];

// Get the sender's name from the form input with the name attribute "name"
$name = $_REQUEST['name'];

// Get the email subject from the form input with the name attribute "subject"
$subject = $_REQUEST['subject'];

// The following line appears to be an attempt to get the sender's phone number, but it is not used later in the code.
$number = $_REQUEST['number'];

// Get the email message content from the form input with the name attribute "message"
$cmessage = $_REQUEST['message'];

// Set the email headers
$headers = "From: $from";
$headers = "From: " . $from . "\r\n";
$headers .= "Reply-To: " . $from . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Set the default subject for the email
$subject = "You have a message from your Bitmap Photography.";

// Path to the logo image and link for the email
$logo = 'img/logo.png';
$link = '#';

// Construct the email body using HTML formatting
$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody><tr>";
$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
$body .= "</tr>";
$body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$subject}</td></tr>";
$body .= "<tr><td></td></tr>";
$body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

// Send the email using the mail() function
$send = mail($to, $subject, $body, $headers);

?>
