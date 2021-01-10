<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Add milestone</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div>
      </div>
      <div class="container">
        <?php echo form_open('Companydash/add_milestone'); ?>
      <!--<form class="needs-validation" action="" method="POST" novalidate>-->
      <div class="form-row">
        <div class="col-md-6 mb-4">
          <label for="validationCustom02">Milestone</label>
          <input type="text" name="Milestone" value="<?php echo set_value('Milestone') ?>" class="form-control" id="validationCustom02" placeholder="Milestone"   >
          <div class=" ">
            <?php echo form_error('Milestone','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-4">
          <label for="validationCustom02">Milestone date</label>
          <input type="date" name="Milestone_date" value="<?php echo set_value('Milestone_date') ?>" class="form-control" id="Milestone_date">
          <div class=" ">
            <?php echo form_error('Milestone_date','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-4">
          <!--<label for="Reference_id">Refrence Id</label>-->
          <input type="hidden" name="Reference_id" 
          value="<?php echo $this->input->get('Reference_id', TRUE); echo set_value('Reference_id');
              ?>" class="form-control" id="Reference_id">
          <div class=" ">
            <?php echo form_error('select_refrence','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit" name="addmilestone">Add Milestone</button>
      </div>
    </div>
  </div>   
</div>