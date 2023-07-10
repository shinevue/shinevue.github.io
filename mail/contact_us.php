<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send the email
  $to = "youremail@example.com";
  $subject = "New message from your website";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    // Display a success message to the user
    echo "Thank you for contacting us!";
  } else {
    // Display an error message to the user
    echo "There was a problem sending your message. Please try again later.";
  }
}
?>