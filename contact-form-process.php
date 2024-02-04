<?php
         require 'vendor/autoload.php';
         use PHPMailer\PHPMailer\PHPMailer;
         use PHPMailer\PHPMailer\Exception;
         if(isset($_POST["submit"])){
           $fname=$_POST["fname"];
           $email=$_POST["email"];
           $subject=$_POST["subject"];
           $message=$_POST["message"]; 
            if(!empty($email)){
             $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
             if (!preg_match($email_exp, $email)) {
             echo '<span style="color:red;">The email address you entered does not appear to be valid.</span><br>';   
             }
            }
            if(!empty($fname)){
             $name_exp = "/^[A-Za-z .'-]+$/";
             if (!preg_match($name_exp, $fname)) {
               echo '<span style="color:red;">The name you entered does not appear to be valid.</span><br>';
              }
            }
            if((empty($fname))&& (empty($email))&& (empty($subject))&& (empty($message))){
              echo '<span style="color:red;">Please fill out all the fields</span><br>';
            }elseif((!empty($fname))&& (!empty($email))&& (!empty($subject))&& (!empty($message))&&preg_match($email_exp, $email) &&preg_match($name_exp, $fname)){
               $mail = new PHPMailer(true);
               try {
                 //Server settings
                 $mail->SMTPDebug = 0; // Enable verbose debug output
                 $mail->isSMTP();
                 $mail->Host = 'smtp.gmail.com';
                 $mail->SMTPAuth = true;
                 $mail->Username = 'toshi.lazime@gmail.com'; // SMTP username
                 $mail->Password = 'vqop lgdm xate axsl'; // SMTP password
                 $mail->SMTPSecure = 'tls';
                 $mail->Port = 587;

                 //Recipients
                 $mail->setFrom($email, $fname);
                 $mail->addAddress('toshi.lazime@gmail.com', 'Laz');

                 //Content
                 $mail->isHTML(true);
                 $mail->Subject = "New form submission from website";
                 $mail->Body = "Name: $fname<br>Email: $email<br> Subject: $subject<br>Message: $message";
 
                 $mail->send();
                 echo "<script>alert('Message sent successfully!I will reply to your email shortly!');</script>";
                } catch (Exception $e) {
                   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  }
              }
           }
        ?>