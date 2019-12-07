<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td width = "10%">ID</td>
            <td width = "10%">Nama Dokumen</td>
            <td width = "10%">Hash Dokumen</td>
            <td width = "10%">Tanggal diunggah Dokumen</td>
    </tr>

            <?php foreach($up_dat->result() as $field){
              ?>

                <tr>
                    <td><?php echo $field->id?></td>
                    <td><?php echo $field->N_dokument?></td>
                    <td><?php echo $field->H_dokument?></td>
                    <td><?php echo $field->W_dokument?></td>
                </tr>
            <?php
            }?>
</table>
<a href="<?php echo site_url('UAS/logout'); ?>">Logout</a>
  </body>
</html>
