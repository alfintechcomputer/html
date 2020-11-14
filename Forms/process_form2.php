<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/respond.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
 
<body>
 
 
<?php
$website = $_POST['website'];
$category = $_POST['category'];
 
echo "Hi bud, thanks for submitting <b>$website</b> to the <b>$category</b> category.";
?>
