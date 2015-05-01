<?php
//processFeedback.php
//Construct the message to be sent to the client

  $client_name = $_POST['name'];
  $client_email = $_POST['email'];
  $client_phone = $_POST['phone'];
  $client_comment = $_POST['message'];
  $client_rating = $_POST['rating'];
  $header = "From: Book Central Representative";

  $business_email = "josephel@uci.edu";

//Send Message to Client
$messageToClient =
 "Dear ". $client_name . ",\n\nYour feedback has been received by a Book Central Representative. Thank you for your patronage!\n\n" .
 "Your Information: \nE-mail address: " . $client_email ."\r\n".
 "Phone number: ". $client_phone . "\r\n".
 "Book Title: " . $_POST['book_title']. "\r\n" .
 "Book Rating: " . $client_rating . "\r\n" .
 "Comment: " . $client_comment . "\r\n";

mail($client_email, "Book Central Feedback Confirmation", $messageToClient, $header);

//Send Message to Business
$messageToBusiness =
 "Feedback from customer: \n\n" .
 "Client Information: \nE-mail address: " . $client_email ."\r\n".
 "Phone number: ". $client_phone . "\r\n".
 "Book Title: " . $_POST['book_title']. "\r\n" .
 "Book Rating: " . $client_rating . "\r\n" .
 "Comment: " . $client_comment . "\r\n";

mail($business_email, "Book Central Customer Feedback", $messageToBusiness, "Customer Feedback Received");

//header('Location: ../feedback_confirmation.php');
/*
//Transform the confirmation message to the client into XHTML format and display it
$display = str_replace("\r\n", "<br />", $messageToClient);
$display =
 "<html><head><title>Your Message</title></head><body><tt>".
 $display.
 "</tt></body></html>";
echo $display;
*/

/*
//Log the message in a file called feedback.txt on the web server
$fileVar = fopen("../data/feedback.txt", "a");
 or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n");
 or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"));
 or die("Error: Could not write date to the log file.");
fwrite($fileVar, $messageToClient);
 or die("Error: Could not write message to the log file.");
*/

 header('Location: ../feedback_confirmation.php');


?>
