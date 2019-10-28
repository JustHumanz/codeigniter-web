<html>
<head>
	<title></title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>
	<?php echo form_open('Test_form'); ?>
		<label>Username</label><br/>
		<input type="text" name="username"><br/>

		<label>Password</label><br/>
		<input type="password" name="password"><br/>

		<label>Email</label><br/>
		<input type="text" name="email"><br/>

		<input type="submit" value="Kirim" name="kir">
	</form>
</body>
</html>
