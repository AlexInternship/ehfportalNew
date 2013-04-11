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
            
            $template = file_get_contents(dirname(__FILE__).'/newAccountTemplate.html');
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
    
    public function sendInviteMail($array){
            Yii::import('application.extensions.phpmailer.JPhpMailer');
            $mail = new JPhpMailer;       
            $template = file_get_contents(dirname(__FILE__).'/newAccountTemplate.html');
   
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
            $mail->AltBody = strip_tags($template);
            $mail->MsgHTML($template);     
            $mail->AddAddress($value, 'invited');
            $mail->Send();
            }
    }
    
    function mailwrap($mailto, $subject, $body) {
        
        Yii::import('application.extensions.phpmailer.JPhpMailer');
            $mail = new JPhpMailer;       
            $names = new domainNames();
            $realname = explode(':',$_SERVER["HTTP_HOST"]);
            $db = CallDB::Instance();
            
            if(in_array($realname[0], $names)) {
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
                $mail->Subject = $subject;
                $mail->AltBody = strip_tags($body);
                $mail->MsgHTML($body);     
                $mail->AddAddress($mailto, '');
                $mail->Send(); 
            } else {
                
                
                $subjectAlt = $subject." ($mailto - mailwrapper - udvikling - ".$_SERVER['DOCUMENT_ROOT'].")";
                $bodyAlt = "Location:".$_SERVER['PHP_SELF']."\nhost: ".$_SERVER["HTTP_HOST"]."\noriginal mail: $mailto\n\n".$subject;   
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
                $mail->Subject = $subjectAlt;
                $mail->AltBody = strip_tags($bodyAlt);
                $mail->MsgHTML($bodyAlt);     
                $mail->AddAddress('testingphpmails@gmail.com', '');
                $mail->Send();
                
                $db->insertMailWrap($mailto, $subjectAlt, $bodyAlt);                
            }
        
    }

}
?>
