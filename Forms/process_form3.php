<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/respond.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
 
<body>
 
 
<?php
 
$website = isset($_POST['website']) ? ($_POST['website']) : 'http://twitter.com' ;
$category = isset($_POST['category']) ? ($_POST['category']) : 'Social' ;
 
 
echo "Hi bud, thanks for submitting <b>$website</b> to the <b>$category</b> category.";
?>
