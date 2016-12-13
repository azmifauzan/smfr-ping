<?php $this->load->view('header'); ?>
<?php //print_r($status["1"]); ?>
<?php //echo $status[1][0]['status'] ?>

<div class="box-body">
<?php echo $map['html']; ?>
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
<?php $this->load->view('Footer'); ?>