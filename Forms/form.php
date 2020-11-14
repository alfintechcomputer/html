<?php
 
if(isset($_POST['submit']) and strlen($_POST['website']) > 0) {
	$website = htmlspecialchars($_POST['website']);
	$category = htmlspecialchars($_POST['category']);
	echo "Hi bud, thanks for submitting <b>$website</b> to the <b>$category</b> category.";
} else {
	echo 'Enter a Website and Category';
}
 
?>
<html>
<head>
<meta charset="utf-8">
<title>HTML Form Built With Love</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/respond.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</head>
 
<body>
 
<form action="htmlformbuiltwithlove.php" method="post">
Website: <input type="text" name="website" value="" /><br>
Category: <input type="text" name="category" value="" /><br><br>
 
<input type="submit" name="submit" value="Submit Website" />
</form>
 
</body>
</html>
