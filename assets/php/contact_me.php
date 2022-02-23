<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }else{
      print_r($_POST);
   }

   

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'ximenamay@gmail.com, ximenamay@hotmail.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.


$cabeceras = 'From: info@ximenamay.com.ar' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
$cabeceras .= "MIME-Version: 1.0\r\n";
$cabeceras .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$email_subject = "Website Contact Form:  $name";
// $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$email_body = "mensaje";

$cabeceras .= "Reply-To: ".$email_address;   
mail($to,$email_subject,$email_body,$cabeceras);

     
?>