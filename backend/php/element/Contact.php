<?php
namespace backend\php\element;
require_once 'backend\php\ActionCommand.php';
require_once 'backend\php\Mail.php';
require_once 'backend\php\Mailer.php';
require_once 'backend\php\Form.php';

class Contact extends ActionCommand {   

    /*
     * @return: boolean;
     */
    public function beforeAction(Form $form) {
        if(!null === $form->getParam('submit')){
            return true;
        } else{
            return false;
        }
    }
    
    /*
     * @return: boolean;
     */
    public function action(Form $form){
        $mail = new Mail();
        $mail->setReceivers(array("momme@bla.de", "willie@bla.des"));
        $mail->setSender($form->getParam("email_address"));
        $mail->setSubject("Kunden Kontakt: " . $form->getParam("email_address"));
        $mail->setMessage($form->getParam("message"));
        
        $mailer = new Mailer(); 
        $mailer->sendMail($mail);
    }
    
    public function afterAction(Form $form){
        echo "Versendet";
    }
}


$class = new Contact();
$form = Form::getInstance();
var_dump($form instanceof Form);
$class->beforeAction($form);
$class->action($form);
$class->afterAction($form);
