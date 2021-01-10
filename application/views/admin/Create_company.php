
<div class="content-wrapper">
  <?php if ($this->session->flashdata('message')) {?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('message')  ?></div>
      <?php } ?>
  <div class="content-header">
    <div class=" container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Welcome Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            Create Company
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class=" col-lg-10 card card-success">
    <div class="card-header">
      <h3 class="card-title">Create Company</h3>
    </div>
      <?php echo form_open('admindash/create_company') ?>
        <div class="card-body">
          <div class="form-group">
            <input type="hidden" name="company_code" value="<?php echo genRandString(); ?>" class="form-control" id="randText" readonly  >
          </div>
          <div class="form-group">
            <label for="Companyname"><span style="color:red;">*</span>Company Name</label>
            <input type="text" name="company_name" value="<?php echo set_value('company_name') ?>" class="form-control" id="Companyname" placeholder="Enter Company Name">
            <?php echo form_error('company_name','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <div class="form-group">
            <label for="Companyemail"><span style="color:red;">*</span>Company Email address</label>
            <input type="text" name="company_email" value="<?php echo set_value('company_email') ?>" class="form-control" id="Companyemail" placeholder="Enter Company email">
            <?php echo form_error('company_email','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"><span style="color:red;">*</span>Company Contact</label>
            <input type="text" name="company_cont" value="<?php echo set_value('company_cont') ?>" class="form-control" id="contact" placeholder="Enter Company Contact">
            <?php echo form_error('company_cont','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company Address</label>
            <input type="text" name="company_addr" value="<?php echo set_value('company_addr') ?>" class="form-control" id="contact" placeholder="Enter Full Address">
            <?php echo form_error('company_addr','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company City</label>
            <input type="text" name="company_city" value="<?php echo set_value('company_city') ?>" class="form-control" id="contact" placeholder="Enter City">
            <?php echo form_error('company_city','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Company State</label>
            <input type="text" name="company_state" value="<?php echo set_value('company_state') ?>" class="form-control" id="contact" placeholder="Enter State">
            <?php echo form_error('company_state','<div class="error" style="color:red;">','</div>') ?>
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
            <input type="submit" name="submit" value="Create" class="btn btn-success"/>
          </div>
    </div>
    </div><!-- /.container-fluid -->
  
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