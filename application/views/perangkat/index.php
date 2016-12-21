<?php $this->load->view('header'); ?>
<div class="ucp">
  <div class="container">
    <h1>Perangkat SMFR</h1>
  </div>
</div>

<div class="container">
  <div class="row">

<div class="pull-right">
	<a href="<?php echo site_url('perangkat/add'); ?>" class="btn btn-success">Add</a> 
</div><br/><br/>

<table class="table table-striped table-bordered">
    <tr>
		<td>Nama Perangkat</td>
		<td>Kota</td>
		<td>Ip Address</td>
		<td>Keterangan</td>
		<td>Latitude</td>
		<td>Longitude</td>
		<td>Actions</td>
    </tr>
	<?php foreach($perangkat as $p): ?>
    <tr>
    	<td><?php echo $p['nama_perangkat']; ?></td>
		<td><?php echo $p['nama_kota']; ?></td>
		<td><?php echo $p['ip_address']; ?></td>
		<td><?php echo $p['keterangan']; ?></td>
		<td><?php echo $p['latitude']; ?></td>
		<td><?php echo $p['longitude']; ?></td>
		<td>
            <a href="<?php echo site_url('perangkat/edit/'.$p['id_perangkat']); ?>" class="btn btn-info">Edit</a> 
            <a href="<?php echo site_url('perangkat/remove/'.$p['id_perangkat']); ?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
	<?php endforeach; ?>
</table>

</div>
</div>
<?php $this->load->view('footer'); ?>