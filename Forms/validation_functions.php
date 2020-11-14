<?php
 
function has_presence($value) {
	return isset($value) and $value !== '';
}
 
function max_length($value, $max) {
	return strlen($value) <= $max;
}
 
function min_length($value, $min) {
	return strlen($value) >= $min;
}
 
function has_inclusion($value, $set) {
	return in_array($value, $set);
}
 
function form_errors($errors = array()) {
	$output = '';
	if(!empty($errors)){
		$output .= '<div class="alert alert-danger">';
		$output .= 'You might need to fix a few things!<br>';
		$output .= '<ul>';
		foreach($errors as $key => $error) {
			$output .= '<li>'. $error .'</li>';
		}
		$output .= '</ul>';
		$output .= '</div>';
	}
	return $output;
} 
 
?>
