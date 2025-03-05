
<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\Exception.php';
require 'PHPMailer\SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                    
    $mail->Username   = 'usmansheikh4610@gmail.com';                     
    $mail->Password   = 'bbsntfpxtoisfmcr';                                
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;             
    $mail->Port       = 465;                                     

    //Recipients
    $mail->setFrom('usmansheikh@gmail.com', 'Contact Form'); // Send from here
    $mail->addAddress('muhammadaalyan313@gmail.com', 'Message From Here');     // Send to here

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'VLM Virtual Inquiry';
    $mail->Body    = 'Name : '.$name.' Email : '.$email.' Message : '.$message;
    $mail->send();
    echo "<div>Message has been sent</div>";
    echo("<script>window.location = 'index.html';</script>");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
else{
    echo 'Method Not Found..!!';
}


?>
