<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/tarack.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/trackntrace.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <style>
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 40%;
    }

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container {
      padding: 2px 16px;
    }
</style>
</head>
<body>

  <div class="topbar dark topbar-padding">
        <div class="container">
          <div class="topbar-left-items">
            <ul class="toplist toppadding pull-left paddtop1">
              <li class="rightl">Customer Care</li>
              <li>(888) 000-0000</li>
            </ul>
          </div>
          <!--end left-->
          
          <div class="topbar-right-items pull-right">
            <ul class="toplist toppadding">
              <li><a href="https://www.facebook.com/superbwebdeveloper"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://twitter.com/superbdeveloper"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li class="dropdown"><a class="dropdown-toggle btn btn-red-4  btn-small" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in" > Login <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li id="dropdown-itemlogin"><a href="<?php base_url();?>Companylogin/login">Company</a></li>
                  <li id="dropdown-itemlogin"><a href="<?php base_url();?>Adminlogin/login">Admin</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    <div id="header">
        <div class="fluid nopadding">
          <div class="navbar red-4 navbar-default yamm">
            <div class="navbar-header">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <div class="logo"><a href="" class="navbar-brand less-top-padding"><!--<img src="https://via.placeholder.com/125x43/FFFFFF" alt=""/>-->Track & Trace</a></div>
            </div>
            <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
              <ul class="nav red-4 navbar-nav">
                <li><a href="#" class="dropdown-toggle active"><span class="glyphicon glyphicon-home" > Home</a></li>
                <li><a href="<?php base_url();?>home/mytrackntrace" class="dropdown-toggle">My Track & Trace</a></li>
                <li><a href="#" class="dropdown-toggle ">About</a></li>
                <li><a href="#" class="dropdown-toggle">Blog</a></li>
                <li><a href="#" class="dropdown-toggle">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
  <div class="container">
      <div class="row justify-content-center mx-auto">
        <div class="col-md-8 ">
          <div class="card card-header" style="width: 100%">
            <div class="card-body mx-auto">
                <img src="<?php echo base_url(); ?>assets/image/tick (1).png" alt="" style="width:10%;margin-left: 40% ">
                <div class="container">
                <h2>Your Registration successfully completed</h2>
                 <p>wait a moment Our techinical Sopport contact you</p>
                
                 
              </div>              
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>




