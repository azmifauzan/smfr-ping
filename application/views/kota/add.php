<?php $this->load->view('header'); ?>

<div class="ucp">
  <div class="container">
    <h1>Tambah Kota SMFR</h1>
  </div>
</div>

<p>&nbsp;</p>
<div class="container">
  <div class="row">

<?php echo validation_errors(); ?>
<?php echo form_open('kota/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nama_kota" class="col-md-2 control-label">Nama Kota</label>
		<div class="col-md-8">
			<input type="text" name="nama_kota" value="<?php echo $this->input->post('nama_kota'); ?>" class="form-control" id="nama_kota" />
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-2 control-label">Keterangan</label>
		<div class="col-md-8">
			<textarea name="keterangan" class="form-control" id="keterangan"><?php echo $this->input->post('keterangan'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

</div>
</div>
<?php echo form_close(); ?>
<?php $this->load->view('footer'); ?>