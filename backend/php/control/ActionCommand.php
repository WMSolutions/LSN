<?php
namespace backend\php\control;

abstract class ActionCommand {
    
    /**
     * 
     * @param Form $form
     */
    public function beforeAction(Form $form) {
        
    }
    
    /**
     * @param Form $form
     */
    abstract function action(Form $form);
    
    /**
     * 
     * @param Form $form
     */
    public function afterAction(Form $form) {
        
    }
}
?>
