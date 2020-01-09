<?php echo form_open('doku/edit/'.$doku['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="N_dokument" class="col-md-4 control-label">Nama Dokument</label>
		<div class="col-md-8">
			<input type="text" name="N_dokument" value="<?php echo ($this->input->post('N_dokument') ? $this->input->post('N_dokument') : $doku['N_dokument']); ?>" class="form-control" id="N_dokument" />
		</div>
	</div>
	<div class="form-group">
		<label for="W_dokument" class="col-md-4 control-label">Waktu Dokument diunggah</label>
		<div class="col-md-8">
			<input type="text" name="W_dokument" value="<?php echo ($this->input->post('W_dokument') ? $this->input->post('W_dokument') : $doku['W_dokument']); ?>" class="form-control" id="W_dokument" />
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
