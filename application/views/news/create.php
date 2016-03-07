<h2><?php echo $title; ?></h2>

	<?php 
	// Used to report errors related to form validation.
	echo validation_errors(); 
	?>

	<?php 
	// form helper and renders the form element and adds extra functionality, 
	// like adding a hidden CSRF prevention field
	// 
	// This form is being submitted to the same page, if there is POST data, it will process it and show different result
	// If there is no POST data, it will show this exact page with the forms to fill
	echo form_open('news/create'); 
	?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create news item" />

</form>
