<!DOCTYPE html>
<html>

	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- CSS styles -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

	    <!-- JS Libs -->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js" type="text/javascript"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>

    <div class="pull-right">
    	<a href="<?php echo site_url('admin/'); ?>" class="btn btn-success">Daftar Admin</a>
    	<a href="<?php echo site_url('doku/');?>" class="btn btn-primary">Daftar Dokumen</a>
    	<a href="<?php echo base_url()?>" class="btn btn-info">Validitasi Dokumen</a>
			<a href="<?php echo site_url('doku/log'); ?>" class="btn btn-warning">Lihat Log</a>
    	<a href="<?php echo site_url('Login/logout');?>" class="btn btn-danger">Keluar</a>
    </div>

    <?php
    $file = fopen("uploads/log.txt", "r") or exit("Unable to open file!");
    //Output a line of the file until the end is reached
    while(!feof($file))
      {
      echo fgets($file). "<br>";
      }
    fclose($file);
    ?>

	</body>
</html>
