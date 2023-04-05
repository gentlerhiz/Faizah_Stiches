<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $to = "idrisaloma120@gmail.com"; // Replace with your email address
  $subject = "Contact Form Submission";
  $headers = "From: " . $email . "\r\n" .
    "Reply-To: " . $email . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
  $mailBody = "Name: " . $name . "\n" .
    "Email: " . $email . "\n" .
    "Message: " . $message;
  if (mail($to, $subject, $mailBody, $headers)) {
    echo "<script>alert('Thank you for your submission. We will get back to you soon.');</script>";
  } else {
    echo "<script>alert('Failed to send the email. Please try again later.');</script>";
  }
}
?>
