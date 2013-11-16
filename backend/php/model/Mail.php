<?php
namespace backend\php\model;

class Mail {
    
    /**
     *
     * @var array
     */
    private $receivers;
    
    /**
     *
     * @var String
     */
    private $sender;
    
    /**
     *
     * @var String
     */
    private $subject;
    
    /**
     *
     * @var String
     */
    private $message;
    
    
    /**
     * 
     * @return array
     */
    public function getReceivers() {
        return $this->receivers;
    }
    
    /**
     * 
     * @return String
     */
    public function getSender() {
        return $this->sender;
    }
    
    /**
     * 
     * @return String
     */
    public function getSubject() {
        return $this->subject;
    }
    
    /**
     * 
     * @return String
     */
    public function getMessage() {
        return $this->message;
    }    
    
   /**
    * 
    * @param array $receivers
    */
    public function setReceivers($receivers) {
      $this->receivers = $receivers;
    }
    
    /**
     * 
     * @param String $sender
     */
    public function setSender($sender) {
        $this->sender = $sender;
    }
    
    /**
     * @param String $subject
     */
    public function setSubject($subject) {
        $this->subject = $subject;
    }
    
    /**
     * 
     * @param String $message
     */
    public function setMessage($message) {
        $this->message = $message;
    }    
}
?>
