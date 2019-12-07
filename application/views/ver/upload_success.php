<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<?php
//print_r($upload_data);
//print_r($nama);
$file =  $upload_data["full_path"];
$md5file = md5_file($file);
//echo $md5file;?>
<?php
$tgl = date('Y-m-d');
$db2 = $this->load->database('db_2', TRUE);
$query = $db2->query("select * from hash_dok.doku where H_dokument='".$md5file."';");
$row = $query->row();

if (isset($row))
{
  if ($row->H_dokument == $md5file) {
    echo "Dokumen sudah pernah diunggah\n
    Nama Dokumen \t:".$row->N_dokument."\n
    Tanggal Dokumen diunggah \t:".$row->W_dokument;
  }
}
else {
  $sql = "insert into doku (N_dokument,H_dokument,W_dokument)
  VALUES (".$db2->escape($nama).", ".
  $db2->escape($md5file).", ".
  $db2->escape($tgl).")";
  $db2->query($sql);
}

 ?>
<p><?php echo anchor('doku/add', 'Upload Another File!'); ?></p>
<p><?php echo anchor('doku', 'Lihat list'); ?></p>

</body>
</html>
