<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php echo $error;?>

<?php echo form_open_multipart('index.php/doku/do_upload');?>

Nama Dokumen </br>
<input type="text" name="nama" />

</br > </br >

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" /></br>
<p><?php echo anchor('index.php/doku', 'Lihat list'); ?></p>
</form>

</body>
</html>
