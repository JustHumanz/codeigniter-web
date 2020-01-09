<div class="pull-right">
	<a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success">Add Admin</a>
	<a href="<?php echo site_url('doku/');?>" class="btn btn-primary">Dokumen list</a>
	<a href="<?php echo site_url('ver/');?>" class="btn btn-info">Validitasi Dokumen</a>
	<a href="<?php echo site_url('Login/logout');?>" class="btn btn-danger">Logout</a>
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Username</th>
		<th>Password</th>
		<th>Nama</th>
		<th>Actions</th>
    </tr>
	<?php foreach($admin as $A){ ?>
    <tr>
		<td><?php echo $A['id']; ?></td>
		<td><?php echo $A['Username']; ?></td>
		<td><?php echo $A['Password']; ?></td>
		<td><?php echo $A['Nama']; ?></td>
		<td>
            <a href="<?php echo site_url('admin/edit/'.$A['id']); ?>" class="btn btn-info btn-xs">Edit</a>
            <a href="<?php echo site_url('admin/remove/'.$A['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
