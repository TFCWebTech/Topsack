
<style>
    .text-xs {
    font-size: 1.5rem !important;
}
    .dashboard-form{
        background-color:#fff;
        padding: 30px;
        box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15)!important;
    }
    .form-heading{
        padding: 10px;
    }
    #frm ,#frm2{
        padding:10px;
    }
    #frm .form-control ,#frm2 .form-control{
    height: calc(2.5em + 0.75rem + 2px) !important;
}
#frm label, #frm2 label {
    margin: 0.8rem 0rem 0.5rem 0.5rem!important;
}
#frm .btn , #frm2 .btn{
    width: 300px !important;
    margin-top:15px;
}
.form-check{
    margin-left: 15px !important;
}
.formBtn{
    text-align:center !important;
}
.input-icons i {
            position: absolute;
            padding: 19px 8px;
             /* color: #4e73df; */
        }
        .form-control {
    padding: 0.375rem  1.75rem !important;
        }
</style>
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                30</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total Staff</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                500</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Sample Order</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">200
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Pending Order</div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php 
                        if($this->session->userdata('type') != 'Sales') { ?>
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                     100</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">Transit Order</div>
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
                                    <h1 class="h3 mb-0 text-gray-800">Create Orders</h1>
                                    
                                </div>
                                <div class="switchBtn d-flex" >
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio1" onchange="hideB(this)" name="optradio" value="option1" checked>Sample Order
                                    <label class="form-check-label" for="radio1"></label>
                                    </div>
                                    <div class="form-check">
                                    <input type="radio" class="form-check-input" id="radio2" onchange="hideA(this)" name="optradio" value="option2">General Order 
                                    <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                            <form id="frm">
                            <div class="row">
                                <!-- <div class="col-sm-6 input-container">
                                <label for="Full Name" class="form-label">Full Name</label>
                                <i class="fa fa-user"></i><input type="text" class="form-control" placeholder="Enter Full Name" name="full_name">
                                </div> -->
                                <div class="col-sm-6 input-container">
                                    <label for="Full Name" class="form-label">Full Name</label>
                                    <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Full Name" name="full_name">
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="Contact No" class="form-label">Contact No.</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter Contact No" name="contact_no">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="SAMPLE REF" class="form-label">Sample Ref</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter Sample Ref" name="sample_ref">
                                   </div>
                               
                                </div>
                                <div class="col-sm-6">
                                <label for="Sample Req Date" class="form-label">Sample Req Date </label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="date" class="form-control" placeholder="Enter Sample Req Date" name="req_date">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Tsp Ref" class="form-label">Tsp Ref</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter Tsp Ref" name="tsp_ref">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="QTY" class="form-label"> QTY </label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter QTY" name="QTY">
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="Delivery Address" class="form-label">Delivery Address </label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Delivery Address" name="delivery_address">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Estimated Dispatch Date" class="form-label">Estimated Dispatch Date </label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="date" class="form-control" name="estimated_dispatch_date">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Confirmed Dispatch Date" class="form-label">Confirmed Dispatch Date </label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="date" class="form-control"  name="confirmed_dispatch_date">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Courier Name" class="form-label">Courier Name</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-ship"></i></span>
                                    <select class="form-control">
                                    <option>Select</option>
                                    <option>UPS</option>
                                    <option>DHL</option>
                                    <option>Fedex</option>
                                    <option>TNT</option>
                                    <option>Blue Dart</option>
                                    <option>Professional</option>
                                    </select>
                                   </div>

                                </div>
                                <div class="col-sm-6">
                                <label for="AWB" class="form-label">AWB </label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-plane"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter AWB " name="AWB">
                                   </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Remarks" class="form-label">Remarks</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Remarks" name="Remarks">
                                   </div>
                                </div>
                                <div class="col-sm-12">
                                <div class="formBtn">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                            </div>
                            </form>
                            <form id="frm2" style="display:none">
                            <div class="row">
                                <div class="col-sm-6">
                                <label for="Full Name" class="form-label">Full Name</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Full Name" name="full_name">
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="Contact No" class="form-label">Contact No.</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number" class="form-control" placeholder="Enter Contact No" name="contact_no">
                                   </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="email">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="Shipment No" class="form-label">Shipment No.</label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="number" class="form-control"  placeholder="Enter Shipment No." name="shipment_no">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Order No" class="form-label">Order No / Item Code</label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="number" class="form-control"  placeholder="Enter Order No / Item Code" name="order_no">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Po Received Date" class="form-label">Po Received Date</label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control"  name="received_date">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="DIMENSION-EXTERNAL" class="form-label">Dimension-External </label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Dimension-External" name="dimension_external">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="QTY" class="form-label">QTY </label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="number" class="form-control" placeholder="Enter QTY" name="QTY">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Packing" class="form-label">Packing </label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-cube"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Packing" name="packing">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Pallets" class="form-label">Pallets </label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class='fa fa-dot-circle-o'></i> </span>
                                <input type="text" class="form-control" placeholder="Enter Pallets" name="pallets">
                                </div>
                                
                                </div>
                               
                                <div class="col-sm-6">
                                <label for="PAL / Bales" class="form-label"> PAL / Bales</label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-line-chart"></i></span>
                                <input type="text" class="form-control" placeholder="Enter PAL / Bales" name="pal_bales">
                                </div>
                               
                                </div>
                                <div class="col-sm-6">
                                <label for="Shipment Term" class="form-label">Shipment Term</label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-ship"></i></span>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option value="FOB">FOB</option>
                                    <option value="CIF">CIF</option>
                                    <option value="DDU">DDU</option>
                                    </select>
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Dispatch Date" class="form-label">Dispatch Date </label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="date" class="form-control"  name="dispatch_ate">
                                </div>
                                
                                </div>
                                <div class="col-sm-6">
                                <label for="Remarks" class="form-label">Remarks </label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks">
                                </div>
                                </div>
                                <div class="col-sm-6">
                                <label for="SIZE-FCL" class="form-label">SIZE- FCL</label>
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <select class="form-control">
                                    <option>Select</option>
                                    <option>AIR</option>
                                    <option>LCL</option>
                                    <option>20' FCL</option>
                                    <option>40' FCL</option>
                                    </select>
                                </div>
                                
                                </div>
                                <div class="col-sm-12">
                                <div class="formBtn">
                                 <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </div>
                            </div>
                            
                            </form>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <!-- <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Direct
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Social
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Referral
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-primary text-white shadow">
                                        <div class="card-body">
                                            Primary
                                            <div class="text-white-50 small">#4e73df</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-success text-white shadow">
                                        <div class="card-body">
                                            Success
                                            <div class="text-white-50 small">#1cc88a</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-info text-white shadow">
                                        <div class="card-body">
                                            Info
                                            <div class="text-white-50 small">#36b9cc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-warning text-white shadow">
                                        <div class="card-body">
                                            Warning
                                            <div class="text-white-50 small">#f6c23e</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-danger text-white shadow">
                                        <div class="card-body">
                                            Danger
                                            <div class="text-white-50 small">#e74a3b</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-secondary text-white shadow">
                                        <div class="card-body">
                                            Secondary
                                            <div class="text-white-50 small">#858796</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-light text-black shadow">
                                        <div class="card-body">
                                            Light
                                            <div class="text-black-50 small">#f8f9fc</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <div class="card bg-dark text-white shadow">
                                        <div class="card-body">
                                            Dark
                                            <div class="text-white-50 small">#5a5c69</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                                            src="img/undraw_posting_photo.svg" alt="...">
                                    </div>
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                            target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on
                                        unDraw &rarr;</a>
                                </div>
                            </div>

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Development Approach</h6>
                                </div>
                                <div class="card-body">
                                    <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                                        CSS bloat and poor page performance. Custom CSS classes are used to create
                                        custom components and custom utility classes.</p>
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div> -->

                </div>

            </div>

            <script>
                 function hideA(x) {
   if (x.checked) {    
     document.getElementById("frm").style.display = "none";
     document.getElementById("frm2").style.display = "flex";
   }
 }

 function hideB(x) {
   if (x.checked) {
     document.getElementById("frm2").style.display = "none";
     document.getElementById("frm").style.display = "flex";
   }
 }
            </script>