<?php $this->load->view('header'); ?>
<div class="ucp">
  <div class="container">
    <h1>Edit Perangkat SMFR</h1>
  </div>
</div>

<p>&nbsp;</p>
<div class="container">
  <div class="row">

<?php echo validation_errors(); ?>
<?php echo form_open('perangkat/edit/'.$perangkat['id_perangkat'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="id_kota" class="col-md-2 control-label">Kota</label>
		<div class="col-md-4">
			<select name="id_kota" class="form-control">
				<option value="">select kota</option>
				<?php 
				foreach($all_kota as $kotum)
				{
					$selected = "";
					if($kotum['id_kota'] == $perangkat['id_kota'])
						$selected = 'selected="selected"';

					echo "<option value='".$kotum['id_kota']."' $selected>".$kotum['nama_kota'].'</option>';
				} 
				?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="nama_perangkat" class="col-md-2 control-label">Nama Perangkat</label>
		<div class="col-md-8">
			<input type="text" name="nama_perangkat" value="<?php echo ($this->input->post('nama_perangkat') ? $this->input->post('nama_perangkat') : $perangkat['nama_perangkat']); ?>" class="form-control" id="nama_perangkat" />
		</div>
	</div>
	<div class="form-group">
		<label for="ip_address" class="col-md-2 control-label">Ip Address</label>
		<div class="col-md-8">
			<input type="text" name="ip_address" value="<?php echo ($this->input->post('ip_address') ? $this->input->post('ip_address') : $perangkat['ip_address']); ?>" class="form-control" id="ip_address" />
		</div>
	</div>
	<div class="form-group">
		<label for="keterangan" class="col-md-2 control-label">Keterangan</label>
		<div class="col-md-8">
			<textarea class="form-control" name="keterangan"><?php echo ($this->input->post('keterangan') ? $this->input->post('keterangan') : $perangkat['keterangan']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="ip_address" class="col-md-2 control-label">Latitude</label>
		<div class="col-md-8">
			<input type="text" name="latitude" value="<?php echo ($this->input->post('latitude') ? $this->input->post('latitude') : $perangkat['latitude']); ?>" class="form-control" id="latitude" />
		</div>
	</div>
	<div class="form-group">
		<label for="ip_address" class="col-md-2 control-label">Longitude</label>
		<div class="col-md-8">
			<input type="text" name="longitude" value="<?php echo ($this->input->post('longitude') ? $this->input->post('longitude') : $perangkat['longitude']); ?>" class="form-control" id="longitude" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>

</div>
</div>
<?php $this->load->view('footer'); ?>