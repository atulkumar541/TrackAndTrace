<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">List Of Refrences Delivery</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <?php if ($this->session->flashdata('message')) {?>
          <div class="alert alert-success"><?php echo $this->session->flashdata('message')  ?></div>
        <?php } ?>
  </div>
   <table class="table table-striped table-hover table-bordered table-responsive table-sm">
    <thead>
      <tr>
        <th>Reference_id</th>
        <th>Booking_number</th>
        <th>Shipping_bill_number</th>
        <th>Menifest_HBL_number</th>
        <th>HBL_number</th>
        <th>Container_number</th>
        <th>Shipping_invoice_number</th>
        <th>MAWB_number</th>
        <th>HAWB_number</th>
        <th>OBL_number</th>
        <th>OBL_date</th>
        <th>Packages</th>
        <th>Weight</th>
        <th>  Volume</th>
        <th>Origin</th>
        <th>Final_Destination</th>
        <th>BL_Type</th>
        <th>Shipment_status</th>
        <th>Internal_Package</th>
        <th>External_Package</th>
        <th>DO_number</th>
        <th>  DO_Order_date</th>
        <th>IGM_number</th>
        <th>  IGM_date</th>
        <th>Local_IGM_number</th>
        <th>Local_IGM_date</th>
        <th>Add_Milestone</th>
        <!--<th>Delete</th>-->
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($delivery)) { foreach ($delivery as $delivery) { ?>
        <tr>
          <td><?php echo $delivery['Reference_id'] ?></td>
          <td><?php echo $delivery['Booking_number'] ?></td>
          <td><?php echo $delivery['Shipping_bill_number'] ?></td>
          <td><?php echo $delivery['Menifest_HBL_number'] ?></td>
          <td><?php echo $delivery['HBL_number'] ?></td>
          <td><?php echo $delivery['Container_number'] ?></td>
          <td><?php echo $delivery['Shipping_invoice_number'] ?></td>
          <td><?php echo $delivery['MAWB_number'] ?></td>
          <td><?php echo $delivery['HAWB_number'] ?></td>
          <td><?php echo $delivery['OBL_number'] ?></td>
          <td><?php echo $delivery['OBL_date'] ?></td>
          <td><?php echo $delivery['Packages'] ?></td>
          <td><?php echo $delivery['Weight'] ?></td>
          <td><?php echo $delivery['Volume'] ?></td>
          <td><?php echo $delivery['Origin'] ?></td>
          <td><?php echo $delivery['Final_Destination'] ?></td>
          <td><?php echo $delivery['BL_Type'] ?></td>
          <td><?php echo $delivery['Shipment_status'] ?></td>
          <td><?php echo $delivery['Internal_Package'] ?></td>
          <td><?php echo $delivery['External_Package'] ?></td>
          <td><?php echo $delivery['DO_number'] ?></td>
          <td><?php echo $delivery['DO_Order_date'] ?></td>
          <td><?php echo $delivery['IGM_number'] ?></td>
          <td><?php echo $delivery['IGM_date'] ?></td>
          <td><?php echo $delivery['Local_IGM_number'] ?></td>
          <td><?php echo $delivery['Local_IGM_date'] ?></td>
          <td>
            <a href="<?php echo base_url().'Companydash/add_milestone/?Reference_id='.$delivery['Reference_id']?>" class="btn btn-primary btn-sm">Add Milestone</a>
          </td>
        </tr>
     <?php } } else { ?>
      <tr>
        <td colspan="5">Record not found!</td>
      </tr>
     <?php } ?>
      
    </tbody>
    <thead>
      <th>Reference_id</th>
        <th>Booking_number</th>
        <th>Shipping_bill_number</th>
        <th>Menifest_HBL_number</th>
        <th>HBL_number</th>
        <th>Container_number</th>
        <th>Shipping_invoice_number</th>
        <th>MAWB_number</th>
        <th>HAWB_number</th>
        <th>OBL_number</th>
        <th>OBL_date</th>
        <th>Packages</th>
        <th>Weight</th>
        <th>  Volume</th>
        <th>Origin</th>
        <th>Final_Destination</th>
        <th>BL_Type</th>
        <th>Shipment_status</th>
        <th>Internal_Package</th>
        <th>External_Package</th>
        <th>DO_number</th>
        <th>  DO_Order_date</th>
        <th>IGM_number</th>
        <th>  IGM_date</th>
        <th>Local_IGM_number</th>
        <th>Local_IGM_date</th>
        <th>Add Milestone</th>
    </thead>
   </table>
</div>