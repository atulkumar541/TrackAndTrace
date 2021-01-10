  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Welcome</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="<?php echo base_url()?>Companydash/add_delivery" class="btn btn-danger btn-sm">Back</a>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
    <div class="container">
    <br />
    <form method="post" id="import_form" enctype="multipart/form-data">
      <div class="custom-file">
        <label lass="custom-file-label">Select Excel File</label>
        <input type="file" name="file" id="file" class="form-control-file" required accept=".xls, .xlsx, .csv" />
      </div>
      <div class="" style="margin-top: 20px;">
        <input type="submit" name="import" value="Import Excel" class="btn btn-info" />
      </div>
    </form>
    <br />
    <div class="table-responsive" id="customer_data">

    </div>
  </div>
   
</div>

<script>
$(document).ready(function(){

  load_data();

  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>Csv_import/fetch",
      method:"POST",
      success:function(data){
        $('#customer_data').html(data);
      }
    })
  }

  $('#import_form').on('submit', function(event){
    event.preventDefault();
    $.ajax({
      url:"<?php echo base_url(); ?>Csv_import/import",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      success:function(data){
        $('#file').val('');
        load_data();
        alert(data);
      }
    })
  });

});
</script>

