<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">List Of User</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
      <?php if ($this->session->flashdata('success')) {?>
        <div class="alert alert-success"><?php echo $this->session->flashdata('success')  ?></div>
      <?php } ?>
      <?php if ($this->session->flashdata('failed')) {?>
        <div class="alert alert-danger"><?php echo $this->session->flashdata('failed')  ?></div>
      <?php } ?>
   <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th> ID</th>
        <th>User Name</th>
        <th>User Email</th>
        <th>User Password</th>
        <th>User Status</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($user)) { foreach ($user as $user) { ?>
        <tr>
          <td><?php echo $user['user_id'] ?></td>
          <td><?php echo $user['user_name'] ?></td>
          <td><?php echo $user['user_email'] ?></td>
          <td><?php echo $user['user_password'] ?></td>
          <td>
            <?php
              $status = $user['status'];
              if ($status == 1) 
              { 
            ?>
                <a href="update_status?sid=<?php echo $user['user_id'];?>&sval=<?php echo $user['status']; ?>" class="btn btn-success btn-sm">Active</a>
            <?php 
              }
              else
              {
            ?>
                <a href="update_status?sid=<?php echo $user['user_id'];?>&sval=<?php echo $user['status']; ?>" class="btn btn-danger btn-sm">Inactive</a>
            <?php 
              }
            ?>
            
          </td>
          <td>
            <a href="<?php echo base_url().'admindash/edit_user/'.$user['user_id']?>" class="btn btn-primary btn-sm">Edit</a>
          </td>        
        </tr>
     <?php } } else { ?>
      <tr>
        <td colspan="5">Record not found!</td>
      </tr>
     <?php } ?>
      
    </tbody>
   </table>
</div>