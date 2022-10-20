<?php

require_once(__DIR__.'/recieveData.php');

$recieveData = new recieveData();
$data = $recieveData->getContent();


//if ($data['token'] != "ABC123") //die(); // respond with an error message

$operation = $recieveData->getOperationClass($data);
$operation->invoke($data);