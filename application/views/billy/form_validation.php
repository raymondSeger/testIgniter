<html>
<head>
<title>My Form</title>
</head>
<body>

<?php 
// This function will return any error messages sent back by the validator. 
echo validation_errors();
?>

<?php echo form_open('billy/handleFormValidation'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="" size="50" />

<h5>Email Address</h5>
<input type="text" name="email" value="" size="50" />

<div>
	<br />
	<input type="submit" value="Submit" />
</div>

</form>

</body>
</html>