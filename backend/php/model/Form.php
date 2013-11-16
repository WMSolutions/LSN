<?php
namespace backend\php\model;
require_once 'backend\php\Singleton.php';
    
class Form {
    
    /**
     *
     * @var Form 
     */
    private static $instance;
    
    /**
     * 
     * @return Form
     */
    public static function getInstance(){
        if (null === self::$instance) {
            self::$instance = new Form();
        }
        
        return self::$instance;
    }   
    
    /**
     * @Override
     */
    public function __clone() {
        
    }
        
    /**
     * @param: String $post_param
     * @return: mixed
     */
    public function getParam($post_param) {
        if (isset($_POST[$post_param])) {
            return $_POST[$post_param];
        } else {
            return null;
        }
    } 
}
?>
