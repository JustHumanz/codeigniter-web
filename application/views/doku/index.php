<div class="pull-right">
	<a href="<?php echo site_url('index.php/doku/add'); ?>" class="btn btn-success">Add</a>
	<a href="<?php echo site_url('index.php/Login/logout');?>" class="btn btn-danger">Logout</a>
	<a href="<?php echo site_url('index.php/Admin/');?>" class="btn btn-primary">Add user</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nama Dokumen</th>
		<th>Hash Dokumen</th>
		<th>Waktu Dokumen diunggah</th>
		<th>Actions</th>
    </tr>
	<?php foreach($doku as $d){ ?>
    <tr>
		<td><?php echo $d['id']; ?></td>
		<td><?php echo $d['N_dokument']; ?></td>
		<td><?php echo $d['H_dokument']; ?></td>
		<td><?php echo $d['W_dokument']; ?></td>
		<td>
            <a href="<?php echo site_url('index.php/doku/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Edit</a>
            <a href="<?php echo site_url('index.php/doku/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
