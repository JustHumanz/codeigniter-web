<html>
<head>
<title>Upload Form</title>
</head>
<body>


<?php
$file =  $upload_data["full_path"];
$md5file = md5_file($file);

$db2 = $this->load->database('db_2', TRUE);
$query = $db2->query("select * from hash_dok.doku where H_dokument='".$md5file."';");
$row = $query->row();

if (isset($row))
{
  if ($row->H_dokument == $md5file) {
    echo '<!DOCTYPE html>
    <html>
    <link rel="stylesheet" type="text/css" href="'.base_url().'css/freelancer.css">
    <link href="'.base_url().'css/util.css" rel="stylesheet">
     <link href="'.base_url().'css/main.css" rel="stylesheet">
    <head>
    	<title></title>
    </head>
    <body>
    	 <header class="masthead bg-primary text-white text-center">
    <div class="jembut">
    <br>
    <img class="masthead-avatar mb-5" src="'.base_url().'img/avataaars.svg" alt="">
    <h1>DOKUMEN SUDAH PERNAH DIUNGGAH</h1>
    <b>Nama Dokumen		: '.$row->N_dokument.'</b>
    <br>
    <b>Tanggal Upload 	: '.$row->W_dokument.'</b>
    <br>
    <br>

    <br>
    <button>
     '.anchor('doku/add', 'Kembali').'
    </button>

    </div>
    </body>
    </html>';
    $file_log = "\ntanggal\t\t$date\nStatus\t\t\tDOKUMEN SUDAH PERNAH DIUNGGAH\nPengunggah\t\t$username\nAlamat IP\t\t$ip_address\nNama Dokumen\t\t$row->N_dokument\nNilai Hash Dokumen\t$row->W_dokument\n\n___________________________________________________________________________";
    $filedir = fopen($upload_data['file_path'] . "/log.txt","a+");
    fwrite($filedir,$file_log);
    fclose($filedir);
  }
}
else {
  $sql = "insert into doku (N_dokument,H_dokument,W_dokument)
  VALUES (".$db2->escape($nama).", ".
  $db2->escape($md5file).", ".
  $db2->escape($tgl).")";
  $db2->query($sql);
  echo '<!DOCTYPE html>
  <html>
  <link rel="stylesheet" type="text/css" href="'.base_url().'css/freelancer.css">
  <link href="'.base_url().'css/util.css" rel="stylesheet">
   <link href="'.base_url().'css/main.css" rel="stylesheet">
  <head>
  	<title></title>
  </head>
  <body>
  	 <header class="masthead bg-primary text-white text-center">
  <div class="jembut">
  <br>
  <img class="masthead-avatar mb-5" src="'.base_url().'img/avataaars.svg" alt="">
  <h1>UNGGAH DOKUMEN BERHASIL</h1>
  <br>
  <button>
   '.anchor('doku/add', 'Kembali').'
  </button>
  <br>
  <br>
  <button>
  '.anchor('doku', 'Lihat list').'
  </button>

  </div>
  </body>
  </html> ';
  $file_log = "\ntanggal\t\t$date\nStatus\t\t\tUNGGAH DOKUMEN BERHASIL\nPengunggah\t\t$username\nAlamat IP\t\t$ip_address\nNama Dokumen\t\t$nama\nNilai Hash Dokumen\t$md5file\n\n___________________________________________________________________________";
  $filedir = fopen($upload_data['file_path'] . "/log.txt","a+");
  fwrite($filedir,$file_log);
  fclose($filedir);
}

 ?>
</body>
</html>
