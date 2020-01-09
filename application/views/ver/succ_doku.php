<html>
<head>
<title>Upload Form</title>
</head>
<body>

<?php
$db2 = $this->load->database('db_2', TRUE);
$file =  $upload_data["full_path"];
$md5file = md5_file($file);
$query = $db2->query("select * from hash_dok.doku where H_dokument='".$md5file."';");

$row = $query->row();

if (isset($row))
{

  if ($row->H_dokument == $md5file) {
    echo '<!DOCTYPE html>
    <html>
    <link rel="stylesheet" type="text/css" href="'.base_url().'/css/freelancer.css">
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
    <h1>DOKUEMN DITEMUKAN</h1>
    <b>Nama Dokumen		:'.$row->N_dokument.'</b>
    <br>
    <b>Tanggal Upload 	: '.$row->W_dokument.'</b>
    <br>
    <b>Nilai Hash		: '.$row->H_dokument.'</b>
    <br>

    <br>
    <button>
     '.anchor('ver', 'Kembali').'
    </button>


    </div>
    </body>
    </html> ';
  }
}
else {
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
  <h1>DOKUEMN TIDAK DITEMUKAN DI DATABASE,KEMUNGKINAN DOKUEMN PALSU ATAU SUDAH DIUBAH</h1>
  <br>
  <button>
   Kembali
  </button>
  '.anchor('ver', 'Upload Another File!').'

  </div>
  </body>
  </html> ';
}

?>


</body>
</html>
