<?php


require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Base files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Define some constants
define("RECIPIENT_NAME", "Veloxn Private Limited");
define("RECIPIENT_EMAIL", "sanjaykr.pm@gmail.com");


// Read the form values
$success = false;
$userName = isset($_POST['full_name']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['full_name']) : "";
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$userPhone = isset($_POST['phone_number']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone_number']) : "";
$userSubject = isset($_POST['subject']) ? preg_replace("/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";
 $subjectV = $_POST['subjectV'];

// If all values exist, send the email

$sql = "INSERT INTO req_query_table(full_name,phone_number,email,message, subject)VALUES ('$userName','$userPhone','$senderEmail','$message','$userSubject')";


  
if ($userName && $senderEmail && $userPhone && $message) {

    // PHPMailer classes into the global namespace

    // create object of PHPMailer class with boolean parameter which sets/unsets exception.
	
	
   if ($subjectV == 'EducationManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+School+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SocialNetworkingSoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Social+Networking+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'HospitalManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Hospital+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ProjectManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Project+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'RestaurantPOSSoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Restaurant+POS+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ElectionCampaign') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Election+Campaign.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'HotelManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Hotel+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'OnlineLearningandExaminationSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+online+Learning+and+Examination+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'RealEstateSolutions') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Real+Estate+Solutions.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'GSTBillingSoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+GST+Billing+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'PayRollAndHRSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+PayRoll+And+HR+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'EmployeeAttendanceManagementSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Employee+Attendance+Management+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'InventorySoftware') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Inventory+Software.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ShoppingWebsiteSoftwares') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Shopping+Website+Softwares.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SoftwareDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Software+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'WebsitesDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Websites+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'MobileAPPsDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Mobile+APPs+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'e-CommerceDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+e-Commerce+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'DataServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Data+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'e-PublishingSolutions') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+e-Publishing+Solutions.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'OnlineMarketing') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Online+Marketing.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SEOServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+SEO+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'ContentWritingServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Content+Writing+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SoftwareMaintenanceServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Software+Maintenance+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'WebHostingServices') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Web+Hosting+Services.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'DomainRegistration') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Domain+Registration.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'PayPerClick') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Pay+Per+Click.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'AdvertisingSystem') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Advertising+System.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'SocialMediaOptimization') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Social+Media+Optimization.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'DigitalMarketing') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Digital+Marketing.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'BrandingandPromotion') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Branding+and+Promotion.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'OtherPromotionals') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Other+Promotionals.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'PropertyPortalDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Property+Portal+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'QRCodeSolution') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+QR+Code+Solution.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  } elseif ($subjectV == 'Java/J2EEDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Java/J2EE+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'Microsoft.NETDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Microsoft.NET+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'PHPDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+PHP+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'RubyonRails(RoR)Development') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Ruby+on+Rails(RoR)+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'DataWarehouse') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Data+Warehouse.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'AndroidDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Android+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'iOSDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+iOS+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'WindowsDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Windows+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'PhoneGapDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+Phone+Gap+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'CMSDevelopment') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+CMS+Development.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'HTML/CSS/JQuery/AJAX') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+HTML/CSS/JQuery/AJAX.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }elseif ($subjectV == 'RDBMSasBack-end') {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+Regarding+RDBMS+as+Back-end.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }else {
    $Message = "&type=text&message=Thanks+for+contacting+Veloxn+Private+Limited.+We+will+get+back+to+you+soon,+you+can+post+more+queries+here....";
  }

	
  $url = 'https://chatbot.veloxn.com/api/send?number=91' . $userPhone . $Message . '&instance_id=6741B26012C4E&access_token=6738ba3b60674';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);
  if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
  }
  
  
    $mail = new PHPMailer(true);

    // Template start

    $AdminMessage = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <table
        style="
        width: 600px;
        margin: auto;
        border: solid 1px #f0f0f0;
        border-spacing: 0;
      ">
        <tr>
            <td colspan="2">
                <div style="width: 25%; margin: 0px auto">
                    <img src="img/thank_u.png" alt=""
                        style="width: 150px; padding: 0px 15px" />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p style="font-family: sans-serif; padding: 0px 15px">
                    Hello <b>Admin</b>,
                </p>
                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    Greetings! Wanted to inform you about a new enquiry. Please
                    note the client requirements below for your convenience:
                </p>
                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    Should assistance be needed, please do not hesitate to reach out.
                </p>
                <ul>
                    <li
                        style="
                font-family: sans-serif;
                line-height: 26px;
                padding: 0px 15px;
              ">
                        Full name :
                        <span>
                            ' . $userName . '
                        </span>
                    </li>
                    <li
                        style="
                font-family: sans-serif;
                line-height: 26px;
                padding: 0px 15px;
              ">
                        Email address:
                        <span>
                            ' . $senderEmail . '
                        </span>
                    </li>
                    <li
                        style="
                font-family: sans-serif;
                line-height: 26px;
                padding: 0px 15px;
              ">
                        Phone number:
                        <span>
                            ' . $userPhone . '
                        </span>
                    </li>
            <li
              style="
                font-family: sans-serif;
                line-height: 26px;
                padding: 0px 15px;
              "
            >
              Message:
              <span>
                ' . $message . '
              </span>
            </li>
                </ul>
                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    We would greatly appreciate it if you could follow up on this lead
                    promptly and professionally.
                </p>
            </td>
        </tr>
      
    </table>
</body>

</html>';

    $userMessage = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <table
        style="
        width: 600px;
        margin: auto;
        border: solid 1px #f0f0f0;
        border-spacing: 0;
      ">
        <tr>
            <td colspan="2">
                <div style="width: 25%; margin: 0px auto;">
                    <img src="img/thank_u.png" alt=""
                        style="width:150px;  padding: 0px 15px;" />
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <img src="img/thank_u.png' . '" alt=""
                    style="width: 600px; padding: 0px 15px" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p style="font-family: sans-serif; padding: 0px 15px">
                    Dear
                    <b>
                        ' . $userName . '
                    </b>,
                </p>
                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    Thank you for reaching out to us.
                </p>
                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    Our dedicated team of experts will review your request and get back
                    to you within few minutes.
                </p>
                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    Till then, explore our other services.
                </p>

                <p
                    style="
              font-family: sans-serif;
              line-height: 26px;
              padding: 0px 15px;
            ">
                    <b>With Veloxn Private Limited</b>
                </p>
            </td>
        </tr>
      
    </table>
</body>

</html>';

    // Template end
	

  


    try {
        $mail->SMTPDebug = 0;  //SMTP debug
        $mail->isSMTP(); // using SMTP protocol
        $mail->Host = '103.133.214.192'; // SMTP host as gmail
        $mail->SMTPAuth = true;  // enable smtp authentication
        $mail->Username = 'email@veloxn.com';  // sender gmail host
        $mail->Password = 'vxn.vp@12!7#9'; // sender gmail host password
        $mail->SMTPSecure = 'tls';  // for encrypted connection
        $mail->isHTML(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => false
            )
        );
        $mail->Port = 587;   // port for SMTP

        $mail->setFrom('email@veloxn.com', "Veloxn Private Limited"); // sender's email and name
        //$mail->addAddress('veloxnsales@gmail.com');
        // receiver's email and name

        if ('Admin' == 'Admin') {
            $mail->addAddress('veloxnservices@gmail.com', "Admin");
			//$mail->addBcc('koshaorganic1@gmail.com', "Admin");
            $mail->Subject = 'Admin';
            $mail->Body = $AdminMessage;
            $mail->send();
        }

        if ('User' == 'User') {
            $mail->addAddress($senderEmail, $userName);
            $mail->Subject = 'User';
            $mail->Body = $userMessage;
            $mail->send();
        }


        // echo 'Message has been sent';
    } catch (Exception $e) { // handle error.
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

    // $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";

    // $headers = "From: " . $userName . "";
    // $msgBody = " Name: " . $userName . " Email: " . $senderEmail . " Phone: " . $userPhone . " Subject: " . $userSubject . " Message: " . $message . "";
    // $success = mail($recipient, $headers, $msgBody);

    //Set Location After Successsfull Submission
    header('Location: contact-message-submitted.html#body');
} else {
    //Set Location After Unsuccesssfull Submission
    header('Location: index.html?message=Failed');
}

?>