<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/respond.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
 
<body>
 
 
<?php
 
if(isset($_POST['submit'])) {
	echo 'Nice Form Submission!<br>';
} else {
	echo 'Stop trying to hack the form fool!';
	exit;
}
 
$website = isset($_POST['website']) ? ($_POST['website']) : 'http://twitter.com' ;
$category = isset($_POST['category']) ? ($_POST['category']) : 'Social' ;
 
echo "Hi bud, thanks for submitting <b>$website</b> to the <b>$category</b> category.";
?>
