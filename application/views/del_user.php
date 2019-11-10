<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('Test_form/delete'); ?>
    <?php echo anchor('Test_form', 'Input data lagi'); ?> <br>
    <table cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td width = "10%">ID</td>
            <td width = "10%">Username</td>
            <td width = "10%">Email</td>
            <td width = "10%">Tgl pembuatan akun</td>
    </tr>

            <?php foreach($users as $field){
              ?>

                <tr>
                    <td><?php echo $field->id?></td>
                    <td><?php echo $field->username?></td>
                    <td><?php echo $field->email?></td>
                    <td><?php echo $field->tgl?></td>
                </tr>
            <?php
            }?>
</table>
<h3><center>Delete User</center></h3>

<form method="POST" name="form" action="">
  <label>ID</label><br/>
    <input type="text" name="id"><br/>
  <label>Username</label><br/>
    <input type="text" name="user"><br/>
    <input type="submit" value="Kirim" name="send">
</form>
  </body>
</html>
