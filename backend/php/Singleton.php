<?php
namespace backend\php;

 class Singleton {
   /**
    * instance
    *
    * Statische Variable, um die aktuelle (einzige!) Instanz dieser Klasse zu halten
    *
    * @var Singleton
    */
   protected static $_instance = null;
 
   /**
    * get instance
    *
    * Falls die einzige Instanz noch nicht existiert, erstelle sie
    * Gebe die einzige Instanz dann zurück
    *
    * @return   Singleton
    */
   public static function getInstance()
   {
       if (null === self::$_instance) {           
            $className = __CLASS__;
            var_dump($className);
           self::$_instance = new $className;
       }
       return self::$_instance;
   }
 
   /**
    * clone
    *
    * Kopieren der Instanz von aussen ebenfalls verbieten
    */
   protected function __clone() {}
 
   /**
    * constructor
    *
    * externe Instanzierung verbieten
    */
   protected function __construct() {}
 }
?>
