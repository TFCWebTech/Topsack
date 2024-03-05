
<style>
    .col-sm-4 {
        flex: 0 0 33.33333%;
        max-width: 33% !important;

    }

    @media(max-width:525px){
        .container, .container-fluid, .container-md {
            padding-left: 0rem !important;
            padding-right: 0rem !important;
        }
    }
    .cardd{
        box-shadow: 0px 0px 15px #E3E6F0;
        border-radius:10px;
        padding: 5px;
        margin-top:20px;
    }

#display-error{
  display: none;
  color: red;
}
</style>

<input type="text" value="1" id="addfields" hidden>
<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-1 ml-1">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <?php if($this->session->userdata('type') != 'Sales') { ?>      
                                <div class="col-xl-3 col-md-6 mb-2">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        <?php 
                                                        echo $all_staff;
                                                        ?> 
                                                        <!-- 30 -->
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Total Staff</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            }
                            ?>
                            <div class="col-xl-3 col-md-6 mb-2">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    <?php 
                                                    echo $sample_count;
                                                    ?> 
                                                    <!-- 500 -->
                                                </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Sample Requests </div>
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
                                                    echo $all_pending_count;
                                                    ?>

                                                    <!-- 200 -->
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Pending Orders</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            if($this->session->userdata('type') != 'Sales') { ?>
                                <div class="col-xl-3 col-md-6 mb-2">
                                    <div class="card border-left-warning shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                        <?php
                                                        echo $all_transit_count;
                                                        ?>
                                                        <!-- 0 -->
                                                    </div>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Transit Details </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                            ?>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="dashboard-form">
                                    <div class="form-heading" id="order">
                                        <h1 class="h3 mb-0 text-gray-800">Create Order</h1>
                                        <!-- <button onclick="addForm()"> add form </button> -->
                                    </div>
                                    <div class="switchBtn d-flex">
                                       <div class="form-check">
                                        <input type="radio" class="form-check-input"  id="radio1" onchange="hideB(this)" name="optradio" value="option2" checked> 
                                        <label class="form-check-label" for="radio1">General Order</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio2" onchange="hideA(this)" name="optradio" value="option1" >
                                        <label class="form-check-label" for="radio2">Sample Request</label>
                                    </div>

                                </div>
                                <form id="frm" method="post" action="<?php echo site_url('Home/addSampleRequestData')?>" style="display:none">

                                    <div class="row">
                                        <div class="col-md-4 input-container">           
                                            <div class="input-icons">
                                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                <select class="form-control" name="full_name" onchange="change_customer(this.value)" id="customer_data" required>
                                                    <option value="">Select Name</option>
                                                    <?php 
                                                    foreach ($all as $value) { ?>
                                                        <option value="<?php echo $value['customer_id']?>"><?php echo $value['customer_name']; ?></option>
                                                    <?php }
                                                    ?>
                                                </select>

                                            </div>

                                        </div>

                                        <div class="col-md-4">
                                            <div class="input-icons">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input type="text" class="form-control" placeholder="Enter Contact No" id="contact_no" name="contact_no" required>
                                            </div>

                                        </div>
                                <!-- <div class="col-md-4">
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Contact No" name="contact_no" 
                                        pattern="[0-9]{10}"
                                        oninvalid="this.setCustomValidity('Please Enter Correct Contact No')"
                                        oninput="this.setCustomValidity('')" required>
                                   </div>
                                
                               </div> -->
                               <div class="col-md-4">
                                <div class="input-icons">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" id="customer_email" required>
                                </div>
                                
                            </div>
                            <div class="col-md-4">
                                <div class="input-icons">
                                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                    <input type="text" class="form-control" placeholder="Enter Sample Ref" name="sample_ref" required>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="input-icons">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <!-- <input type="text" class="form-control" placeholder="Enter Sample Req Date" 
                                            onfocus="(this.type='date')" onblur="(this.type='text')" name="sample_req_date" required> -->
                                            <input type="text" class="form-control" placeholder="Enter Sample Req Date"  name="sample_req_date"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" id="sampleReqData" onchange="sampleRequestDate(this.value)"  required>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="number" class="form-control" placeholder="Enter Tsp Ref" name="tsp_ref" required>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="number" class="form-control" placeholder="Enter QTY" name="qty" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Delivery Address" name="delivery_address" required>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Estimated Dispatch Date" name="estimated_dispatch_date"  id="estimatedDate"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" onchange="sampleRequestDate(this.value)" >
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Confirmed Dispatch Date" id="confirmDate" name="confirmed_dispatch_date"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" onchange="sampleRequestDate(this.value)" >
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-ship"></i></span>
                                            <select class="form-control" name="courier_name" required>
                                                <option value="">Courier Name</option>
                                                <option value="UPS">UPS</option>
                                                <option value="DHL">DHL</option>
                                                <option value="Fedex">Fedex</option>
                                                <option value="TNT">TNT</option>
                                                <option value="Blue Dart">Blue Dart</option>
                                                <option value="Professional">Professional</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter AWB " name="awb" required>
                                        </div>

                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="formBtn">
                                           <button type="submit" name="submit" value="Submit" class="btn btn-primary">Submit</button>
                                       </div>
                                   </div>
                               </div>
                           </form>
                           <form id="frm2" action="<?php echo site_url('Home/addGeneralOrderData') ?>" method="post">
                            <div class="cardd">
                                <div class="row">
                                    <div class="col-md-4 input-container">           
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>

                                            <select class="form-control" name="full_name" onchange="change_customer_data(this.value)" id="customer_data01" required>
                                                <option value="">Select Name</option>
                                                <?php 
                                                foreach ($all as $value) { ?>
                                                    <option value="<?php echo $value['customer_id']?>"><?php echo $value['customer_name']; ?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- <input type="text" value="<?php echo $value['customer_name']; ?>" > -->

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Contact No" name="contact_no0" id="contact_no01" value="" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" class="form-control" placeholder="Enter Email" name="customer_email0" id="customer_email01" value="" required>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="count" value="0" id="count" hidden>
                            </div>
                            <div class="cardd">

                                <div class="row">

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="text" class="form-control" id="shipmentNo" placeholder="Enter Shipment No." name="shipment_no0" onchange="checkShipmentNo()" required>
                                            <p id="display-error"> This shipment no is already exists.  </p>
                                        </div>                                                                
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter PO Received Date" id="poReceivedDate" name="po_received_date0"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" onchange="changeDate(this.value)" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Dispatch Date" name="dispatch_date0" 
                                            id="dispatchDate"
                                            onfocus="(this.type='week')"
                                            onblur="(this.type='text')" onchange="changeDate(this.value)" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks0" >
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select class="form-control" name="size_fcl0" required>
                                                <option value="">SIZE-FCL </option>
                                                <option value="AIR">AIR</option>
                                                <option value="LCL">LCL</option>
                                                <option value="20' FCL">20' FCL</option>
                                                <option value="40' FCL">40' FCL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-ship"></i></span>
                                            <select class="form-control" name="shipment_term0" required>
                                                <option value="">Shipment Term</option>
                                                <option value="FOB">FOB</option>
                                                <option value="CIF">CIF</option>
                                                <option value="DDU">DDU</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 text-right d-flex justify-content-between"> 
                                        <div class="serial-number px-3 mb-0"> <b>Sl. No.</b> 1</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="text" class="form-control"  placeholder="Enter Order No / Item Code" name="order_no0[]" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Dimension-External" name="dimension_external0[]" required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                            <input type="number" class="form-control" placeholder="Enter QTY" name="qty0[]" id="qty0" required>
                                        </div>
                                    </div>
                                        <!-- Here we change formula qty/palletes == pal/bales replace by qty/packing = palltes -->
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-cube"></i></span>
                                            <input type="number" class="form-control" placeholder="Enter Packing" name="packing0[]" id="pallets0"  required>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class='fa fa-dot-circle-o'></i></span>
                                            <input type="number" class="form-control" placeholder="Enter Pallets" name="pallets0[]" id="pal_bales0" readonly>
                                        </div>
                                    </div>

                                    <!-- <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-line-chart"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter PAL / Bales" name="pal_bales0[]" id="pal_bales0" readonly>
                                        </div>
                                    </div> -->

                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="input-icons">
                                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                    <select class="form-control" name="currency0[]" required>
                                                        <option value="">Currency</option>
                                                        <option value="Euro">Euro</option>
                                                        <option value="USD">USD</option>
                                                        <option value="GBP">GBP</option>
                                                        <option value="INR">INR</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="input-icons">
                                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                    <input type="number" class="form-control" placeholder="Price" name="price0[]" step="any" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>    
                                        
                                        
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control" placeholder="Order Date" name="order_date0[]"
                                            onfocus="(this.type='date')" onblur="(this.type='text')" onchange="changeDate(this.value)" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="input-icons">
                                            <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                            <input type="text" class="form-control" placeholder="Enter Remarks" name="remark0[]" >
                                        </div>
                                    </div>

                                </div>
                                <div class="row">

                                    <div id="addfieldsContainer0" class="col-md-12 add-fields-container"> </div>
                                    <div class="col-md-12 text-right">
                                        <a type="button" onclick="addData('addfieldsContainer0', '0')" style="color:#4e73df; margin:5px;"> <u><b> Add more orders </b></u></a>
                                    </div>
                                </div>
                            </div> 


                            <!-- <div class="cardd"> -->
                            <!-- <div class="row">
                            <div class="col-md-4 input-container">           
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select class="form-control">
                                    <option>Aniket Patil</option>
                                    <option>Jitendra Jadhav</option>
                                    <option>Dinesh Mahajan</option>
                                    </select>
                                   </div>

                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Contact No" value="9876543256" name="contact_no">
                                   </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" value="aniket@gmail.com" name="email">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="number" class="form-control"  placeholder="Enter Shipment No." name="shipment_no">
                                </div>                                                                
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="Enter PO Received Date" name="received_date"
                                onfocus="(this.type='date')" onblur="(this.type='text')">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Dispatch Date" name="dispatch_ate"
                                onfocus="(this.type='date')" onblur="(this.type='text')">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <select class="form-control">
                                    <option>SIZE-FCL </option>
                                    <option>AIR</option>
                                    <option>LCL</option>
                                    <option>20' FCL</option>
                                    <option>40' FCL</option>
                                    </select>
                                </div>
                                </div>
                                 </div>
                                <hr>
                                <div class="row">
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="text" class="form-control"  placeholder="Enter Order No / Item Code" name="order_no">
                                </div>
                                </div>
                              
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Dimension-External" name="dimension_external">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="number" class="form-control" placeholder="Enter QTY" name="QTY">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-cube"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Packing" name="packing">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class='fa fa-dot-circle-o'></i></span>
                                <input type="text" class="form-control" placeholder="Enter Pallets" name="pallets">
                                </div>
                                </div>
                               
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-line-chart"></i></span>
                                <input type="text" class="form-control" placeholder="Enter PAL / Bales" name="pal_bales">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-ship"></i></span>
                                <select class="form-control">
                                    <option>Shipment Term</option>
                                    <option value="FOB">FOB</option>
                                    <option value="CIF">CIF</option>
                                    <option value="DDU">DDU</option>
                                    </select>
                                </div>
                                </div>
                            </div> -->

                                <!-- <div class="row">
                                <div class="col-md-12 text-right">
                                <a type="button" onclick="addData('addfieldsContainer3')" style="color:#4e73df; margin:5px;"> <u> Add More Fields </u></a>
                                </div>
                                <div id="addfieldsContainer3" class="col-md-12 add-fields-container"> </div>
                                </div>
                            </div> -->

                            <!-- <div id="addforms"></div> -->

                            <div id="test_div">  </div>
                            <div class="col-md-12" >
                                <input type="text" value="0" id="countIncreamentVariable" hidden>
                                <div class="formBtn d-flex justify-content-end" id="formbtn">
                                    <!-- <button type="button" class="btn btn-success" id="addShipmant" onclick="addForm()">Add Shipment</button> -->
                                    <!-- <button type="button" class="btn btn-success" onclick="addform()">Add Shipment</button> -->
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>



<script>
  function checkShipmentNo(){
    searchShipmentNo = $('#shipmentNo').val();
    
   $.ajax({
    type: 'POST',
            url: "<?php echo site_url('Home/shipmentNoCheck'); ?>",
            dataType: "json",
            data :{
                searchShipmentNo: searchShipmentNo,
            },
            success: function(data) {
                
            if (data === true || data === "true") {
                // alert(data);
                $('#display-error').show();
                $('#shipmentNo').val('');

                setTimeout(function() {
                  $('#display-error').hide();
                }, 5000);
              }
            }
        })
  }
</script>

    <script>
        var qtyInput = document.getElementById('qty0');
        var palletsInput = document.getElementById('pallets0');
        var palBalesInput = document.getElementById('pal_bales0');

        qtyInput.addEventListener('input', updatePalBales);
        palletsInput.addEventListener('input', updatePalBales);

        function updatePalBales() {
            var qtyValue = parseFloat(qtyInput.value) || 0;
            var palletsValue = parseFloat(palletsInput.value) || 0;

            var palBalesValue = (palletsValue !== 0) ? qtyValue / palletsValue : 0;

            palBalesInput.value = palBalesValue.toFixed(2); 
        }
    </script>
    <script>

      function change_customer() {
        var selectedIndex = document.getElementById('customer_data').selectedIndex;
        var contact_no = document.getElementById('contact_no');
        var customer_email = document.getElementById('customer_email'); // Assuming you have an element with id 'customer_email'

        // Assuming your PHP array is named $all and contains the customer_contact and customer_email fields
        var customerData = <?php echo json_encode($all); ?>;

        // Make sure the selectedIndex is greater than 0 and within the bounds of the array
        if (selectedIndex > 0 && selectedIndex <= customerData.length) {
            // Set the contact number and email based on the selected customer's data
            contact_no.value = customerData[selectedIndex - 1].customer_contact;
            customer_email.value = customerData[selectedIndex - 1].customer_email;
        } else {
            // Handle the case where no option is selected or the index is out of bounds
            contact_no.value = '';
            customer_email.value = '';
        }
    }
</script>

<script>

  function change_customer_data() {
    var selectedIndex = document.getElementById('customer_data01').selectedIndex;
    var contact_no = document.getElementById('contact_no01');
        var customer_email = document.getElementById('customer_email01'); // Assuming you have an element with id 'customer_email'

        // Assuming your PHP array is named $all and contains the customer_contact and customer_email fields
        var customerData = <?php echo json_encode($all); ?>;

        // Make sure the selectedIndex is greater than 0 and within the bounds of the array
        if (selectedIndex > 0 && selectedIndex <= customerData.length) {
            // Set the contact number and email based on the selected customer's data
            contact_no.value = customerData[selectedIndex - 1].customer_contact;
            customer_email.value = customerData[selectedIndex - 1].customer_email;
        } else {
            // Handle the case where no option is selected or the index is out of bounds
            contact_no.value = '';
            customer_email.value = '';
        }
    }
</script>
<script>

    function addForm() {
        addcount = $('#addfields').val();
        countIncrement = $('#count').val();
        countIncreamentVariable = $('#countIncreamentVariable').val();
        addShipmant = $('#addShipmant').val();
        
        if (parseInt(countIncreamentVariable) > 5) {
            alert ("You can't add more Records at one time")
            addShipmant.hide();
        }
        
        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('CompletedOrder/generalOrder'); ?>",
            datatype: "html",
            data :{
                addcount: addcount,
                countIncrement: parseInt(countIncrement) + 1,
                countIncreamentVariable: parseInt(countIncreamentVariable) + 1
            },
            success: function (data){

                $('#test_div').append(data);
                $('#addfields').val(parseInt(addcount)+1);
                $('#count').val(parseInt(countIncrement)+1);
                $('#countIncreamentVariable').val(parseInt(countIncreamentVariable)+1); 
                
            }
        })
    }

    function deleteData(containerId) {
        $('#' + containerId).remove();

        updateSerialNumbers(containerId);

        countIncreamentVariable = $('#countIncreamentVariable').val();

        $.ajax({
            type: 'POST',
            url: "<?php echo site_url('CompletedOrder/generalOrder'); ?>",
            datatype: "html",
            data :{

                countIncreamentVariable: parseInt(countIncreamentVariable) - 1
            },
            success: function (data){

                $('#countIncreamentVariable').val(parseInt(countIncreamentVariable)-1);
            }
        })
    }
</script>

<script>

    var serialNumbers = {};

    function addData(containerId, count) {
    // var count = $('#count').val();
        serialNumbers[containerId] = serialNumbers[containerId] || 1;

        var dynamicId = 'dynamic_' + Date.now();
        var newContainerId = 'container_' + dynamicId;

        var data = '<div id="' + newContainerId + '" style="margin-top: 20px;"> <div class="row" id="' + dynamicId + '"> <div class="col-md-12 text-right d-flex justify-content-between"> <div class="serial-number px-3 mb-0"> <b>Sl. No.</b> ' + serialNumbers[containerId] + '</div><button onclick="deleteData(\'' + newContainerId + '\')" id="delete_data" type="button" style="background-color:transparent; border-color:transparent;"><i class="fa fa-trash-o" style="color:red; font-size:24px;"></i></button></div> <div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-list"></i></span><input type="text" class="form-control"  placeholder="Enter Order No / Item Code" name="order_no'+count+'[]" required></div></div> <div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span><input type="text" class="form-control" placeholder="Enter Dimension-External" name="dimension_external'+count+'[]" required></div></div> <div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-list"></i></span><input type="number" class="form-control" placeholder="Enter QTY" name="qty'+count+'[]" id="qty' + dynamicId + '" required></div></div> <div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-cube"></i></span><input type="number" class="form-control" placeholder="Enter Packing" name="packing'+count+'[]" id="pallets' + dynamicId + '" required></div></div><div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-dot-circle-o"></i> </span><input type="number" class="form-control" placeholder="Enter Pallets" name="pallets'+count+'[]" id="pal_bales' + dynamicId + '" required readonly></div></div> <div class="col-md-4"><div class="row"><div class="col-md-5"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-money"></i></span><select class="form-control" name="currency'+count+'[]" required><option value="">Currency</option><option value="Euro">Euro</option><option value="USD">USD</option><option value="GBP">GBP</option><option value="INR">INR</option></select></div></div><div class="col-md-7"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-money"></i></span><input type="number" class="form-control" placeholder="Price" name="price'+count+'[]" step="any" required></div></div></div></div><div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" placeholder="Order Date" name="order_date'+count+'[]" onfocus="(this.type=`date`)" onblur="(this.type=`text`)" onchange="changeDate(this.value)" required></div></div> <div class="col-md-4"><div class="input-icons"><span class="input-group-addon"><i class="fa fa-comments"></i></span><input type="text" class="form-control" placeholder="Order Remarks" name="remark'+count+'[]" ></div></div> </div></div>';

        $('#' + containerId).append(data);

        var qtyDynamicId = '#qty' + dynamicId;
        var palletsDynamicId = '#pallets' + dynamicId;
        var palBalesInputId = '#pal_bales' + dynamicId;

// Use jQuery to select elements with dynamic IDs
        $(qtyDynamicId).on('input', updatePalBalesDynamic);
        $(palletsDynamicId).on('input', updatePalBalesDynamic);

        function updatePalBalesDynamic() {
    // Get values from quantity and pallets inputs
            var qtyValue = parseFloat($(qtyDynamicId).val()) || 0;
            var palletsValue = parseFloat($(palletsDynamicId).val()) || 0;

    // Perform the calculation
            var balesValue = (palletsValue !== 0) ? qtyValue / palletsValue : 0;

    // Update the PAL/Bales input field using jQuery
            $(palBalesInputId).val(balesValue.toFixed(2));
        }


    // Update serial numbers based on existing fields
        updateSerialNumbers(containerId);

        serialNumbers[containerId]++;

    }

    function deleteData(containerId) {
        $('#' + containerId).remove();

    // Update serial numbers after deletion
        updateSerialNumbers(containerId);
    }

    function updateSerialNumbers(containerId) {
        $('#addfieldsContainer0' + ' .serial-number').each(function(index) {
            $(this).html('<b>Sl. No.</b> ' + (index + 2));
        });
    }


</script>


<script>
   function hideA(x) {
     if (x.checked) {    
       document.getElementById("frm").style.display = "block";
       document.getElementById("frm2").style.display = "none";
   }
}

function hideB(x) {
 if (x.checked) {
   document.getElementById("frm2").style.display = "block";
   document.getElementById("frm").style.display = "none";
}
}
</script>


<script>

//    function changeInputType(element, type) {

    var poReceivedDate = new Date(document.getElementById('poReceivedDate').value);
    var dispatchDate = new Date(document.getElementById('dispatchDate').value);

    if (dispatchDate <= poReceivedDate) {
        alert('Dispatch date must be greater than PO received date.');
        element.value = '';
    }
    element.type = type;

    $('#dispatchDate').attr('min', poReceivedDate);

            // If the type is 'text', format the displayed date
    if (type === 'text') {

                // Adjust the date format as needed (e.g., dd/mm/yyyy)
        var dateValue = element.value;
        if (dateValue !== '') {
            var formattedDate = formatDate(dateValue);
            element.value = formattedDate;
        }
    }
        // }

        // function formatDate(dateString) {
        //     var date = new Date(dateString);
        //     var day = date.getDate().toString().padStart(2, '0');
        //     var month = (date.getMonth() + 1).toString().padStart(2, '0');
        //     var year = date.getFullYear();

        //     var formattedDate = day + '/' + month + '/' + year;

        //     return formattedDate;
        // }

    function changeDate(date) {
        $('#dispatchDate').attr('min', date);

        var formattedDate = formatDate(date);
        console.log(formatDate);
        $('#poReceivedDate').val(formatDate);
    }

</script>

<script>
    // function changeInputType(element, type) {

    var sampleReqData = new Date(document.getElementById('sampleReqData').value);
    var estimatedDate = new Date(document.getElementById('estimatedDate').value);
    var confirmDate = new Date(document.getElementById('confirmDate').value);


    if (estimatedDate <= sampleReqData) {
     alert('Dispatch date must be greater than PO received date.');
     element.value = '';
 }
 element.type = type;

 $('#estimatedDate').attr('min', sampleReqData);
 $('#confirmDate').attr('min', estimatedDate);

                   // If the type is 'text', format the displayed date
 if (type === 'text') {

     var dateValue = element.value;
     if (dateValue !== '') {
         var formattedDate = formatDate(dateValue);
         element.value = formattedDate;
     }
 }

 function sampleRequestDate(date){
    $('#estimatedDate').attr('min', date);
    $('#confirmDate').attr('min', date);

    var formattedDate = formatDate(date);
    console.log(formatDate);
    $('#sampleReqData').val(formatDate);
    $('#estimatedDate').val(formatDate);
}
</script>






<!-- <script>
    function updatePalBales(count) {
    // Get values from quantity and pallets inputs
    var qtyInput = $('#qty' + count + '[]');
    var palletsInput = $('#pallets' + count + '[]');
    var palBalesInput = $('#pal_bales' + count + '[]');

    var qtyValue = parseFloat(qtyInput.val()) || 0;
    var palletsValue = parseFloat(palletsInput.val()) || 0;

    // Perform the calculation
    var palBalesValue = (palletsValue !== 0) ? qtyValue / palletsValue : 0;

    // Update the PAL/Bales input field
    palBalesInput.val(palBalesValue.toFixed(2)); 
    // Adjust the number of decimal places as needed
}
</script> -->

















<!-- <script>
    // Add event listeners to detect changes in the input values
    document.getElementById('poReceivedDate').addEventListener('input', validateDate);
    document.getElementById('dispatchDate').addEventListener('input', validateDate);

    function validateDate() {
        var poReceivedDate = new Date(document.getElementById('poReceivedDate').value);
        var dispatchDate = new Date(document.getElementById('dispatchDate').value);

        // Check if dispatch date is greater than PO received date
        if (dispatchDate <= poReceivedDate) {
            alert('Dispatch date must be greater than PO received date.');
            // You can also add additional handling, such as clearing the dispatch date field.
            document.getElementById('dispatchDate').value = '';
        }
    }

    // Function to change input type dynamically (used in your original code)
    function changeInputType(input, type) {
        if (type === 'date') {
            input.type = 'date';
        } else {
            input.type = 'text';
        }
    }
</script> -->