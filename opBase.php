<?php
/**
 * The opBase class recieve operation from the class recieveData and send to the appropriate operation class.
 * ...
 */
require_once(__DIR__.'/operations/op_start.php');
require_once(__DIR__.'/operations/op_operation.php');
require_once(__DIR__.'/operations/op_stop.php');
require_once(__DIR__.'/operations/op_restart.php');
require_once(__DIR__.'/operations/op_status.php');
require_once(__DIR__.'/operations/op_clone.php');
require_once(__DIR__.'/operations/op_get.php');
require_once(__DIR__.'/operations/op_delete.php');
require_once(__DIR__.'/operations/op_inject.php');
require_once(__DIR__.'/operations/op_findoffsets.php');


class op_Base {
 
    
    public function __construct() {
        // ... //
    }

    /**
    * This static function gets the type of operation from recieveData class and check if the class for this type of operatin exist or not if exist then it retrive the operation.
    * @param get type in the argument which contains type of the operation
    */
 
    public static function build ($type = '') {
             
        if($type == '') 
        {
            throw new Exception('Invalid operation Type 2: ' . $type);
        }
        else 
        {
 
            $className = 'op_'.ucfirst($type);

            if(class_exists($className))
            {
                return new $className();
            }
            else {
                throw new Exception('operation type not found.');
            }
        }
    }
}


 
?>
