<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table cellpadding="0" cellspacing="0" width="100%">
    <tr>
            <td width = "10%">NRP</td>
            <td width = "20%">Nama</td>
            <td width = "30%">Kode_MK</td>
            <td width = "10%">Kelas</td>
    </tr>

            <?php foreach($csvData as $field){
              if ($field['Kelas']!=$kel) {
                continue;
              }else{
              ?>

                <tr>
                    <td><?php echo $field['NRP']?></td>
                    <td><?php echo $field['Nama']?></td>
                    <td><?php echo $field['Kode_MK']?></td>
                    <td><?php echo $field['Kelas']?></td>
                </tr>
            <?php }
            }?>
</table>
  </body>
</html>
