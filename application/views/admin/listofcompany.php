<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">List Of Company</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
   <table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>Company ID</th>
        <th>Company Name</th>
        <th>Comapny Email</th>
        <th>Company Code </th>
        <th>Company Contact</th>
        <th>Company Address</th>
        <th>City</th>
        <th>State</th>
        <th>Edit</th>
        <!--<th>Delete</th>-->
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($company)) { foreach ($company as $company) { ?>
        <tr>
          <td><?php echo $company['company_id'] ?></td>
          <td><?php echo $company['company_name'] ?></td>
          <td><?php echo $company['company_email'] ?></td>
          <td><?php echo $company['company_code'] ?></td>
          <td><?php echo $company['company_cont'] ?></td>
          <td><?php echo $company['company_addr'] ?></td>
          <td><?php echo $company['company_city'] ?></td>
          <td><?php echo $company['company_state'] ?></td>
          <td>
            <a href="<?php echo base_url().'admindash/edit_company/'.$company['company_id']?>" class="btn btn-primary btn-sm">Edit</a>
          </td>
          <!--<td>
            <<a href="" class="btn btn-danger btn-sm">delete</a>
          </td>        -->
        </tr>
     <?php } } else { ?>
      <tr>
        <td colspan="5">Record not found!</td>
      </tr>
     <?php } ?>
      
    </tbody>
   </table>
</div>