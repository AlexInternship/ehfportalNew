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
            
            $template = file_get_contents(dirname(__FILE__).'/template.html');
            $template = str_replace('%username%', $username, $template);
            $template = str_replace('%password%', $password, $template);
        

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
            $mail->AltBody = strip_tags($template);
            $mail->MsgHTML($template);     
            $mail->AddAddress($email, 'user');
            $mail->Send();
            
            return $password;
    }
    
    public function sendInviteMail($array, $link){
            Yii::import('application.extensions.phpmailer.JPhpMailer');
            $mail = new JPhpMailer;
            $generator = RandomPassword::Instance();
            $password = $generator->generatePassword();

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
