<?php $this->load->view('header'); ?>
<?php //print_r($status["1"]); ?>
<?php //echo $status[1][0]['status'] ?>

<div class="judul">
  <div class="container">
    <h1>SMFR Ping Status</h1>
  </div>
</div>

<div class="container">
<div class="row">
<div class="col-md-12">
<iframe height="470" width="1150" style="border:none;" src="<?php echo site_url('dashboard/showmap'); ?>" name="rendermap" id="rendermap"></iframe>
<!--
<?php //echo $map['html']; ?><br/><input type="button" name="test" value="test" onclick="testb()">
<script type="text/javascript">
  function testb()
  {
    //alert('asdf');
    var iframe = document.getElementById("rendermap"); iframe.src = iframe.src;
  }
</script>
-->
</div>
<!--
<div class="col-md-3">
</div>
-->

<div class="row">
  <div class="table-responsive">
    <table class="table no-margin">
      <thead>
      <tr>
        <th>Perangkat</th>
        <th>Kota</th>
        <th>Ping Status</th>
        <th width="20%">Last Ping</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach($perangkat->result() as $pr) : ?>
      <tr>
        <td><?php echo $pr->nama_perangkat; ?></td>
        <td><?php echo $pr->nama_kota; ?></td>
        <?php if($status[$pr->id_perangkat] == 'n/a') : ?>
        	<td><span class="label label-warning">N/A</span></td>
        <?php elseif ($status[$pr->id_perangkat][0]['status'] == '0'): ?>
        	<td><span class="label label-danger">Timed Out</span></td>
        <?php else: ?>
        	<td><span class="label label-success">Reply</span></td>
        <?php endif; ?>
        <?php if($status[$pr->id_perangkat] == 'n/a') : ?>
        	<td>N/A</td>
        <?php else: ?>
        	<td><?php echo date('d F Y, H:i',strtotime($status[$pr->id_perangkat][0]['waktu'])) ?></td>
        <?php endif; ?>
      </tr>
  	  <?php endforeach; ?>
      </tbody>
     </table>
   </div>
   </div>
</div>
<?php $this->load->view('Footer'); ?>