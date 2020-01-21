<div class="pull-right">
	<a href="<?php echo site_url('doku/add'); ?>" class="btn btn-success">Tambah Dokumen</a>
	<a href="<?php echo site_url('Admin/');?>" class="btn btn-primary">Tambah Admin</a>
	<a href="<?php echo base_url()?>" class="btn btn-info">Validitasi Dokumen</a>
	<a href="<?php echo site_url('doku/log'); ?>" class="btn btn-warning">Lihat Log</a>
	<a href="<?php echo site_url('Login/logout');?>" class="btn btn-danger">Keluar</a>
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
            <a href="<?php echo site_url('doku/edit/'.$d['id']); ?>" class="btn btn-info btn-xs">Ubah</a>
            <a href="<?php echo site_url('doku/remove/'.$d['id']); ?>" class="btn btn-danger btn-xs">Hapus</a>
        </td>
    </tr>
	<?php } ?>
</table>
