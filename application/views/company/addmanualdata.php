<div class="content-wrapper">
  <?php if ($this->session->flashdata('message')) {?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('message')  ?></div>
  <?php } ?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a href="<?php echo base_url()?>Companydash/add_delivery" class="btn btn-danger btn-sm">Back</a>
          </ol>
        </div>
      </div>
      <?php echo form_open('Companydash/add_manual'); ?>
      <!--<form class="needs-validation" action="" method="POST" novalidate>-->
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Booking Number</label>
          <input type="text" name="Booking_number" value="<?php echo set_value('Booking_number') ?>" class="form-control" id="validationCustom02" placeholder="Booking Number"   >
          <div class=" ">
            <?php echo form_error('Booking_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Shipping Bill Number</label>
          <input type="text" name="Shipping_bill_number" value="<?php echo set_value('Shipping_bill_number') ?>" class="form-control" id="validationCustom03" placeholder="Shipping Bill Number"  >
          <div class=" ">
            <?php echo form_error('Shipping_bill_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom01">Manifest HBL Number</label>
          <input type="text" name="Menifest_HBL_number" value="<?php echo set_value('Menifest_HBL_number') ?>" class="form-control" id="validationCustom01" placeholder="Menifest HBL Number">
          <div class="">
            <?php echo form_error('Menifest_HBL_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom01">HBL Number</label>
          <input type="text" name="HBL_number" value="<?php echo set_value('HBL_number') ?>" class="form-control" id="validationCustom01" placeholder="HBL Number">
          <div class="">
            <?php echo form_error('HBL_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom02">Container Number</label>
          <input type="text" name="Container_number" value="<?php echo set_value('Container_number') ?>" class="form-control" id="validationCustom03" placeholder="Container Number"  >
          <div class=" ">
            <?php echo form_error('Container_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">Shipping Invoice Number</label>
          <input type="text" name="Shipping_invoice_number" value="<?php echo set_value('Shipping_invoice_number') ?>" class="form-control" id="validationCustom03" placeholder="Shipping Invoice Number"  >
          <div class=" ">
            <?php echo form_error('Shipping_invoice_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>        
      </div>
      <div class="form-row">        
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">MAWB Number</label>
          <input type="text" name="MAWB_number" value="<?php echo set_value('MAWB_number') ?>" class="form-control" id="validationCustom03" placeholder="MAWB Number">
            <div class=" ">
              <?php echo form_error('MAWB_number','<div class="error" style="color:red;">','</div>') ?>
            </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom04">HAWB Number</label>
          <input type="text" name="HAWB_number" value="<?php echo set_value('HAWB_number') ?>" class="form-control" id="validationCustom04" placeholder="HAWB Number">
          <div class=" ">
            <?php echo form_error('HAWB_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> OBL Number</label>
          <input type="text" name="OBL_number" value="<?php echo set_value('OBL_number') ?>" class="form-control" id="validationCustom05" placeholder="OBL Number">
          <div class=" ">
            <?php echo form_error('OBL_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> OBL Date</label>
          <input type="date" name="OBL_date" value="<?php echo set_value('OBL_date') ?>" class="form-control datepicker" id="validationCustom05" placeholder="OBL Date">
          
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> Packages</label>
          <input type="text" name="Packages" value="<?php echo set_value('Packages') ?>" class="form-control" id="validationCustom05" placeholder="Packages">
          <div class=" ">
            <?php echo form_error('Packages','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> Weight</label>
          <input type="text" name="Weight" value="<?php echo set_value('Weight') ?>" class="form-control" id="validationCustom05" placeholder="Weight" >
          <div class=" ">
            <?php echo form_error('Weight','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> Volume</label>
          <input type="text" name="Volume" value="<?php echo set_value('Volume') ?>" class="form-control" id="validationCustom05" placeholder="Volume" >
          <div class=" ">
            <?php echo form_error('Volume','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> Origin</label>
          <input type="text" name="Origin" value="<?php echo set_value('Origin') ?>" class="form-control" id="validationCustom05" placeholder="Origin"  >
          <div class=" ">
            <?php echo form_error('Origin','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03"><span style="color:red">*</span> Final Destination</label>
          <input type="text" name="Final_Destination" value="<?php echo set_value('Final_Destination') ?>" class="form-control" id="validationCustom03" placeholder="Final Destination"  >
          <div class=" ">
            <?php echo form_error('Final_Destination','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">BL Type</label>
          <input type="text" name="BL_Type" value="<?php echo set_value('BL_Type') ?>" class="form-control" id="validationCustom03" placeholder="BL Type"  >
          <div class=" ">
            <?php echo form_error('BL_Type','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05"><span style="color:red">*</span> Shipment Status</label>
          <input type="text" name="Shipment_status" value="<?php echo set_value('Shipment_status') ?>" class="form-control" id="validationCustom05" placeholder="Shipment Status"  >
          <div class=" ">
            <?php echo form_error('Shipment_status','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom05">Internal Package</label>
          <input type="text" name="Internal_Package" value="<?php echo set_value('Internal_Package') ?>" class="form-control" id="validationCustom05" placeholder="Internal Package"  >
          <div class=" ">
            <?php echo form_error('Internal_Package','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">External Package  </label>
          <input type="text" name="External_Package" value="<?php echo set_value('External_Package') ?>" class="form-control" id="validationCustom03" placeholder="External Package  "  >
          <div class=" ">
            <?php echo form_error('External_Package','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">DO Number</label>
          <input type="text" name="DO_number" value="<?php echo set_value('DO_number') ?>" class="form-control" id="validationCustom03" placeholder="DO Number"  >
          <div class=" ">
            <?php echo form_error('DO_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">DO Order Date</label>
          <input type="date" name="DO_Order_date" value="<?php echo set_value('DO_Order_date') ?>" class="form-control" id="validationCustom03" placeholder="DO Order Date"  >
          
        </div>
      </div>
      <!--<div class="form-row" style="padding-left: 10px;">
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="corporate" type="checkbox" id="inlineCheckbox1" value="corporate">
          <label class="form-check-label" for="inlineCheckbox1">Corporate</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="law_firm" type="checkbox" id="inlineCheckbox2" value="law_firm">
          <label class="form-check-label" for="inlineCheckbox2">Law Firm</label>
        </div>
      </div>-->
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">IGM Number</label>
          <input type="text" name="IGM_number" value="<?php echo set_value('IGM_number') ?>" class="form-control" id="validationCustom03" placeholder="IGM Number"  >
          <div class=" ">
            <?php echo form_error('IGM_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">IGM Date</label>
          <input type="date" name="IGM_date" value="<?php echo set_value('IGM_date') ?>" class="form-control" id="validationCustom03" placeholder="IGM Date"  >
        </div>
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">Local IGM Number</label>
          <input type="text" name="Local_IGM_number" value="<?php echo set_value('Local_IGM_number') ?>" class="form-control" id="validationCustom03" placeholder="Local IGM number"  >
          <div class=" ">
            <?php echo form_error('Local_IGM_number','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-4 mb-4">
          <label for="validationCustom03">Local IGM Date</label>
          <input type="date" name="Local_IGM_date" value="<?php echo set_value('Local_IGM_date') ?>" class="form-control" id="validationCustom03" placeholder="Local IGM Date">
          <div class=" ">
            <?php echo form_error('Local_IGM_date','<div class="error" style="color:red;">','</div>') ?>
          </div>
        </div>
      </div>
      <button class="btn btn-primary" type="submit" name="adddetails">Add Details</button>
  </div>
</div>
</div>