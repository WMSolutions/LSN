<?php
    namespace backend\php\utilities;
    require_once 'backend\php\Mail.php';
    
    class Mailer {
        
        /**
         * 
         * @param Mail $mail
         */
        public function sendMail($mail) {
            if($this->validateEmail($mail->getSender())) {
                foreach($mail->getReceivers() as $receiver) {
                    mail($receiver, $mail->getSubject(), $mail->getMessage());
                }
            }
        }
        
        //TODO Only 1 point allowed in localPart und domainPart
        /**
         * 
         * @param String $email
         * @return boolean
         */
        private function validateEmail($email) {
            if(preg_match("/^.{1,64}@.{1,254}$/", $email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $parts = explode('@', $email);
                
                $localPart = $parts[0];
                $domainPart = $parts[1];
                
                if(!preg_match("/^[\w(\!\#\$\%\&\'\*\+\/\-\=\?\^\_\`\{\|\}\~\.)]+$/", $localPart)){
                    var_dump("wrong localPart");
                    return false;
                }
                
                if(!preg_match("/^[A-Za-z0-9\-\.]+$/", $domainPart)) {
                    var_dump("wrong domainPart");
                    return false;                    
                }
                
                if(!checkdnsrr($domainPart, 'MX')){
                    var_dump("No MX-Record");
                    return false;
                }
                return true;
            } else {
                var_dump("False format");
                return false;
            }           
        }        
    }
?>
