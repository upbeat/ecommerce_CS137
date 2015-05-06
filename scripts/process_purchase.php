<?php
//processPurchase.php
//Construct the message to be sent to the buyer

  $client_name = $_POST['name'];
  $client_email = $_POST['email'];
//  $normal_book = $_POST['bookPickNormal'];
//  $clearance_book = $_POST['bookPickClearance'];
  $business_email = "josephel@uci.edu";
  $header = "From: Book Central Representative";

$messageToClient =
 "Dear ". $client_name . ",\n\nThank you for your purchase!\n\n" .
 "Your Information: \nE-mail address: " . $client_email ."\r\n".
 "\nName: " . $client_name ."\r\n".
// "Book Title (Popular): " . $normal_book . "\r\n" .
// "Book Title (Clearance): " . $clearance_book . "\r\n" .
 "Sincerely,\n\nBook Central";

mail($client_email, "Book Central Purchase Confirmation", $messageToClient, $header);

$messageToBusiness =
 "Purchase from customer: \n\n" .
 "Client Information: \nE-mail address: " . $client_email ."\r\n".
 "Name: " . $client_name ."\r\n".
// "Book Title (Popular): " . $normal_book . "\r\n" .
// "Book Title (Clearance): " . $clearance_book . "\r\n" .
 "Sincerely,\n\nBook Central";

mail($business_email, "Book Central Customer Purchase Made!", $messageToBusiness, "Customer Purchase Received");

//Log the message in a file called purchase.txt on the web server
$fileVar = fopen("../data/purchase.txt", "a")
 or die("Error: Could not open the log file.");
fwrite($fileVar, "\n-------------------------------------------------------\n")
 or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\n"))
 or die("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
 or die("Error: Could not write to the log file.");

header('Location: ../find_books.php');

?>
