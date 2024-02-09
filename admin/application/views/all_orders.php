<style>
.form-control {
    padding: 3px !important;
}

.pointer {
    cursor: pointer !important;
}

.card {
    border: 1px solid #e3e6f0;
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

@media (max-width:525px) {
    .container {
        padding-left: 0rem !important;
        padding-right: 0rem !important;
    }

    .container-fluid {
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

@media(min-width:370px) and (max-width:767px) {
    #completedOrder {
        margin-left: 30px !important;
    }
}

@media(max-width:370px) {
    #completedOrder {
        margin-left: 0px !important;
    }
}

#completedOrder {
    margin-left: 120px;
}
.form-control {
    margin: 2px;
 
    background-color: #f8f9fc !important;
    border-radius: 0rem !important;
}
</style>
<div class="container-fluid">

    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-1 ml-1">
                        <h1 class="h3 mb-0 text-gray-800">Orders Details</h1> -->
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <!-- <div>
        <form action="<?php echo site_url('Orders/searchData') ?>" method="post"
            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
            <div class="input-group  ">
                <input type="text" class="form-control bg-light border-1 small" name="searchOrderInput" id="searchOrderInput" placeholder="Search By Order ID"
                    aria-label="Search" aria-describedby="basic-addon2">
                   
                    <button class="btn btn-primary" type="button" id="searchOrderBtn" onclick="searchOrder()"> 
                        <i class="fas fa-search fa-sm"></i>
                    </button>
               
            </div>
        </form>
        </div> -->
    <!-- </div> -->

    <div class="row">
        <?php if($this->session->userdata('type') == 'Logistic/Shipment') { ?>
        <div class="col-xl-3 col-md-6 mb-2">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                <?php
                                            echo $all_orders;
                                            ?>
                                <!-- 30 -->
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total Orders</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-2">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                <?php
                                            echo $all_placed_order;
                                            ?>
                                <!-- 30 -->
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total Placed Orders</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-2">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                <?php
                                            echo $all_dispatch_order;
                                            ?>
                                <!-- 30 -->
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total Dispatch Orders</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-2">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                <?php
                                            echo $all_complete_orders;
                                            
                                            ?>
                                <!-- 30 -->
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total Complete Orders</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
                        }
                        ?>
    </div>
    <div class="card-header py-3 d-flex justify-content-between">
        <h3 class="m-0 font-weight-bold text-primary">Orders Details</h3>
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
                            <option>Select</option>
                            <option value="customer_name">Customer Name </option>
                            <option value="shipment_no">Shipment No</option>
                            <!-- <option value="order_id">Order ID</option> -->

                        </select>
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
        <div class="container h-100">
            <?php
  if (!empty($order_data)) {
  foreach ($order_data as $value) { 
    foreach ($value['general_order'] as $generalOrder) {
    // foreach ($value['general_order'] as $generalOrder) {
    //   foreach ($generalOrder['shipment_order'] as $shipmentOrder) {
    ?>
            <div class="row d-flex  align-items-center h-100 ">
                <div class="col-md-12 col-lg-12 col-xl-12 mt-4">
                    <div class="card card-stepper">
                        <div class="card-header pt-2 pb-2 pl-3 pr-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <?php
          //  echo $value['customer_email']; ?>
                                    <p class="text-muted mb-2" id="order_id" hidden>Order ID: <span class="fw-bold text-body" >
                                            <?php echo $value['order_id']; ?> </span></p>
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
                                        <li class="step0 text-muted text-end" id="step3"><span
                                                id="completedOrder">COMPLETED</span></li>
                                        <?php 
                         } elseif ($value['order_status'] == 1){ ?>
                                        <li class="step0 active" id="step1"><span
                                                style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                                        <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                                        <li class="step0 text-muted text-end" id="step3"><span
                                                id="completedOrder">COMPLETED</span></li>
                                        <?php 
                      } elseif ($value['order_status'] == 2){ ?>
                                        <li class="step0 active" id="step1"><span
                                                style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                                        <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                                        <li class="step0 active text-end" id="step3"><span
                                                id="completedOrder">COMPLETED</span></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                                <div class="col-md-2">
                                    <h6 class="mb-0"> <a
                                            href="<?php echo site_url('PendingOrder/orderDetails/'.$value['order_id']);?>">View
                                            Details</a> </h6>
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
                                        onclick="completeOrder('<?php echo $value['order_id']; ?>', '<?php echo $value['customer_email']; ?>' , '<?php echo $generalOrder['shipment_no']; ?>', '<?php echo $generalOrder['dispatch_data']; ?>')"
                                        style="color:#1266f1;"><u> Complete Order </u></a></h6>
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
                                        onclick="dispatchOrder('<?php echo $value['order_id']; ?>', '<?php echo $value['customer_email']; ?>', '<?php echo $generalOrder['shipment_no']; ?>', '<?php echo $generalOrder['dispatch_data']; ?>')"
                                        style="color:#1266f1;"><u> Dispatch Order </u></a></h6>
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
          }
          }else {
            echo '<div class="text-center mt-4">No record found.</div>';
      }
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
                <p>Do you really want to dispatch this order ?</p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo site_url('Orders/dispatchOrder'); ?>" method="post">
                    <input type="text" name="confirm_dis_order" value="1" hidden>
                    <input type="text" name="order_id" id="hiddenOrderId" value="" hidden>
                    <input type="text" name="C_email" id="hiddenOrderEmail" value="" hidden>
                    <input type="text" name="shipment_no" id="shipment_no1" value="" hidden>
                    <input type="text" name="dispatch_data" id="dispatch_data" value="" hidden>
                    <input type="text" name="re_url" value="<?php echo $this->router->fetch_class(); ?>" hidden>

                    <button type="submit" class="btn btn-primary">YES</button>
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
                <h4 class="modal-title">Complete Order</h4>
            </div>
            <div class="modal-body">
                <p>Do you really want to complete this order ? </p>
            </div>
            <div class="modal-footer">
                <form action="<?php echo site_url('Orders/completedOrder'); ?>" method="post">
                    <input type="text" name="confirm_complete_order" value="2" hidden>
                    <input type="text" name="order_id2" id="hiddenOrderId2" value="" hidden>
                    <input type="text" name="C_email2" id="hiddenOrderEmail2" value="" hidden>
                    <input type="text" name="shipment_no2" id="shipment_no2" value="" hidden>
                    <input type="text" name="dispatch_data2" id="dispatch_data2" value="" hidden>
                    <input type="text" name="re_url2" value="<?php echo $this->router->fetch_class(); ?>" hidden>
                    <button type="submit" class="btn btn-primary">YES</button>
                </form>

            </div>
        </div>

    </div>
</div>
<script>
function dispatchOrder(order_id, customer_email, shipment_no, dispatch_data) {

    document.getElementById('hiddenOrderId').value = order_id;
    document.getElementById('hiddenOrderEmail').value = customer_email;
    document.getElementById('shipment_no1').value = shipment_no;
    document.getElementById('dispatch_data').value = dispatch_data;
}

function completeOrder(order_id, customer_email, shipment_no, dispatch_data) {

    document.getElementById('hiddenOrderId2').value = order_id;
    document.getElementById('hiddenOrderEmail2').value = customer_email;
    document.getElementById('shipment_no2').value = shipment_no;
    document.getElementById('dispatch_data2').value = dispatch_data;
}
</script>

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

    $.ajax({
        type: 'POST',
        url: "<?php echo site_url('Orders/searchData'); ?>",
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