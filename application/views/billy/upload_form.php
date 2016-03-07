<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('billy/handleUpload');?>

<input type="file" name="userFileName" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>