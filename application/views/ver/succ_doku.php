<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>
<?php
$db2 = $this->load->database('db_2', TRUE);
$file =  $upload_data["full_path"];
$md5file = md5_file($file);
$query = $db2->query("select * from hash_dok.doku where H_dokument='".$md5file."';");

$row = $query->row();

if (isset($row))
{

  if ($row->H_dokument == $md5file) {
    echo "Dokumen ditemukan </br>
    Nama Dokumen : ".$row->N_dokument."</br>
    Tanggal Dokumen diunggah : ".$row->W_dokument."</br>
    Nilai Hash dari Dokumen tersebt : ".$row->H_dokument."</br>";
    echo anchor('ver', 'Upload Another File!');
  }
}
else {
  echo "Dokument tidak ditemukan didatabase,kemungkinan dokumen palsu atau sudah diubah </br>";
  echo anchor('ver', 'Upload Another File!');
}

?>


</body>
</html>
