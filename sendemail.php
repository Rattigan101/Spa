<?php
    require 'vendor/autoload.php';    

    class SendEmail{
        public static function SendMail($to, $subject, $content){


            $email = new \sendgrid\Mail\Mail();
            //'apikey' => $key,
            $email->setForm("shari_rattigan@ymail.com", "Shari Rattigan");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/path", $content);

            $sengrid = new \SendGrid($key);

            try{
                $response = $sendgridid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>