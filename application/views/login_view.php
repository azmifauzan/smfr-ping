<?php $this->load->view('header'); ?>
<?php //print_r($status["1"]); ?>
<?php //echo $status[1][0]['status'] ?>

<div class="judul">
  <div class="container">
    <h1>Login</h1>
  </div>
</div>

<p>&nbsp;</p><p>&nbsp;</p>

<div class="container">
  <div class="row">
    <?php echo form_open('auth/proses','class="form-horizontal"'); ?>        
    <div class="form-group">
        <label class="control-label col-sm-3" for="username">Username :</label>
        <div class="col-sm-4">
            <input class="form-control" type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>" required />
            <?php echo form_error('username','<span style="color:red">','</span>'); ?>
        </div>
    </div>                
    
    <div class="form-group">
        <label class="control-label col-sm-3" for="pass">Password :</label>
        <div class="col-sm-4">
            <input type="password" name="password" required class="form-control" placeholder="Password" />
            <?php echo form_error('password','<span style="color:red">','</span>'); ?>
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-3"></div>
        <div class="col-sm-2">
            <input type="submit" name="login" value="Masuk" class="btn btn-default" />                      
        </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
<?php $this->load->view('Footer'); ?>