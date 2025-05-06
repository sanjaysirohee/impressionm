<?php
session_start();
require 'config.php';

if (isset($_POST['vercode'])) {
  if ((empty($_SESSION["vercode"])) || ($_SESSION["vercode"] != $_POST['vercode'])) {
    die("<script>alert('Invalid Verification Code'); history.back();</script>");
  }
}

//$contact_name = $_POST['contact_name'];
//$contact_mobile = $_POST['contact_mobile'];
$email = $_POST['email'];
//$company_name = $_POST['company_name'];
//$website = $_POST['website'];
//$office_address = $_POST['office_address'];
//$has_gst = $_POST['has_gst'];
//$gst_number = $_POST['gst_number'];
//$software_name = $_POST['software_name'];
//$requirement_details = $_POST['requirement_details'];
//$budget_range = $_POST['budget_range'];
//$launch_time = $_POST['launch_time'];

//$sql = "INSERT INTO software_requirements (contact_name, contact_mobile, email_id, company_name, website, office_address, has_gst, gst_number, software_name, requirement_details, budget_range, launch_time) VALUES ('$contact_name', '$contact_mobile', '$email_id', '$company_name', '$website', '$office_address', '$has_gst', '$gst_number', '$software_name', '$requirement_details', '$budget_range', '$launch_time')";
$sql = "INSERT INTO subscribed_customer (email) VALUES ('$email')";
if ($conn->query($sql) === TRUE) {
  echo "Your message has been sent. Thank you, " . $contact_name . ", we will contact you shortly.";

  // Prepare the message for API
  $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+your+Software+requirement.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";

  $url = 'https://chatbot.veloxn.com/api/send?number=91' . $contact_mobile . $Message . '&instance_id=65BE23AD95919&access_token=65bd128b57e2f';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($ch);
  curl_close($ch);
  if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
  }

  header('Location: contact-message-submitted.html#body');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
