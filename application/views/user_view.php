<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td width = "10%">Username</td>
            <td width = "10%">Email</td>
            <td width = "10%">Tgl pembuatan akun</td>
    </tr>

            <?php foreach($users as $field){
              ?>

                <tr>
                    <td><?php echo $field->username?></td>
                    <td><?php echo $field->email?></td>
                    <td><?php echo $field->tgl?></td>
                </tr>
            <?php
            }?>
</table>
  </body>
</html>
