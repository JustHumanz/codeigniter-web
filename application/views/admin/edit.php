<?php echo form_open('admin/edit/'.$admin['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="Username" value="<?php echo ($this->input->post('Username') ? $this->input->post('Username') : $admin['Username']); ?>" class="form-control" id="Username" />
		</div>
	</div>
	<div class="form-group">
		<label for="Password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="Password" value="<?php echo ($this->input->post('Password') ? $this->input->post('Password') : $admin['Password']); ?>" class="form-control" id="Password" />
		</div>
	</div>
	<div class="form-group">
		<label for="Nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" name="Nama" value="<?php echo ($this->input->post('Nama') ? $this->input->post('Nama') : $admin['Nama']); ?>" class="form-control" id="Nama" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>