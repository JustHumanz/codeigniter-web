<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Humanz</title>
  </head>
  <body>
    <?php echo validation_errors(); ?>
    <?php echo form_open('form/aksi'); ?>
    <font size="5">
    <center>Nilai</center>
  </font>
  <form action="" method="post">
    Tugas<input type="text" name="tugas"><br>
    UTS <input type="text" name="uts"><br>
    UAS <input type="text" name="uas"><br>
    <input type="submit" value="Hitung" name="kir">
  </form>
  </body>
</html>
