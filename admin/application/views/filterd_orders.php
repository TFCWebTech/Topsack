<style>
  .form-control {
    padding: 3px !important;
}
.pointer {
    cursor: pointer !important;
}
.card {
    border: 1px solid #e3e6f0 !important;
}
  
  #progressbar-1 {
color: #455A64;
width: 60%;
}
#progressbar-1 li {
    position: sticky;
}
.modal-header {
    display: block !important;
}
</style>
<div class="container  h-100">

  <?php
  if(!$order_data) { ?>
    <h5 class="text-center mt-3">No Record Found!</h5>
  <?php }
  foreach ($order_data as $value) { 
    foreach ($value['general_order'] as $generalOrder) {
    //   foreach ($generalOrder['shipment_order'] as $shipmentOrder) {
    ?>
          <div class="row d-flex  align-items-center h-100 " >
            <div class="col-md-10 col-lg-8 col-xl-12 mt-4" style="margin-top:30px;">
              <div class="card card-stepper" >
                <div class="card-header pt-2 pb-2 pl-3 pr-3">
                  <div class="d-flex justify-content-between align-items-center">
                      <div>
                      <p class="text-muted mb-2" id="order_id" hidden>Order ID: <span class="fw-bold text-body" >
                                            <?php echo $value['order_id']; ?> </span></p>
                        <!-- <p class="text-muted mb-2" id="order_id">Order ID: <span class="fw-bold text-body" > <?php echo $value['order_id']; ?>  </span></p> -->
                        <!-- <p class="text-muted mb-0">PO Date: <span class="fw-bold text-body"> <?php echo $generalOrder['po_received_data']; ?> </span></p> -->
                        <p class="text-muted mb-0" id="shipment_no">Shipment No.: <span class="fw-bold text-body"> <?php echo $generalOrder['shipment_no']; ?> </span></p>
                        <p class="text-muted mb-2" id="Customer_name">Customer Name: <span class="fw-bold text-body">
                                            <?php echo $value['customer_name']; ?> </span></p>
                      </div>

                        <ul id="progressbar-1" class="mx-0 mt-0 mb-0 px-0 pt-0 pb-0">
                          <?php if($value['order_status'] == 0) { ?>
                        <li class="step0 active" id="step1"><span
                        style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                        <li class="step0 text-muted text-center" id="step2"><span> DISPATCH</span></li>
                        <li class="step0 text-muted text-end" id="step3"><span
                        style="margin-left: 120px;">COMPLETED</span></li>
                        <?php 
                         } elseif ($value['order_status'] == 1){ ?>
                          <li class="step0 active" id="step1"><span
                          style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                          <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                          <li class="step0 text-muted text-end" id="step3"><span
                          style="margin-left: 120px;">COMPLETED</span></li>
                        <?php 
                      } elseif ($value['order_status'] == 2){ ?>
                        <li class="step0 active" id="step1"><span
                        style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                        <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                        <li class="step0 active text-end" id="step3"><span
                        style="margin-left: 120px;">COMPLETED</span></li>
                        <?php } ?>
                       
                      </ul>


                        <div>
                          <h6 class="mb-0"> <a href="<?php echo site_url('PendingOrder/orderDetails/'.$value['order_id']);?>" >View Details</a> </h6>
                       </div>
                       
                    </div>
                  </div>
                  <?php 
                  $allRowsContainTspInvoice = true;

                  foreach ($value['general_order'] as $generalOrder) {
                      if ($generalOrder['tsp_invoice_no'] === '') {
                          $allRowsContainTspInvoice = false;
                          break;
                      }
                  }
                  if ($this->session->userdata('type') != 'Sales'){
                    
                    if($allRowsContainTspInvoice && $value['order_status'] == 1) {
                      ?>
                        <div class="card-footer p-2">
                           <div class="d-flex justify-content-between">
  
                            <h6 class="fw-normal mb-0"><a type="button" data-toggle="modal" data-target="#myModal2" 
                            onclick="completeOrder('<?php echo $value['order_id']; ?>')" style="color:#1266f1;"><u> Complete Order </u></a></h6>
                          </div>
                         </div>
                         <?php 
                      }elseif ($allRowsContainTspInvoice && $value['order_status'] == 2) {
                      ?>
                    <div class="card-footer p-2">
                          <div class="d-flex justify-content-between">
  
                            <h6 class="fw-normal mb-0"><i> Order Completed </i></h6>
                           </div>
                         </div>
                       <?php
                       }elseif ($allRowsContainTspInvoice) {
                      ?>
                    <div class="card-footer p-2">
                          <div class="d-flex justify-content-between">
  
                            <h6 class="fw-normal mb-0"><a type="button" data-toggle="modal" data-target="#myModal" 
                            onclick="dispatchOrder('<?php echo $value['order_id']; ?>')" style="color:#1266f1;"><u> Dispatch Order </u></a></h6>
                           </div>
                         </div>
                       <?php
                       } 

                      } 
                     ?>


                  <!-- <div class="card-body p-4">
                    <div class=" mb-0 pb-0">
                      <div class="flex-fill d-flex justify-content-between">
                        <p class="text-muted">Customer Name: <span class="text-body"> <?php echo $generalOrder['customer_id']; ?> </span></p>
                        <p class="text-muted">Email: <span class="text-body"> <?php echo $generalOrder['email']; ?> </span></p>
                        <p class="text-muted">Contact No: <span class="text-body"> <?php echo $generalOrder['contact_no']; ?> </span></p>
                        <p class="text-muted">Qty: <span class="text-body"> <?php echo $shipmentOrder['qty']; ?> </span></p>
                        <p class="text-muted mb-0"> Shipment No: <span class="fw-bold text-body"> <?php echo $generalOrder['shipment_no']; ?> </span> </p>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="card-footer p-3">
                  <div class="d-flex justify-content-between">
                  <h6 class="fw-normal mb-0"><a class="pointer" data-toggle="modal" data-target="#myModal" style="color:#4e73df;">Add Shipping Details</a></h6>
                  </div>
                  </div> -->
                </div>
             </div>
         
      </div>
      <?php
            //   } 
            }
          }?>
    </div>
