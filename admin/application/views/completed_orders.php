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
width: 95%;
}
#progressbar-1 li {
    position: sticky;
}
.modal-header {
    display: block !important;
}
@media (max-width:525px){
.container{
    padding-left: 0rem !important;
     padding-right: 0rem !important;
}
.container-fluid{
  padding-left: 0rem !important;
     padding-right: 0rem !important;
}
}
@media (min-width: 820px) and (max-width: 1200px) {
  #completedOrder {
    margin-left: 40px !important;
  }
}
@media (min-width: 767px) and (max-width: 820px) {
  #completedOrder {
    margin-left: 30px !important;
  }
}
@media(min-width:370px) and (max-width:767px){
#completedOrder{
  margin-left: 30px !important;
}
}
@media(max-width:370px){
  #completedOrder{
  margin-left: 0px !important;
}
}
#completedOrder{
  margin-left: 120px ;
}
.form-control {
    margin: 2px;
 
    background-color: #f8f9fc !important;
    border-radius: 0rem !important;
}
</style>
<div class="container-fluid">
  
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Transit Details</h3>
        <!-- <div></div> -->
        <div >
            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
            <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search "> -->
                <!-- <div class="row">
                                <div class="col-sm-6">
                               
                              </div> -->
                <!-- <div class="col-sm-6"> -->
                <div class="input-group">
                    <div class="form-group">
                        <select class="form-control" name="search_value" id="search_value" required>
                            <option value="" disabled selected>Select</option>
                            <option value="customer_name">Customer Name </option>
                            <option value="shipment_no">Shipment No</option>
                            <!-- <option value="order_id">Order ID</option> -->
                        </select>
                        <div id="error_message" style="color: red; display: none;">Please select an option.</div>
                    </div>
                    
                    <input type="text" class="form-control bg-light border-1 small" name="searchOrderInput"
                        id="searchOrderInput" placeholder="Search " aria-label="Search"
                        aria-describedby="basic-addon2" onkeypress="handleKeyPress(event)">
                    <button class="btn btn-primary" type="button" id="searchOrderBtn" onclick="searchOrder()">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                    <!-- </div> -->
                    </div>
                </div>
            <!-- </form> -->
        </div>
    </div>
                   

<section class="gradient-custom-2" id="searchOrderId">
<div class="container  h-100">
  <?php
  
  if(!$order_data) { ?>
    <h5 class="text-center mt-3">No Record Found!</h5>
  <?php }  
  foreach ($order_data as $value) { 
    // foreach ($value['general_order'] as $generalOrder) {
      foreach ($value['general_order'] as $generalOrder) {
      // foreach ($generalOrder['shipment_order'] as $shipmentOrder) {
        if ($value['order_status'] == 2){ 
    ?>
          <div class="row d-flex  align-items-center h-100 ">
            <div class="col-md-10 col-lg-8 col-xl-12 mt-4">
              <div class="card card-stepper">
                <div class="card-header pt-2 pb-2 pl-3 pr-3">
                  <div class="row">
                    <div class="col-md-2">
                    <p class="text-muted mb-2" id="order_id" hidden>Order ID: <span class="fw-bold text-body" > <?php echo $value['order_id']; ?>  </span></p>
                    <p class="text-muted mb-0" id="shipment_no">Shipment No.: <span
                                            class="fw-bold text-body"> <?php echo $generalOrder['shipment_no']; ?>
                                        </span></p>
                                        <p class="text-muted mb-2" id="Customer_name">Customer Name: <span class="fw-bold text-body">
                                            <?php echo $value['customer_name']; ?> </span></p>  
                  </div>
                    <div class="col-md-8">
                    <ul id="progressbar-1" class="mx-0 mt-0 mb-0 px-0 pt-0 pb-0">
                          <?php if($value['order_status'] == 0) { ?>
                        <li class="step0 active" id="step1"><span
                        style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                        <li class="step0 text-muted text-center" id="step2"><span> DISPATCH</span></li>
                        <li class="step0 text-muted text-end" id="step3"><span id="completedOrder"
                        >COMPLETED</span></li>
                        <?php 
                         } elseif ($value['order_status'] == 1){ ?>
                          <li class="step0 active" id="step1"><span
                          style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                          <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                          <li class="step0 text-muted text-end" id="step3"><span id="completedOrder"
                          >COMPLETED</span></li>
                        <?php 
                      } elseif ($value['order_status'] == 2){ ?>
                        <li class="step0 active" id="step1"><span
                        style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                        <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                        <li class="step0 active text-end" id="step3"><span id="completedOrder"
                        >COMPLETED</span></li>
                        <?php } ?>
                       
                      </ul>
                    </div>
                    <div class="col-md-2">
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
              // } 
            }
          }
        }
      //  
        ?>
    </div>
</section>
</div>

</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Dispatch Order</h4>
        </div>
        <div class="modal-body">
          <p>do you really want to dispatch order </p>
        </div>
        <div class="modal-footer">
          <form action="<?php echo site_url('Orders/dispatchOrder'); ?>" method="post">
          <input type="text" name="confirm_dis_order" value="1" hidden>
          <input type="text" name="order_id" id="hiddenOrderId" value="" hidden>

          <button type="submit" class="btn btn-primary" >YES</button>
          </form>

        </div>
      </div>
      
    </div>
  </div>

  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">complete Order</h4>
        </div>
        <div class="modal-body">
          <p>do you really want to complete order </p>
        </div>
        <div class="modal-footer">
          <form action="<?php echo site_url('Orders/dispatchOrder'); ?>" method="post">
          <input type="text" name="confirm_complete_order" value="2" hidden>
          <input type="text" name="order_id2" id="hiddenOrderId2" value="" hidden>

          <button type="submit" class="btn btn-primary" >YES</button>
          </form>

        </div>
      </div>
      
    </div>
  </div>
  <script>
    function dispatchOrder(order_id) {
        
        document.getElementById('hiddenOrderId').value = order_id;
    }

    function completeOrder(order_id) {
        
        document.getElementById('hiddenOrderId2').value = order_id;
    }
</script>

<!-- <script>
  function searchOrder(){
    // alert('cliekd');
   searchOrderID = $('#searchOrderInput').val();
   $.ajax({
    type: 'POST',
            url: "<?php echo site_url('Orders/searchComData'); ?>",
            datatype: "html",
            data :{
              searchOrderID: searchOrderID,
            },
            success: function(data) {
              $('#searchOrderId').html(data);
            }
        })
  }
</script> -->

<script>
    function handleKeyPress(event) {
    if (event.keyCode === 13) {
        // Enter key was pressed, call searchOrder() function
        searchOrder();
    }
}
function searchOrder() {
    // alert('cliekd');
    searchOrderID = $('#searchOrderInput').val();
    search_value = $('#search_value').val();
    if (!search_value) {
        $('#error_message').show(); // Show error message
        return; // Exit function
    } else {
        $('#error_message').hide(); // Hide error message if it's currently shown
    }


    $.ajax({
        type: 'POST',
        url: "<?php echo site_url('Orders/searchComData'); ?>",
        datatype: "html",
        data: {
            searchOrderID: searchOrderID,
            search_value: search_value
        },
        success: function(data) {
            $('#searchOrderId').html(data);
            // $('#search_value').html(data);
        }
    })
}
</script>
