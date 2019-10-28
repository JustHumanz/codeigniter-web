<html>
   <head>
      <title>My Form</title>
   </head>
   <body>
      <h3>Your form was successfully submitted!</h3>
      <p><?php echo "Username Kamu ".$username." </br> Email Kamu ".$email; ?></p>
      <p><?php echo anchor('Test_form/user', 'Lihat data'); ?></p>
      <p><?php echo anchor('Test_form', 'Input data lagi'); ?></p>
   </body>
</html>
