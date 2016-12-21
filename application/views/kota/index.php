<?php $this->load->view('header'); ?>

<div class="ucp">
  <div class="container">
    <h1>Kota SMFR</h1>
  </div>
</div>

<div class="container">
  <div class="row">

	<div class="pull-right">
		<a href="<?php echo site_url('kota/add'); ?>" class="btn btn-success">Add</a> 
	</div><br/><br/>

	<table class="table table-striped table-bordered">
	    <tr>
			<td>Id Kota</td>
			<td>Nama Kota</td>
			<td>Keterangan</td>
			<td width="20%">Actions</td>
	    </tr>
		<?php foreach($kota as $k): ?>
	    <tr>
			<td><?php echo $k['id_kota']; ?></td>
			<td><?php echo $k['nama_kota']; ?></td>
			<td><?php echo $k['keterangan']; ?></td>
			<td>
	            <a href="<?php echo site_url('kota/edit/'.$k['id_kota']); ?>" class="btn btn-info">Edit</a> 
	            <a href="<?php echo site_url('kota/remove/'.$k['id_kota']); ?>" class="btn btn-danger">Delete</a>
	        </td>
	    </tr>
		<?php endforeach; ?>
	</table>

	</div>
</div>
<?php $this->load->view('footer'); ?>