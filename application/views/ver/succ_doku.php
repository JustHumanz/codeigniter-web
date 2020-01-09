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

$couter = '';
$VTAPIKEY="c2c9ed1b64a6d30db82d40e1eed25236bb3994a8ed23f1cd165e509e83f5bfc6";
$hash=$md5file;
$apiEndPoint="https://www.virustotal.com/vtapi/v2/file/report?";
$finalURL=$apiEndPoint."resource=$hash&apikey=".$VTAPIKEY;

$json=file_get_contents($finalURL);
$j=json_decode($json);
if($j->response_code==1){
  //echo "Success Found Hash";
  if($j->positives>0){
    //echo "File is Malicious with a score of $j->positives/$j->total";
    $couter = 'File ini mengandung virus';
  }else{
    //echo "File is Clean!";
    $couter = 'File ini aman';
  }
}
if($j->response_code==0){
  //echo "File or its analysis is not available on Virustotal";
  $couter = 'File ini aman';
}

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
    <b>Nama Dokumen		: '.$row->N_dokument.'</b>
    <br>
    <b>Tanggal Upload 	: '.$row->W_dokument.'</b>
    <br>
    <b>Nilai Hash		: '.$row->H_dokument.'</b>
    <br>
    <b>Informasi tambahan : '.$couter.'</b>
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
  <h1>DOKUEMN TIDAK DITEMUKAN DI DATABASE</h1>
  <h6 style="color:black">KEMUNGKINAN DOKUEMN PALSU ATAU SUDAH DIUBAH</h6>
  <br>
  <b>Informasi tambahan : '.$couter.'</b>
  <br>
  <button>
  '.anchor('ver', 'Kembali').'
  </button>

  </div>
  </body>
  </html> ';
}

?>


</body>
</html>
