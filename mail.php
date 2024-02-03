<?php
 require 'vendor/autoload.php';
    
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 if(isset($_POST['send'])){
    $name   =  $_POST['name'];
    $mesg   =  $_POST['mesg']; 
    $email  =  $_POST['email'];  
    $subject =  $_POST['subject'];  

    $headers='';
   $result   = send_mail($name,$mesg,$email,$subject,$headers);
  if($result['status']=="success"){
        echo $result['message'] ;
   }
   else{
       echo $result['message'] ;
  }

 }


function send_mail($name,$mesg,$email,$subject,$headers){
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '##########';                 // SMTP username
        $mail->Password   = '##############';                        // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to
        $mail->setFrom('################', 'Kameshwar');  // Recipients
        $mail->addAddress($email, $name);     // Add a recipient
    
        // Content
        $mail->isHTML(true);                                        // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    =  $mesg ;
    
        // Send the email
        $mail->send();
        $info= array('status'=>'success',
                     'message'=> 'Email has been sent successfully',
                 );
            } catch (Exception $e) {
                $info= array( 'status'  =>  'success',
                              'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}",
                         );
              
            }
        return $info;

     }
    


?>