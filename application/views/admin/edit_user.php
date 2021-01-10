
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
            Edit Company User
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class=" col-lg-10 card card-success">
    <div class="card-header">
      <h3 class="card-title">Edit User</h3>
    </div>
      <?php echo form_open('admindash/edit_user/'.$user['user_id']) ?>
        <div class="card-body">
          <!--<div class="form-group">
            <label for="exampleInputPassword1">Select Company</label>
            <select class="form-control" name="selctcompany">
              <option value="<?php //echo set_value('selctcompany',$user['company_id']); ?>" class="form-control active">Select Company</option>
              <?php 
              //foreach ($sel_company as $row) 
              {
                //echo '<option value="'.$row->company_id.  '" class="form-control">'.$row->company_name.'</option>';
              }
               ?>
            </select>
            <?php //echo form_error('selctcompany','<div class="error" style="color:red;">','</div>') ?>
          </div>  -->  
          <div class="form-group">
            <label for="Companyname">User Name</label>
            <input type="text" name="user_name" value="<?php echo set_value('user_name',$user['user_name']); ?>" class="form-control" id="Companyname" placeholder="Enter User Name">
            <?php echo form_error('user_name','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <div class="form-group">
            <label for="Companyemail">User Email address</label>
            <input type="text" name="user_email" value="<?php echo set_value('user_email',$user['user_email']); ?>" class="form-control" id="Companyemail" placeholder="Enter User email">
            <?php echo form_error('user_email','<div class="error" style="color:red;">','</div>') ?>
          </div>
          <!--<div class="form-group">
            <label for="exampleInputEmail1">User Password</label>
            <input type="text" name="user_pass" value="12345" class="form-control" id="contact" placeholder="" disabled>
            <?php //echo form_error('user_pass','<div class="error" style="color:red;">','</div>') ?>
          </div>-->          
          </div>
          <div class="card-footer">
            <input type="submit" name="submit" value="Update User" class="btn btn-success"/>
          </div>
    </div>
    </div>  
  </div>
</div>