<?php
// this line loads the library 
// require('Twilio.php'); 
// use vendor\twilio\sdk\Twilio\Rest\Client;
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use Twilio\Rest\Client; 
echo "Hello";

$account_sid = 'ACedd366d93e331b091d6b9442e3c53cec' ;
$auth_token = '7aadd13cd603d9a45252ba7c650b2339'; 
$client = new Client($account_sid, $auth_token); 
 



$client->messages->create(
	'+15512295673',
	array( 
	// 'To' => "+15512295671", 
	'From' => "+15107563344", 
	'Body' => "Hello from SIDDHESH ANDHARI CS 643 Fall 2017"
));
?>
