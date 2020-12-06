<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	  	$nameError = "";
	  	$name = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "Name is required";
			}
			else {
				$name = "Name is: " . $_REQUEST["name"];
			}
		} 
	?>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Name: <input type="text" name="name">

	<br />
	<span><?php echo $nameError; ?></span><br />
	Email: <input type="text" name="email">
	<br /><br />
	Website: <input type="text" name="website">
	<br /><br />
	Comment: <input type="text" name="comment">
	<br /><br />
	Gender: <input type="radio" name="gender" value="male">Male
	
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="other">Other
	
	<br /><br />
	<input type="submit">
	</form>

	<?php
	  	echo $name;
	?>


</body>
</html>