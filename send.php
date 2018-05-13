<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load composer's autoloader
require '/home/kccole/vendor/autoload.php';

    $newURL="https://www.oslcarcadia.com";
    header('Location: '.$newURL);
    
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'sub4.mail.dreamhost.com';                           // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'requests@prayers.oslcarcadia.com';                 // SMTP username
    $mail->Password = 'jesusgod';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('requests@prayers.oslcarcadia.com', 'Mailer');
    $mail->addAddress('oslckc@gmail.com', 'KC!');
    // $mail->addAddress('prayerworks42@sbcglobal.net', 'Paula Loftus');     // Add a recipient
    //$mail->addAddress('contact@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 

    // validation expected data exists
    if( !isset($_POST['email']) ||
        !isset($_POST['name']) ||
        !isset($_POST['comment'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }


    $email = $_POST['email']; // required
    $name = $_POST['name']; // required
    $comment = $_POST['comment']; // required

    $error_message = "";

  if(strlen($email) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($name) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($comment) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Prayer Request from OSLCWebsite';
    $mail->Body    = 'Hi Prayer Team, ';
    $mail->Body .= "".$_POST["name"]." said: "; 
    $mail->Body .= "".nl2br($_POST["comment"]).""; 
    $mail->Body .= "... If needed contact them via Email: ".$_POST["email"].""; 
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    die();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
