<div class="content-wrapper">
  <?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-success"><?php echo $this->session->flashdata('success')
  ?></div>
  <?php } ?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Of Refrences Delivery</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
    <!--<?php //if ($this->session->flashdata('message')) {?>
          <div class="alert alert-success"><?php //echo $this->session->flashdata('message')  ?></div>
        <?php// } ?>-->
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
        <th>Edit</th>
        <!--<th>Delete</th>-->
      </tr>
    </thead>
    <tbody>
      <?php if (!empty($manage)) { foreach ($manage as $manage) { ?>
        <tr>
          <td><?php echo $manage['Reference_id'] ?></td>
          <td><?php echo $manage['Booking_number'] ?></td>
          <td><?php echo $manage['Shipping_bill_number'] ?></td>
          <td><?php echo $manage['Menifest_HBL_number'] ?></td>
          <td><?php echo $manage['HBL_number'] ?></td>
          <td><?php echo $manage['Container_number'] ?></td>
          <td><?php echo $manage['Shipping_invoice_number'] ?></td>
          <td><?php echo $manage['MAWB_number'] ?></td>
          <td><?php echo $manage['HAWB_number'] ?></td>
          <td><?php echo $manage['OBL_number'] ?></td>
          <td><?php echo $manage['OBL_date'] ?></td>
          <td><?php echo $manage['Packages'] ?></td>
          <td><?php echo $manage['Weight'] ?></td>
          <td><?php echo $manage['Volume'] ?></td>
          <td><?php echo $manage['Origin'] ?></td>
          <td><?php echo $manage['Final_Destination'] ?></td>
          <td><?php echo $manage['BL_Type'] ?></td>
          <td><?php echo $manage['Shipment_status'] ?></td>
          <td><?php echo $manage['Internal_Package'] ?></td>
          <td><?php echo $manage['External_Package'] ?></td>
          <td><?php echo $manage['DO_number'] ?></td>
          <td><?php echo $manage['DO_Order_date'] ?></td>
          <td><?php echo $manage['IGM_number'] ?></td>
          <td><?php echo $manage['IGM_date'] ?></td>
          <td><?php echo $manage['Local_IGM_number'] ?></td>
          <td><?php echo $manage['Local_IGM_date'] ?></td>
          <td>
            <a href="<?php echo base_url().'Companydash/edit_delivery/'.$manage['Reference_id']?>" class="btn btn-primary btn-sm btn-block">Edit</a>
          </td>
          <!--<td>
            <a href="<?php echo base_url().'Companydash/delete_delivery/'.$manage['Reference_id']?>" class="btn btn-danger btn-sm btn-block">delete</a>
          </td>-->
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
        <th>Volume</th>
        <th>Origin</th>
        <th>Final_Destination</th>
        <th>BL_Type</th>
        <th>Shipment_status</th>
        <th>Internal_Package</th>
        <th>External_Package</th>
        <th>DO_number</th>
        <th>DO_Order_date</th>
        <th>IGM_number</th>
        <th>IGM_date</th>
        <th>Local_IGM_number</th>
        <th>Local_IGM_date</th>
        <th>Edit</th>
        <!--<th>Delete</th>-->
    </thead>
   </table>
</div>