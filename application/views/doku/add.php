<?php echo form_open('doku/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="N_dokument" class="col-md-4 control-label">N Dokument</label>
		<div class="col-md-8">
			<input type="text" name="N_dokument" value="<?php echo $this->input->post('N_dokument'); ?>" class="form-control" id="N_dokument" />
		</div>
	</div>
	<div class="form-group">
		<label for="H_dokument" class="col-md-4 control-label">H Dokument</label>
		<div class="col-md-8">
			<input type="text" name="H_dokument" value="<?php echo $this->input->post('H_dokument'); ?>" class="form-control" id="H_dokument" />
		</div>
	</div>
	<div class="form-group">
		<label for="W_dokument" class="col-md-4 control-label">W Dokument</label>
		<div class="col-md-8">
			<input type="text" name="W_dokument" value="<?php echo $this->input->post('W_dokument'); ?>" class="form-control" id="W_dokument" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>