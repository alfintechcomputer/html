<?php
 
// presence
$value = '';
 
if(!isset($value) or empty($value)) {
    echo 'fail';	
}
 
// string length
$value = '';
$min = 2;
$max = 25;
 
if(strlen($value) < $min) {
	echo 'fail - too small';
}
 
if(strlen($value) > $max) {
	echo 'fail - too big';
}
 
// type
$value = '';
if(!is_string($value)) {
	echo 'fail - not a string';
}
 
// set inclusion
$value = '7';
$set = array('1', '2', '3', '4', '5', '6', '7', '8');
if(!in_array($value, $set)) {
	echo 'fail - not in the set';
}
 
// format
$value = 'tom@jones.com';
if(!preg_match('/@/', $value)) {
    echo 'not a valid email';
}
 
?>
