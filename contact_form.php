<?php
/**
 * This example shows sending a message using a local sendmail binary.
 */

session_start();
require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSendmail();
$mail->IsHTML(true);
// Subject of confirmation email.
$conf_subject = 'Thanks for reaching out to Mambo';

// Who should the confirmation email be from?
$conf_sender = 'Mambo Italian Street Food <mambostreet@gmail.com>';

$msg = $_POST['username'] . ",\n\nThank you for your recent enquiry. A member of our
team will respond to your message as soon as possible. If you do not hear from us please give us a call. (770) 485-4026";

mail( $_POST['email'], $conf_subject, $msg, 'From: ' . $conf_sender );

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Set your information here
  $title 			= 'Contact Form';
  $mail_from 		= $_POST['email'];
  $mail_replay 	= $_POST['email'];
  // $mail_to    	= 'mamboreserve@gmail.com';
  $mail_to    	= 'jucajigue@gmail.com';
  $subject 		= '*** Question from Website ****';
  $username 		= $_POST['username'];
  $phone 			= $_POST['phone'];
  $message 		= $_POST['message'];
  $mail_body 		= $username .'<br/>'.
            $phone.'<br/>'.
            $message;

  //Set who the message is to be sent from
  $mail->setFrom($mail_from, $title);
  //Set an alternative reply-to address
  $mail->addReplyTo($mail_replay, $title);
  //Set who the message is to be sent to
  $mail->addAddress($mail_to, 'Host');
  //Set the subject line
  $mail->Subject = $subject;
  //Set the body
  $mail->Body = $mail_body;
  if ( !$mail->send() ) {
    // Process POST data

    // $serialized_data = '{"type":"danger", "message":"Contact form failed. Please send again later!"}';
    // echo $serialized_data;
    // echo "<br><p class='text-warning'>Mailer Error: " . $mail->ErrorInfo.'</p>';
    $_SESSION['form_contact_state'] = "Mailer Error: " . $mail->ErrorInfo;
  } else {
    // $serialized_data = '{"type":"success", "message":"Thank you for reaching out, we will get back to you soon!"}';
    //  $serialized_data = '{"type":"success", "message":"Thank you for contacting us! We try to respond within 24 hours."}';
    // echo $serialized_data;
    // echo "<br><p class='text-success'>Mail Sent Successfully. Thank you!</p>";
    $_SESSION['form_contact_state'] = "Mail Sent Successfully. Thank you!";
  }

  header("Location: contact.php");
}

?>
