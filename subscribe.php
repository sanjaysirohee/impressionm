<?php
session_start();
require 'config.php';

$email = $_POST['email'];
$sql = "INSERT INTO subscribed_customer (email) VALUES ('$email')";
if ($conn->query($sql) === TRUE) {
  echo "Your message has been sent. Thank you, " . $email . ", we will contact you shortly.";

  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($ch);
  curl_close($ch);
  if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
  }

  header('Location: contact-message-submitted.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
