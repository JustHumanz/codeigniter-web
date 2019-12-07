<html>
<head>
<title>Upload Form</title>
</head>
<body>
<center>Selamat datang di validitasi dokumen berbasis daring </center>
<?php echo $error;?>

<?php echo form_open_multipart('ver');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
