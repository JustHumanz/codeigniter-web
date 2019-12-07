<html>
<head>
<title>Admin Form</title>
</head>
<body>

<?php echo $error;?>
<form method="post">
  <label>Username</label><br/>
  <input type="text" name="user"><br/>

  <label>Password</label><br/>
  <input type="password" name="pass"><br/>

  <input type="submit" value="Kirim" name="kir">
</form>
</body>
</html>
