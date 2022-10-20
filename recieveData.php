<?php

/**
 * The recieveData get post reqquest from class sendData and pass the operation to opBase class.
 */
require_once(__DIR__.'/opBase.php'); 
class recieveData
{

    function _construct()
    {
        
    }

    /**
    * This function gets the json content of post requests and decode it from json string
    * @see passData()
    * @return the json decoded data
    */
    static function getContent()
    {
		$json = file_get_contents('php://input');
		$data = json_decode($json, TRUE);

		// $data = $_GET;;
        return $data;
    }
   
    /**
    * This function gets the data and pass it to op_Base Class
    * @see getContent()
    * @param get resp in the argument which contains json decoded data
    * @return the json decoded data
    */
    function getOperationClass($resp)
    
    {
        return op_Base::build($resp['operation']);
    }

    
  
}
?>

