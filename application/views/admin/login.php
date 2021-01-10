<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Welcome To Admin login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets//plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets//dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="">
  <nav class="navbar navbar-expand-lg bg-primary">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="#pablo">Track and Trace</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse" id="example-navbar-primary">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="<?php base_url();?>../home">
                      <i class="now-ui-icons objects_globe"></i>
                      <p>Home</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                      <i class="now-ui-icons users_circle-08"></i>
                      <p>About</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#pablo">
                      <i class="now-ui-icons ui-1_settings-gear-63"></i>
                      <p>Contact</p>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
<div class="login-box" style="margin-left: 450px; margin-top: 100px;">
  <div class="login-logo card card-header" style="width:550px; margin-bottom: -0.1rem; ">
    <a href="#"><b>Admin Login
  </div>
  <!-- /.login-logo -->
  <div class="card" style="width:550px">
    <div class="card-body login-card-body">
      <?php if ($this->session->flashdata('message')) {?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('message')  ?></div>
      <?php } ?>
      <p class="login-box-msg">Sign in to start your session</p>

      <?php echo form_open('Adminlogin/login', array('id'=>'loginform')) ?>
        <div class="input-group mb-3">
          <input type="text" name="email" class="form-control" value="<?php echo set_value('email') ?>" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('email','<div class="error" style="color:red;">','</div>') ?>
        <?php //echo strip_tags('email') ?>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" value="<?php echo set_value('password') ?>" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('password','<div class="error" style="color:red;">','</div>') ?>
        <div class="row">
          <!-- /.col -->
            <input type="submit" name="submit" value="Login"  class="btn btn-primary btn-block"/> 
          <!-- /.col -->
        </div>
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>

</body>
</html>
