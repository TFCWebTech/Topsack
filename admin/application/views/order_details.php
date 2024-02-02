<style>
#progressbar-1 {
    color: #455A64;
    width: 40%;
}

.pointer {
    cursor: pointer;
}

.cardd {
    border: 1px solid #e3e6f0 !important;
}

.card-body {
    margin-top: 5px;
}

@media (max-width:775px) {
    .table-responsive {
        display: grid !important;
        width: 100%;
    }
}

@media (min-width:775px) {
    .table-responsive {
        display: table !important;
        width: 100%;
    }
}

@media(max-width:775px) {
    #info .d-flex {
        display: block !important;
    }

    #cus_detail .mt-4 {
        margin-top: 100px !important;
    }

    #progressbar-1 {
        width: 100%;
    }

    .card-body {
        padding: 0rem !important;
    }
}

@media(max-width:509px) {
    #completedOrder {
        margin-left: 0px !important;
    }

    .col-md-12,
    .col-md-2,
    .col-md-4,
    .col-md-8 {

        padding-right: 1rem !important;
        padding-left: 0rem !important;
    }
}

@media(min-width:775px) and (max-width:1200px) {
    #completedOrder {
        margin-left: -2px !important;
    }
}

#completedOrder {
    margin-left: 70px;
}
</style>

<div class="container-fluid">

    <?php
    foreach ($order_data as $value) { 
      if ($value['order_id'] == $order_id) {
         ?>


    <div class="card card-stepper shadow ">
        <div class="card-header py-3 ">
            <!-- <?php echo $order_id; ?> -->
            <h6 class="m-0 font-weight-bold ">Order ID :<span> <?php echo $order_id; ?> </span></h6>
        </div>

        <div class="card-body">
            <div class="tab-content ml-2">
                <div class="tab-pane active" role="tabpanel" id="info">
                    <div class=" pb-0 d-flex justify-content-between mb-5">
                        <h6 class="m-0 font-weight-bold ">Date :<span> <?php echo $value['created_at']; ?>

                            </span></h6>

                        <ul id="progressbar-1" class="mx-0 mt-0 mb-0 px-0 pt-0 pb-0 ">
                            <?php if($value['order_status'] == 0) { ?>
                            <li class="step0 active" id="step1"><span
                                    style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                            <li class="step0 text-muted text-center" id="step2"><span> DISPATCH</span></li>
                            <li class="step0 text-muted text-end" id="step3"><span id="completedOrder">COMPLETED</span>
                            </li>
                            <?php 
                                        } elseif ($value['order_status'] == 1){ ?>
                            <li class="step0 active" id="step1"><span
                                    style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                            <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                            <li class="step0 text-muted text-end" id="step3"><span id="completedOrder">COMPLETED</span>
                            </li>
                            <?php 
                                                } elseif ($value['order_status'] == 2){ ?>
                            <li class="step0 active" id="step1"><span
                                    style="margin-left: 22px; margin-top: 12px;">PLACED</span></li>
                            <li class="step0 active text-center" id="step2"><span> DISPATCH</span></li>
                            <li class="step0 active text-end" id="step3"><span id="completedOrder">COMPLETED</span></li>
                            <?php } ?>

                        </ul>
                    </div>

                    <div class="tab-content ml-2">
                        <div class="tab-pane active" role="tabpanel">
                            <!--id="info"--->

                            <div class="row d-flex h-100 " id="cus_detail">

                                <div class="col-md-12 mt-4">
                                    <div>
                                        <!-- <p class="text-muted mb-2"><b>Shipment Sl. No. </b><span
                                                    class="fw-bold text-body"><?php echo $shipmentSlNo; ?></span></p> -->
                                    </div>
                                    <div class="card card-stepper  border border-0">
                                        <div class="card-header d-flex justify-content-between  pt-2 pb-2 pl-3 pr-3">

                                            <div>
                                                <p class="text-muted mb-2"><b>Customer Details </b></p>
                                            </div>
                                            <!-- <div></div> -->
                                        </div>
                                        <table class="table table-bordered" style="width: 100%">
                                            <tr class="table-responsive">
                                                <td><b>Customer Name :</b> <?php echo $value['customer_name']; ?>
                                                </td>
                                                <td><b>Email :</b> <?php echo $value['customer_email']; ?></td>
                                                <td><b>Contact No :</b> <?php echo $value['customer_contact']; ?> </td>
                                            </tr>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                $shipmentSlNo = 0;
                            // foreach ($order_data as $value) { 
                                foreach ($value['general_order'] as $generalOrder) {
                                    $shipmentSlNo ++;
                                //  if ($value['order_id'] == $order_id) {
                                    ?>


                    <div class="tab-content ml-2">
                        <div class="tab-pane active" role="tabpanel" id="info">

                            <div class="row d-flex h-100">
                                <div>
                                    <p class="text-muted mb-2 pl-3"><b>Shipment Sl. No. </b><span
                                            class="fw-bold text-body"><?php echo $shipmentSlNo; ?></span></p>
                                </div>
                                <div class="col-md-12 ">

                                    <div class="cardd card-stepper ">
                                        <div class="card-header pt-2 pb-2 pl-3 pr-3">
                                            <div class="d-flex justify-content-between align-items-center px-2">

                                                <p class="text-muted mb-2"><b>Order Overview </b></p>
                                                <p class="text-muted mb-2"><b> Shipment No: </b><span
                                                        class="fw-bold text-body"><?php echo $generalOrder['shipment_no']; ?></span>
                                                </p>

                                            </div>
                                        </div>
                                        <div class="card-body p-4">
                                            <?php if (($this->session->userdata('type') != 'Sales') && ($value['order_status'] == 0)){
                                                            ?>
                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <div class="d-flex justify-content-end p-2">
                                                        <div>
                                                            <h6 class="fw-normal mb-0">
                                                                <a id="addShippingDetailsLink" class="pointer"
                                                                    data-toggle="modal" data-target="#myModal"
                                                                    onclick="addShippingDetails('<?php echo $generalOrder['general_order_id']; ?>', '<?php echo $generalOrder['tsp_invoice_no']; ?>', '<?php echo $generalOrder['invoive_date']; ?>','<?php echo $generalOrder['container_no']; ?>', '<?php echo $generalOrder['shipping_line']; ?>', '<?php echo $generalOrder['port_of_loading']; ?>','<?php echo $generalOrder['scheduled_date_indian_port']; ?>','<?php echo $generalOrder['actual_date_indian_port']; ?>','<?php echo $generalOrder['mother_port']; ?>','<?php echo $generalOrder['scheduled_date_mother_port']; ?>','<?php echo $generalOrder['actual_date_mother_port']; ?>','<?php echo $generalOrder['port_of_dest']; ?>','<?php echo $generalOrder['expected_date_of_arrival']; ?>')"
                                                                    style="color:#4e73df;">
                                                                    <u><b> Add Shipping Details</b></u>
                                                                </a>
                                                            </h6>

                                                            <!-- <h6 class="fw-normal mb-0">
                                                                            <a id="addDispatchDate" class="pointer" data-toggle="modal" data-target="#myModal1" onclick="changeDispatchDate('<?php echo $generalOrder['general_order_id']; ?>','<?php echo $generalOrder['dispatch_data']; ?>')"
                                                                                style="color:#4e73df;">
                                                                                <u><b> Change Dispatch Date</b></u>
                                                                            </a>
                                                                        </h6> -->
                                                        </div>
                                                        <p class="text-muted mb-2" hidden><b> Shipment id: </b><span
                                                                class="fw-bold text-body"><?php echo $generalOrder['general_order_id']; ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                            <!-- <div class=" mb-0 pb-0"> -->
                                            <div class="row">
                                                <div class="col-md-3 px-2 ">
                                                    <p class="text-muted pl-1"><b> Po Received Date : </b> <span
                                                            class="fw-bold text-body"><?php echo $generalOrder['po_received_data']; ?></span>
                                                    </p>
                                                </div>
                                                <div class="col-md-3">
                                                    <p class="text-muted pl-1">
                                                        <?php if($generalOrder['new_dispatch_date'] == '') { ?>
                                                        <b> Dispatch Date : </b> <span
                                                            class="fw-bold text-body"><?php echo $generalOrder['dispatch_data']; ?></span>
                                                        <i class="fa fa-edit" id="addDispatchDate" class="pointer"
                                                            data-toggle="modal" data-target="#myModal1"
                                                            onclick="changeDispatchDate('<?php echo $generalOrder['general_order_id']; ?>','<?php echo $generalOrder['dispatch_data']; ?>','<?php echo $generalOrder['remarks']; ?>')"></i>
                                                        <?php }else { ?>
                                                    <p class="text-muted pl-0" style="margin-top:-14px;">
                                                        <b> Dispatch Date : </b> <del><span
                                                                class="fw-bold text-body"><?php echo $generalOrder['dispatch_data']; ?></span>
                                                        </del>
                                                        <i class="fa fa-edit" id="addDispatchDate" class="pointer"
                                                            data-toggle="modal" data-target="#myModal1"
                                                            onclick="changeDispatchDate('<?php echo $generalOrder['general_order_id']; ?>','<?php echo $generalOrder['new_dispatch_date']; ?>','<?php echo $generalOrder['remarks']; ?>')"></i>
                                                        <br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <span
                                                            class="fw-bold text-body ml-5"><?php echo $generalOrder['new_dispatch_date']; ?></span>
                                                        <?php } ?>
                                                    </p>
                                                </div>
                                                <!-- <div class="remarks" id="remarks_<?php echo $shipmentSlNo; ?>">
                                                                        <b> Remarks : </b>
                                                                        <span class="fw-bold text-body remarks-text truncate"><?php echo $remark; ?></span>
                                                                        <span class="see-more-btn" onclick="toggleRemarks(<?php echo $shipmentSlNo; ?>)">See more</span>
                                                                    </div> -->
                                                <style>
                                                .truncate {
                                                    white-space: nowrap;
                                                    overflow: hidden;
                                                    text-overflow: ellipsis;
                                                }

                                                .see-more-btn {
                                                    cursor: pointer;
                                                    color: blue;
                                                }
                                                </style>


                                                <?php 
                                                                    $remarks = $generalOrder['remarks'];
                                                                    $truncatedRemarks = strlen($remarks) > 20 ? substr($remarks, 0, 20) . '...' : $remarks;

                                                                    ?>
                                                <div class="col-md-4">
                                                    <b> Remarks : </b>
                                                    <span
                                                        class="fw-bold text-body remarks-text"><?php echo $truncatedRemarks; ?></span>
                                                    <span class="full-text"
                                                        style="display: none;"><?php echo $remarks; ?></span>

                                                </div>
                                                <div class="col-md-2 ">
                                                    <p class="text-muted pl-2"><b> Size-FCL : </b> <span
                                                            class="fw-bold text-body"><?php echo $generalOrder['size-fcl']; ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- end of sec -->
                                            <div class="table-responsive">
                                                <table class="table table-bordered mt-4 " style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl. No. </th>
                                                            <th>Order No </th>
                                                            <th>Dimension External </th>
                                                            <th>QTY </th>
                                                            <th>Packing </th>
                                                            <th>Pallets </th>
                                                            <th>PAL/Bales </th>
                                                            <th>Shipment Term </th>
                                                            <th>Currency </th>
                                                            <th>Price </th>

                                                        </tr>
                                                    </thead>
                                                    <?php 
                                                                    $slNo = 0;
                                                                    foreach ($generalOrder['shipment_order'] as $shipmentOrder) {
                                                                       $slNo ++;
                                                                       ?>
                                                    <tr>

                                                        <td> <?php echo $slNo; ?> </td>
                                                        <td> <?php echo $shipmentOrder['order_no']; ?></td>
                                                        <td> <?php echo $shipmentOrder['dimension_external']; ?></td>
                                                        <td> <?php echo $shipmentOrder['qty']; ?></td>
                                                        <td> <?php echo $shipmentOrder['packing']; ?></td>
                                                        <td> <?php echo $shipmentOrder['pallets']; ?></td>
                                                        <td> <?php echo $shipmentOrder['bales']; ?></td>
                                                        <td> <?php echo $shipmentOrder['shipment_term']; ?></td>
                                                        <td> <?php echo $shipmentOrder['currency']; ?></td>
                                                        <td> <?php echo $shipmentOrder['price']; ?></td>

                                                    </tr>
                                                    <?php } 
                                                                ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php 
                                    if($generalOrder['container_no'] != ''){
                                        ?>

                    <div class="tab-content ml-2">
                        <div class="tab-pane active " role="tabpanel" id="info">

                            <div class="row d-flex h-100 mb-4">

                                <div class="col-md-12 ">
                                    <!-- <div>
                                                        <p class="text-muted mb-2"><b>Shipment Sl. No. </b><span
                                                                class="fw-bold text-body"><?php echo $shipmentSlNo; ?></span></p>
                                                            </div> -->
                                    <div class="card card-stepper border    border border-0">
                                        <div class="card-header pt-2 pb-2   pl-3 pr-3">
                                            <div>
                                                <p class="text-muted mb-2"><b>Shipment Details</b></p>
                                            </div>
                                        </div>
                                        <table class="table table-bordered get-data" style="width: 100%">
                                            <tr class="selected-row table-responsive">
                                                <p class="text-muted mb-2" hidden><b> Shipment id: </b><span
                                                        class="fw-bold text-body"><?php echo $generalOrder['general_order_id']; ?></span>
                                                    <td><b>Sl. No. :</b> <?php echo $shipmentSlNo; ?> </td>
                                                    <td><b>PO Date :</b> <?php echo $generalOrder['po_received_data'];?>
                                                    </td>
                                                    <td><b>TSP Invoice No :</b>
                                                        <?php echo $generalOrder['tsp_invoice_no'];?></td>
                                                    <td><b>TSP Invoice Date :</b>
                                                        <?php echo $generalOrder['invoive_date'];?></td>
                                            </tr>

                                            <tr class="table-responsive">
                                                <td><b>Container No :</b> <?php echo $generalOrder['container_no']; ?>
                                                </td>
                                                <td><b>Shipping Line :</b> <?php echo $generalOrder['shipping_line']; ?>
                                                </td>
                                                <td><b>Port Of Loading
                                                        :</b><?php echo $generalOrder['port_of_loading']; ?></td>
                                                <td><b>Scheduled Date ( Indian Port
                                                        ):</b><?php echo $generalOrder['scheduled_date_indian_port']; ?>
                                                </td>
                                            </tr>
                                            <tr class="table-responsive">

                                                <td><b>Actual Date ( Indian Port
                                                        ):</b><?php echo $generalOrder['actual_date_indian_port']; ?>
                                                </td>
                                                <td><b>Mother Port :</b><?php echo $generalOrder['mother_port']; ?></td>
                                                <td><b>Scheduled Date ( Mother Port
                                                        ):</b><?php echo $generalOrder['scheduled_date_mother_port']; ?>
                                                </td>
                                                <td><b>Actual Date ( Mother Port
                                                        ):</b><?php echo $generalOrder['actual_date_mother_port']; ?>
                                                </td>
                                            </tr>
                                            <tr class="table-responsive">

                                                <td><b>Port Of Dest. :</b><?php echo $generalOrder['port_of_dest']; ?>
                                                </td>
                                                <td><b>Expected Date Of Arrival At Destination
                                                        :</b><?php echo $generalOrder['expected_date_of_arrival']; ?>
                                                </td>
                                                <!-- <td><b>Current Status :</b><?php echo $generalOrder['current_status']; ?></td> -->
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php 
                                    } 
                            } ?>

                </div>

            </div>

        </div>

    </div>

    <?php 
         }
        }?>
</div>

<!-- End of Main Content -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Add Shipping Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="<?php echo site_url('PendingOrder/addOrderShippingDetails') ?>" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" id="input_order_id" name="input_order_id"
                                        value="<?php echo $order_id; ?>" hidden>
                                    <input type="text" id="hiddenGeneralOrderId" name="general_order_id" value=""
                                        hidden>
                                    <label for="Invoice No">TSP Invoice No:</label>
                                    <input type="text" class="form-control" placeholder="Enter TSP Invoice No"
                                        name="tsp_invoice_no" id="invoice_no" value="" required>

                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                    <label for="Invoice Date">Invoice Date:</label>
                                    <input type="text" class="form-control" placeholder="Enter Invoice Date"
                                        name="invoice_date" onfocus="(this.type='date')" onblur="(this.type='text')"
                                        id="invoice_date" onchange="changeDate(this.value)"  required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="Invoice Date">Invoice Date:</label>
                                    <input type="text" class="form-control" placeholder="Enter Invoice Date"
                                        name="invoice_date" onfocus="(this.type='date')" onblur="(this.type='text')"
                                        id="invoice_date" onchange="changeDate(this.value)" value="" required>
                                </div> -->
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Container No">Container No:</label>
                                    <input type="text" class="form-control" placeholder="Enter Container No"
                                        name="container_no" id="container_no" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Shipping Line">Shipping Line:</label>
                                    <select class="form-control" name="shipping_line" id="shipping_line" required>
                                        <option>Select</option>
                                        <option value="MSC">MSC</option>
                                        <option value="CMA">CMA</option>
                                        <option value="HAPAG LLOYD">HAPAG LLOYD</option>
                                        <option value="COSCO">COSCO</option>
                                        <option value="MAERSK">MAERSK</option>
                                        <option value="OOCL">OOCL</option>
                                        <option value="ZIM LINE">ZIM LINE</option>
                                        <option value="PIL">PIL</option>
                                        <option value="YML">YML</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Shipping Line">Port Of Loading:</label>
                                    <select class="form-control" name="port_of_loading" id="port_of_loading" required>
                                        <option>Select</option>
                                        <option value="ACC Bangalore">ACC Bangalore</option>
                                        <option value="ICD Bangalore">ICD Bangalore</option>
                                        <option value="Mangalore Port">Mangalore Port</option>
                                        <option value="Chennai Port">Chennai Port</option>
                                        <option value="Ennore Port">Ennore Port</option>
                                        <option value="Cochin Port">Cochin Port</option>
                                        <option value="Navasheva Port">Navasheva Port</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Departure Scheduled Date">Departure Scheduled Date (Indian Port)
                                        :</label>
                                    <input type="text" class="form-control" placeholder="Departure Scheduled Date"
                                        name="indian_scheduled_date" id="indian_scheduled_date"
                                        onfocus="(this.type='date')" onblur="(this.type='text')"
                                        onchange="changeDate(this.value)" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Departure Actual Date">Departure Actual Date (Indian Port) :</label>
                                    <input type="text" class="form-control" placeholder="Departure Actual Date"
                                        name="indian_actual_date" id="indian_actual_date" onfocus="(this.type='date')"
                                        onblur="(this.type='text')" onchange="changeDate(this.value)" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Mother Port">Mother Port :</label>
                                    <select class="form-control" name="mother_port" id="mother_port" required>
                                        <option>Select</option>
                                        <option value="Colombo">Colombo</option>
                                        <option value="Port Klang">Port Klang</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Salalah">Salalah</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Departure Scheduled Date">Departure Scheduled Date (Mother Port)
                                        :</label>
                                    <input type="text" class="form-control" placeholder="Departure Scheduled Date"
                                        name="mother_scheduled_date" id="mother_scheduled_date"
                                        onfocus="(this.type='date')" onblur="(this.type='text')"
                                        onchange="changeDate(this.value)" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Departure Actual Date">Departure Actual Date (Mother Port) :</label>
                                    <input type="text" class="form-control" placeholder="Departure Actual Date"
                                        name="mother_actual_date" id="mother_actual_date" onfocus="(this.type='date')"
                                        onblur="(this.type='text')" onchange="changeDate(this.value)" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Port Of Dest">Port Of Dest :</label>
                                    <select class="form-control" name="port_of_dest" id="port_of_dest" required>
                                        <option>Select</option>
                                        <option value="Rotterdam">Rotterdam</option>
                                        <option value="Hamburg">Hamburg</option>
                                        <option value="Antwerp">Antwerp</option>
                                        <option value="Barcelona">Barcelona</option>
                                        <option value="Genoa">Genoa</option>
                                        <option value="Laspezia">Laspezia</option>
                                        <option value="Algeciras">Algeciras</option>
                                        <option value="Leharve">Leharve</option>
                                        <option value="Marcille">Marcille</option>
                                        <option value="Houston">Houston</option>
                                        <option value="Newyork">Newyork</option>
                                        <option value="Savannah">Savannah</option>
                                        <option value="Morrow G A">Morrow G A</option>
                                        <option value="Halifax">Halifax</option>
                                        <option value="Sydney">Sydney</option>
                                        <option value="Fremantle">Fremantle</option>
                                        <option value="MelBourne">MelBourne</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Departure Actual Date">Expected Date Of Arrival At Destination
                                        :</label>
                                    <input type="text" class="form-control"
                                        placeholder="Departure Expected Date Of Arrival At Destination"
                                        name="arrival_date" id="arrival_date" onfocus="(this.type='date')"
                                        onblur="(this.type='text')" onchange="changeDate(this.value)" required>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Current Status">Current Status :</label>
                                            <input type="text" class="form-control" placeholder="Enter Current Status"
                                              name="current_status"  id="current_status">
                                        </div>
                                    </div> -->
                        </div>

                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-md">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> Change Order Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="form">
                    <form action="<?php echo site_url('PendingOrder/UpdateDispatchDate') ?>" method="post">
                        <input type="text" id="input_order_id2" name="input_order_id" value="<?php echo $order_id; ?>"
                            hidden>
                        <input type="text" id="changeGeneralOrderId" name="general_order_id" value="" hidden>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Dispatch Date">Update Dispatch Date:</label>
                                    <input type="text" class="form-control" placeholder="Enter Dispatch Date"
                                        name="dispatch_date" onfocus="(this.type='date')" onblur="(this.type='text')"
                                        id="updateDispatchDate" value="" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="Dispatch Date">Update Remarks:</label>
                                    <textarea class="form-control" name="remark" rows="5" id="remark"></textarea>
                                </div>
                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!--     
                                <div class="modal-footer">
                                    
                                </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- <script>
    function addShippingDetails(generalOrderId) {
        
        document.getElementById('hiddenGeneralOrderId').value = generalOrderId;
       
    }
</script> -->



<script>
var invoice_date = new Date(document.getElementById('invoice_date').value);
var indian_scheduled_date = new Date(document.getElementById('indian_scheduled_date').value);
var indian_actual_date = new Date(document.getElementById('indian_actual_date').value);
var mother_scheduled_date = new Date(document.getElementById('mother_scheduled_date').value);
var mother_actual_date = new Date(document.getElementById('mother_actual_date').value);
var arrival_date = new Date(document.getElementById('arrival_date').value);

// if ( invoice_date <= indian_scheduled_date && indian_scheduled_date <= indian_actual_date && indian_actual_date <= mother_scheduled_date && mother_scheduled_date <= mother_actual_date && mother_actual_date <= arrival_date ) {
//     alert('Invalid date sequence. Please make sure each date is greater than the previous one.');

//     element.value = '';
// }

element.type = type;
$('#indian_scheduled_date').attr('min', invoice_date);
$('#indian_actual_date').attr('min', indian_scheduled_date);
$('#mother_scheduled_date').attr('min', indian_actual_date);
$('#mother_actual_date').attr('min', mother_scheduled_date);
$('#arrival_date').attr('min', mother_actual_date);

// If the type is 'text', format the displayed date
if (type === 'text') {
    var dateValue = element.value;
    if (dateValue !== '') {
        var formattedDate = formatDate(dateValue);
        element.value = formattedDate;
    }
}

function changeDate(date) {
    $('#indian_scheduled_date').attr('min', date);
    $('#indian_actual_date').attr('min', date);
    $('#mother_scheduled_date').attr('min', date);
    $('#mother_actual_date').attr('min', date);
    $('#arrival_date').attr('min', date);
}
//     var formattedDate = formatDate(date);
//     console.log(formatDate);
//     $('#invoiceDate').val(formatDate);
//     $('#indian_scheduled_date').val(formatDate);
//     $('#indian_actual_date').val(formatDate);
//     $('#mother_scheduled_date').val(formatDate);
//     $('#mother_actual_date').val(formatDate);
//     $('#arrival_date').val(formatDate);
//     $('#invoice_date').val(formatDate); 
// }
</script>

<script>
function addShippingDetails(generalOrderId, tsp_invoice_no, invoive_date, container_no, shipping_line, port_of_loading,
    scheduled_date_indian_port, actual_date_indian_port, mother_port, scheduled_date_mother_port,
    actual_date_mother_port, port_of_dest, expected_date_of_arrival) {
    document.getElementById('hiddenGeneralOrderId').value = generalOrderId;

    // alert(tsp_invoice_no);
    $('#hiddenGeneralOrderId').val(generalOrderId);
    $('#invoice_no').val(tsp_invoice_no);
    $('#invoice_date').val(invoive_date);
    $('#container_no').val(container_no);
    $('#shipping_line').val(shipping_line);
    $('#port_of_loading').val(port_of_loading);
    $('#indian_scheduled_date').val(scheduled_date_indian_port);
    $('#indian_actual_date').val(actual_date_indian_port);
    $('#mother_port').val(mother_port);
    $('#mother_scheduled_date').val(scheduled_date_mother_port);
    $('#mother_actual_date').val(actual_date_mother_port);
    $('#port_of_dest').val(port_of_dest);
    $('#arrival_date').val(expected_date_of_arrival);

}
</script>


<script>
function changeDispatchDate(generalOrderId, tsp_invoice_no, remark) {
    document.getElementById('changeGeneralOrderId').value = generalOrderId;

    // alert(tsp_invoice_no);
    $('#hiddenGeneralOrderId').val(generalOrderId);


    $('#updateDispatchDate').val(tsp_invoice_no);
    $('#remark').val(remark);

    var selectedDate = document.getElementById('updateDispatchDate').value;
    $('#updateDispatchDate').attr('min', selectedDate);


    // $('#updateDispatchDate').val(tsp_invoice_no);

    //     var selectedDate = document.getElementById('updateDispatchDate').value;
    //     $('#updateDispatchDate').attr('min', selectedDate);
}
</script>

<script>
function changeInputType(element, type) {
    // Change the input type dynamically
    element.type = type;

    // If the type is 'text', format the displayed date
    if (type === 'text') {
        // Adjust the date format as needed (e.g., dd/mm/yyyy)
        var dateValue = element.value;
        if (dateValue !== '') {
            var formattedDate = formatDate(dateValue);
            element.value = formattedDate;
        }
    }
}

function formatDate(dateString) {
    // Parse the input date string and format it as dd/mm/yyyy
    var date = new Date(dateString);
    var day = date.getDate().toString().padStart(2, '0');
    var month = (date.getMonth() + 1).toString().padStart(2, '0');
    var year = date.getFullYear();

    // Format the date as dd/mm/yyyy
    var formattedDate = year + '/' + month + '/' + day;
    // var formattedDate =  + '/' + month + '/' + year;

    return formattedDate;
}
</script>


<script>
function toggleRemarks(ren_no) {
    var dynamicId = 'remarks_' + ren_no;
    var remarksText = document.getElementById(dynamicId).getElementsByClassName('remarks-text')[0];

    // Toggle the 'truncate' class on the remarks-text element
    remarksText.classList.toggle('truncate');

    // Toggle the See more / See less text on the button
    var seeMoreBtn = document.querySelector('#' + dynamicId + ' .see-more-btn');
    seeMoreBtn.textContent = remarksText.classList.contains('truncate') ? 'See more' : 'See less';
}
</script>