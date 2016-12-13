<?php $this->load->view('header'); ?>
<?php echo validation_errors(); ?>
<?php echo form_open('kota/edit/'.$kotum['id_kota'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_kota" class="col-md-4 control-label">Nama Kota</label>
		<div class="col-md-8">
			<input type="text" name="nama_kota" value="<?php echo ($this->input->post('nama_kota') ? $this->input->post('nama_kota') : $kotum['nama_kota']); ?>" class="form-control" id="nama_kota" />
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-4 control-label">Keterangan</label>
		<div class="col-md-8">
			<textarea name="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $kotum['keterangan']); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
<?php $this->load->view('footer'); ?>