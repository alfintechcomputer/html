<?php
include('validation_functions.php');
$errors = array();
 
// was the form submitted?
if(isset($_POST['submit'])) {
    $website = htmlspecialchars($_POST['website']);
    $category = htmlspecialchars($_POST['category']);
	
	// is the website field present?
	if(!has_presence($website)) {
		$errors['website'] = 'You need to enter a website!';
	}
	
	// is the website address at least 4 characters or more?
	if(!min_length($website, 4)) {
		$errors['minlength'] = 'The website must be 4 characters or more!';
	}
	
	// is the category field present?
	if(!has_presence($category)) {
		$errors['category'] = 'You need to provide a category!';
	}
	
    if(empty($errors)) {
		    echo "Hi bud, thanks for submitting <b>$website</b> to the <b>$category</b> category.";
	}
 
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
<?php echo form_errors($errors); ?>
</body>
</html>
