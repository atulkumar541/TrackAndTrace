<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Company Registration</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/navbar.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="">
  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#pablo">Track and Trace</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="example-navbar-success">
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
    <div class="container content-header">
      <div class=" container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" style="margin-left: 20%;">
            <h1 class="m-0 text-dark">Welcome To Company Registration</h1>
          </div>
        </div>
        <div class=" col-lg-8 card card-success" style="margin-left: 20%;">
          <div class="card-header">
            <h3 class="card-title">Create Company</h3>
            </div>
            <?php echo form_open('') ?>
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="company_code" value="<?php echo genRandString(); ?>" class="form-control" id="randText" readonly  >
              </div>
              <div class="form-group">
                <label for="Companyname">Company Name</label>
                <input type="text" name="company_name" value="<?php echo set_value('company_name') ?>" class="form-control" id="Companyname" placeholder="Enter Company Name">
                <?php echo form_error('company_name','<div class="error" style="color:red;">','</div>') ?>
              </div>
              <div class="form-group">
                <label for="Companyemail">Company Email address</label>
                <input type="text" name="company_email" value="<?php echo set_value('company_email') ?>" class="form-control" id="Companyemail" placeholder="Enter Company email">
                <?php echo form_error('company_email','<div class="error" style="color:red;">','</div>') ?>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Company Contact</label>
                <input type="text" name="company_cont" value="<?php echo set_value('company_cont') ?>" class="form-control" id="contact" placeholder="Enter Company Contact">
                <?php echo form_error('company_cont','<div class="error" style="color:red;">','</div>') ?>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Select Company Type</label>
                <select class="form-control" name="company_type">
                  <option value="" class="form-control active">Select Type</option>
                  <option value="Trader" class="form-control">Trader</option>
                  <option value="import" class="form-control">import</option>
                  <option value="Export" class="form-control">Export</option>
                  <option value="Transport" class="form-control">Transport</option>
                </select>
              </div>
            </div>
            <div class="card-footer">
              <input type="submit" name="submit" value="Register" class="btn btn-success"/>
            </div>
            <div class="card-footer">
              <a href="<?php echo base_url()?>/companylogin/login">Already have Register?</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
  function genRandString($length = 8)
    {
      $alphaNum = '0123456789';
      $charactersLength = strlen($alphaNum);
      $randString = '';
      for ($i = 0; $i < $length; $i++) 
        {
          $randString .= $alphaNum[rand(0, $charactersLength - 1)];
        }
        return $randString;
    }
?>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
