<?php

class SendMail {
    
        public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new SendMail();
        }
        return $inst;
    }
    
        public function sendNewUserMail($email, $username, $password){
            Yii::import('application.extensions.phpmailer.JPhpMailer');
            $mail = new JPhpMailer;

            $mail->SMTPSecure = "ssl";  
            $mail->Host='smtp.gmail.com';  
            $mail->Port='465';  
            $mail->Username = 'testingphpmails@gmail.com';
            $mail->Password = 'ehfportal';
            $mail->SMTPKeepAlive = true;  
            $mail->Mailer = "smtp"; 
            $mail->IsSMTP(); // telling the class to use SMTP  
            $mail->SMTPAuth   = true;                  // enable SMTP authentication  
            $mail->CharSet = 'utf-8';  
            $mail->SMTPDebug  = 0;   
            $mail->SetFrom('testingphpmails@gmail.com', 'EHFPortal');
            $mail->Subject = 'New account created';
            $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
            $mail->MsgHTML('<h3>We have created a new user for you</h3><br /><h3>your username is <h3>'.$username.'<br /><h3>your password is<h3>'.$password);     
            $mail->AddAddress($email, 'user');
            $mail->Send();
            
            return $password;
    }
    
    public function sendInviteMail($array, $link){
            Yii::import('application.extensions.phpmailer.JPhpMailer');
            $mail = new JPhpMailer;
            $password = RandomPassword::randomPassword();

            foreach($array as $value){

            $mail->SMTPSecure = "ssl";  
            $mail->Host='smtp.gmail.com';  
            $mail->Port='465';  
            $mail->Username = 'testingphpmails@gmail.com';
            $mail->Password = 'ehfportal';
            $mail->SMTPKeepAlive = true;  
            $mail->Mailer = "smtp"; 
            $mail->IsSMTP(); // telling the class to use SMTP  
            $mail->SMTPAuth   = true;                  // enable SMTP authentication  
            $mail->CharSet = 'utf-8';  
            $mail->SMTPDebug  = 0;   
            $mail->SetFrom('testingphpmails@gmail.com', 'EHFPortal');
            $mail->Subject = 'Join me on EHFportal';
            $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
            $mail->MsgHTML('<h3>hello i have just send my first invoice using EHFportal, follow the link to try it yourself</h3><br />'.$link);     
            $mail->AddAddress($value, 'John Doe');
            $mail->Send();
            }
    }
}
?>
