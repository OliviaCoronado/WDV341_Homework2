<?php 

//does not work totally on xxamp server. Need host site.
//Testing the email() in PHP
//website helped - https://www.youtube.com/watch?v=Zxr0lFhf9V8 https://www.youtube.com/watch?v=r_O3JoyPDxU

$fName = $_POST["first_name"];
$lName = $_POST["last_name"];
$emailAddress = $_POST["email_address"];
$contact = $_POST["contactReason"];
$clientComment = $_POST["comment"];

$date = date_create();      //create current DateTime object
$outputDate = date_format($date, "n/j/Y");

//create the basic email info to send
$to = $_POST["email_address"];
$subject = "PROJECT: WDV341 PHP email contact";
//create the email headers
$headers = "From: contact@oliviaanncoronado.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//message that client see
$message = "
<html>
<body style=\"background-color: #073764; font-size:16px; color: black;\">
<div style=\"max-width: 600px; min-width: 200px; height:400px; background-color: #fff; padding: 20px; margin: 20px auto; border-radius: 5px;\">
<Hello <strong> $fName $lName </strong>,
<p>Thank you for your message! This is a confirmation email sent to <strong> $emailAddress</strong>.Your reason for contacting us <strong>$contact</strong> along with your comment:
<strong>$clientComment</strong> have been sent to us. We'll get back to you shortly. 
<p>Confirmation Time: $outputDate</p>

</div>
</body>
</html>
";

if( mail($to,$subject,$message,$headers) ){    
    echo "Self: Accepted Email";
}
else {
    echo "Self: Email Failed";
}

$to2 = "Oliviann101@gmail.com";
$subject2 = "Successfully Submission of PROJECT";
$headers2 = "From: contact@oliviaanncoronado.com" . "\r\n";

//Message sent to Self
$message2 = "
<html>
<body>
<p>Message was sent Successfully, We will contact you Shortly!</p>
<p>Full Name: $fName $lName </p>
<p>Email Address: $emailAddress</p>
<p>Contact Reason: $contact </p>
<p>Comment: $clientComment</p>
<p>Confirmation Time: $outputDate</p>

</body>
</html>
";

if( mail($to2,$subject2,$message2,$headers2) ){    
    echo "Client: Accepted Email";
}
else {
    echo "Client: Email Failed";
}

?>



<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WDV101 Basic Form Handler Example</title>
<style>
* {
box-sizing: border-box;
margin:0;
padding: 0;
}

body {
    font-family: Arial, Helvetica, sans-serif;
background-image: url("blueCube.jpg");
        }

.contact-container {
  margin: auto;
  margin-top: 100px;
  width:800px;
  border-radius: 5px;
  background-color: white;
  padding: 20px;
  align-items: center;
}
</style>
</head>

<body>



<div class="contact-container">

<h3>Hello <?php echo $_POST["first_name"],",";?></h3>
<br>
<p>A confirmation email has been sent to you at <strong> <?php echo $_POST["email_address"];?></strong>. </p>
<br>
<p>Thank you for your message<strong> <?php echo $_POST["first_name"], " " ,$_POST["last_name"]; ?></strong> Your reason for contacting us 
<strong><?php echo $_POST["contactReason"];?></strong> along with your comment:<strong><?php echo $_POST["comment"];?></strong> have been 
successfully sent to us. We'll get back to you shortly.</p> 
<p>Confirmation Time: <strong> <?php echo $outputDate;?></strong></p>
    


<div>

</body>
</html>
