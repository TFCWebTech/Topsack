
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Admin </title>
    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/sb-admin-3.css');?>" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    
    <!-- Custom styles for this template-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

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
        .card-body{
          margin-top: 5px;
      }
      @media (max-width:775px){
        .table-responsive {
            display: grid !important;
            width: 100%;
        }
    }
    @media (min-width:775px){
        .table-responsive {
            display: table !important;
            width: 100%;
        }
    }
    @media(max-width:775px){
        #info .d-flex{
            display:block !important;
        }
        #cus_detail .mt-4{
            margin-top:100px !important;
        }
        #progressbar-1 {
            width: 100%;
        }
        .card-body {
            padding: 0rem !important;
        }
    }
    @media(max-width:509px){
        #completedOrder{
            margin-left: 0px !important;
        }
        .col-md-12, .col-md-2, .col-md-4, .col-md-8 {

            padding-right: 1rem !important;
            padding-left: 0rem !important;
        }
    }
    @media(min-width:775px) and (max-width:1200px){
        #completedOrder{
            margin-left: -2px !important;
        }
    }
    #completedOrder{
        margin-left: 70px ;
    }
    #toast-container .toast-error {
        background-color: red !important;
        color: #fff !important;
    }
    #toast-container .toast-success {
        background-color: #4e73df !important;
        color: #fff !important;
    }
    @media(min-width:1200px){
        #hideimg{
            display:none;
        }
        .navbar{
            padding:0px !important;
        }
    }

    .faq-section {
        /* background: #fdfdfd; */
        /* min-height: 100vh; */
        padding: 2vh 0 0;
    }
    .faq-title h2 {
      position: relative;
      margin-bottom: 45px;
      display: inline-block;
      font-weight: 600;
      line-height: 1;
  }
  .faq-title h2::before {
    content: "";
    position: absolute;
    left: 50%;
    width: 60px;
    height: 2px;
    background: #2596be;
    bottom: -25px;
    margin-left: -30px;
}
.faq-title p {
  padding: 0 190px;
  margin-bottom: 10px;
}

.faq {
  background: #FFFFFF;
  box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
  border-radius: 4px;
}

.faq .card {
  border: none;
  background: none;
  border-bottom: 1px dashed #CEE1F8;
}

.faq .card .card-header {
  padding: 0px;
  border: none;
  background: none;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
}

.faq .card .card-header:hover {
    background: #4e73df47;
    padding-left: 10px;
}
.faq .card .card-header .faq-title {
  width: 100%;
  text-align: left;
  padding: 0px;
  padding-left: 30px;
  padding-right: 30px;
  font-weight: 400;
  font-size: 1rem;
  letter-spacing: 1px;
  color: #3B566E;
  text-decoration: none !important;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s;
  cursor: pointer;
  padding-top: 20px;
  padding-bottom: 20px;
}

.faq .card .card-header .faq-title .badge {
  display: inline-block;
  width: 20px;
  height: 20px;
  line-height: 14px;
  float: left;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
  text-align: center;
  background: #E91E63;
  color: #fff;
  font-size: 12px;
  margin-right: 20px;
}

.faq .card .card-body {
  
  padding-bottom: 16px;
  font-weight: 400;
  font-size: 16px;
  color: #6F8BA4;
  line-height: 28px;
  letter-spacing: 1px;
  border-top: 1px solid #F3F8FF;
}

.faq .card .card-body p {
  margin-bottom: 14px;
}

@media (max-width: 991px) {
  .faq {
    margin-bottom: 30px;
}
.faq .card .card-header .faq-title {
    line-height: 26px;
    margin-top: 10px;
}
}

/* Initially hide the button */
@media print {
    .btn-print, #order-det {
      display: none !important;
  }

  #hide-order-det {
      display: block !important;
  }
}

#hide-order-det {
    display: none;
}
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

<body id="page-top" class="sidebar-toggled">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

            <!-- Sidebar - Brand -->
        <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div> -->
            <!-- <img src="<?php echo base_url('assets/img/images/logo.png')?>" style="width:100%;" alt=""> -->
            <!-- <div class="sidebar-brand-text mx-3">Admin </div>
            </a> -->

            
            <li class="nav-item ">
                <a class="nav-link" href="<?php echo site_url('CustomerOrder') ?>"> 

                    
                    <i class="fa fa-user-circle-o"></i>
                    <span>Dashbord</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo site_url('CustomerOrder/SampleOrder') ?>"> 

                        
                        <i class="fa fa-user-circle-o"></i>
                        <span>Sample Orders</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo site_url('CustomerOrder/customerAcc') ?>"> 

                            
                            <i class="fa fa-user-circle-o"></i>
                            <span>Manage Account</span></a>
                        </li>
                        
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo site_url('CustomerLogin/Logout') ?>"> 
                                <i class="fa fa-sign-out"></i>
                                <span>Logout</span></a>
                            </li>

                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0 " id="sidebarToggle"></button>
                            </div>
                            
                        </ul>
                        <div id="content-wrapper" class="d-flex flex-column">

                            <div id="content">
                                <nav class="navbar navbar-expand navbar-light bg-white  mb-4 static-top shadow">

                                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <div class="float-right">
                                        <img src="<?php echo base_url('assets/img/images/logo.png')?>" style="width:200px;" id="hideimg">
                                    </div>
                                </nav>
                                <div class="container-fluid">
                                  
                                    <?php
                                    foreach ($order_data as $value) { 
                                      if ($value['order_id'] == $order_id) {

                                        $shipmentSlNo = 0;
                                              foreach ($value['general_order'] as $generalOrder) {
                                                  $shipmentSlNo ++;
                                         ?>
                                         
                                         
                                         <div class="card card-stepper shadow ">
                                            <div class="card-header d-flex justify-content-between py-3 ">
                                                <!-- <?php echo $order_id; ?> -->
                                                <h6 class="mt-2 font-weight-bold"> Shipment No :<span> <?php echo $generalOrder['shipment_no']; ?> </span></h6>
                                                <!-- <button class="btn btn-primary float-right px-4 py-2" onclick="window.print()"> Print <i class="fa fa-print ml-2"></i></button> -->
                                                <button class="btn btn-primary float-right px-4 py-2 btn-print" onclick="window.print()"> Print <i class="fa fa-print ml-2"></i></button>
                                            </div>
                                            <div class="card-body"> 
                                                <div class="tab-content ml-2" >
                                                    <div class="tab-pane active" role="tabpanel" id="info">
                                                        <div id="order-det">
                                                            <div  class="pb-0 d-flex justify-content-between mb-5" >
                                                                
                                                                <h6 class="m-0 font-weight-bold ">Date :<span> <?php echo $value['created_at']; ?>
                                                            </span></h6>
                                                            
                                                            <ul id="progressbar-1" class="mx-0 mt-0 mb-0 px-0 pt-0 pb-0 " >
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
                                                                            </div>

                                                                            <div id="hide-order-det" style="margin-top:12px; margin-bottom:-10px;">
                                                                                <?php if($value['order_status'] == 0) { ?> 
                                                                                    <h5>Order is <b> PLACED </b></h5>
                                                                                    <?php 
                                                                                } elseif ($value['order_status'] == 1){ ?>
                                                                                 <h5>Order is <b> DISPATCH </b></h5>
                                                                                 <?php 
                                                                             } elseif ($value['order_status'] == 2){ ?>
                                                                                <h5>Order is <b> COMPLETED </b></h5>
                                                                            <?php } ?>
                                                                            <h6 class="m-0 font-weight-bold">Date :<span> <?php echo $value['created_at']; ?>
                                                                        </div>

                                                                        <?php
                                // $shipmentSlNo = 0;
                              // foreach ($order_data as $value) { 
                                // foreach ($value['general_order'] as $generalOrder) {
                                //     $shipmentSlNo ++;
                                //  if ($value['order_id'] == $order_id) {
                                //  ?>
                        <div class="tab-content ml-2">
                            <div class="tab-pane active" role="tabpanel" > <!--id="info"--->
                                
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
                        
                                
                                <section class="faq-section">
                                    <div class="col-md-12 ">
                                        <div class="faq" id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="faqHeading-<?php echo $shipmentSlNo ?>">
                                                    <div class="mb-0">
                                                        <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-<?php echo $shipmentSlNo ?>" data-aria-expanded="true" data-aria-controls="faqCollapse-2">
                                                            Order Overview
                                                            <i class="fas fa-chevron-up" style="float: right;"></i>
                                                            <i class="fas fa-chevron-down" style="float: right; display: none;"></i>
                                                        </h5>
                                                        <p class="text-muted mb-2 ml-4"><b> Shipment No: </b><span
                                                            class="fw-bold text-body"><?php echo $generalOrder['shipment_no']; ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div id="faqCollapse-<?php echo $shipmentSlNo ?>" class="collapse" aria-labelledby="faqHeading-<?php echo $shipmentSlNo ?>" data-parent="#accordion">
                                                    <div class="card-body">
                                                        <div class="tab-content ml-2">
                                                            <div class="tab-pane active" role="tabpanel" id="info">
                                                                
                                                                <div class="row d-flex h-100">
                                                                    <!-- <div>
                                                                        <p class="text-muted mb-2 pl-3"><b>Shipment Sl. No. </b><span
                                                                            class="fw-bold text-body"><?php echo $shipmentSlNo; ?></span></p>
                                                                        </div> -->
                                                                        <div class="col-md-12 ">
                                                                            
                                                                            <div class="cardd card-stepper ">
                                                                                <!-- <div class="card-header pt-2 pb-2 pl-3 pr-3">
                                                                                    <div class="d-flex justify-content-between align-items-center px-2">
                                                                                        
                                                                                        <p class="text-muted mb-2"><b>Order Overview </b></p>
                                                                                        <p class="text-muted mb-2"><b> Shipment No: </b><span
                                                                                            class="fw-bold text-body"><?php echo $generalOrder['shipment_no']; ?></span>
                                                                                        </p>
                                                                                        
                                                                                    </div>
                                                                                </div> -->
                                                                                <div class="card-body p-4">
                                                                                    
                                                                                    <div class="row">
                                                                                        
                                                                                        <div class="col-md-3  ">
                                                                                            <p class="text-muted"><b> Po Received Date : </b> <span
                                                                                                class="fw-bold text-body"><?php echo $generalOrder['po_received_data']; ?></span>
                                                                                            </p>
                                                                                                        <!-- <p class="text-muted"><b> Dispatch Date : </b> <span
                                                                                                                class="fw-bold text-body"><?php echo $generalOrder['dispatch_data']; ?></span>
                                                                                                            </p> -->
                                                                                                        </div>
                                                                                                        <div class="col-md-3 ">
                                                                                                            <p class="text-muted">
                                                                                                                <?php if($generalOrder['new_dispatch_date'] == '') { ?>    
                                                                                                                    <b> Dispatch Date : </b> <span
                                                                                                                    class="fw-bold text-body"><?php echo $generalOrder['dispatch_data']; ?></span>
                                                                                                                    <!-- <i class="fa fa-edit" id="addDispatchDate" class="pointer" data-toggle="modal" data-target="#myModal1" onclick="changeDispatchDate('<?php echo $generalOrder['general_order_id']; ?>','<?php echo $generalOrder['dispatch_data']; ?>')"></i> -->
                                                                                                                <?php }else { ?>
                                                                                                                    <p class="text-muted" style="margin-top:-14px;">
                                                                                                                        <b> Dispatch Date : </b> <del><span
                                                                                                                            class="fw-bold text-body"><?php echo $generalOrder['dispatch_data']; ?></span> </del>
                                                                                                                            <!-- <i class="fa fa-edit" id="addDispatchDate" class="pointer" data-toggle="modal" data-target="#myModal1" onclick="changeDispatchDate('<?php echo $generalOrder['general_order_id']; ?>','<?php echo $generalOrder['dispatch_data']; ?>')"></i> -->
                                                                                                                            <br>
                                                                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                                            <span
                                                                                                                            class="fw-bold text-body ml-5"><?php echo $generalOrder['new_dispatch_date']; ?></span>
                                                                                                                        <?php } ?>
                                                                                                                    </p>
                                                                                                                </div>

                                                                                                        <!-- <p class="text-muted"><b> Remarks : </b> <span
                                                                                                                class="fw-bold text-body"><?php echo $generalOrder['remarks']; ?></span>
                                                                                                            </p> -->

                                                                                                            
                                                                                                            <?php 
                                                                                                            $remarks = $generalOrder['remarks'];
                                                                                                            $truncatedRemarks = strlen($remarks) > 20 ? substr($remarks, 0, 20) . '...' : $remarks;
                                                                                                            
                                                                                                            ?>
                                                                                                            <div class="col-md-2 ">
                                                                                                                <b> Remarks : </b>
                                                                                                                <span class="fw-bold text-body remarks-text"><?php echo $truncatedRemarks; ?></span>
                                                                                                                <span class="full-text" style="display: none;"><?php echo $remarks; ?></span>
                                                                                                                
                                                                                                            </div>
                                                                                                            <div class="col-md-2 ">
                                                                                                                <p class="text-muted"><b> Size-FCL : </b> <span
                                                                                                                    class="fw-bold text-body"><?php echo $generalOrder['size-fcl']; ?></span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                            <div class="col-md-2 ">
                                                                                                                <p class="text-muted"><b> Shipment Term : </b> <span
                                                                                                                    class="fw-bold text-body"><?php echo $generalOrder['shipmentTerm']; ?></span>
                                                                                                                </p>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="table-responsive">
                                                                                                        <table class="table table-bordered mt-4"  style="width: 100%">
                                                                                                            <thead>
                                                                                                                <tr>
                                                                                                                    <th>Sl. No. </th>
                                                                                                                    <th>Order No </th>
                                                                                                                    <th>Order Date</th>
                                                                                                                    <th>Dimension External </th>
                                                                                                                    <th>QTY </th>
                                                                                                                    <th>Packing </th>
                                                                                                                    <th>Pallets </th>
                                                                                                                    <th>PAL/Bales </th>
                                                                                                                    <th>Currency </th>
                                                                                                                    <th>Price </th>
                                                                                                                </tr>
                                                                                                            </thead>
                                                                                                            <?php 
                                                                                                            $slNo = 0;
                                                                                                            foreach ($generalOrder['shipment_order'] as $shipmentOrder) {
                                                                                                                $slNo ++;
                                                                                                                ?>
                                                                                                                <tr >
                                                                                                                    <td> <?php echo $slNo; ?> </td>
                                                                                                                    <td> <?php echo $shipmentOrder['order_no']; ?></td>
                                                                                                                    <td> <?php echo $shipmentOrder['order_date']; ?></td>
                                                                                                                    <td> <?php echo $shipmentOrder['dimension_external']; ?></td>
                                                                                                                    <td> <?php echo $shipmentOrder['qty']; ?></td>
                                                                                                                    <td> <?php echo $shipmentOrder['packing']; ?></td>
                                                                                                                    <td> <?php echo $shipmentOrder['pallets']; ?></td>
                                                                                                                    <td> <?php echo $shipmentOrder['bales']; ?></td>
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
                                                                                        <hr>
                                                                                        
                                                                                    </div>
                                                                                </div>

                                                                                <?php 
                                                                                if($generalOrder['container_no'] != ''){ ?>
                                                                                    <div class="row d-flex h-100 mb-4">
                                                                                        
                                                                                        <div class="col-md-12">
                                                            <!-- <div>
                                                                <p class="text-muted mb-2"><b>Shipment Sl. No. </b><span
                                                                            class="fw-bold text-body"><?php echo $shipmentSlNo; ?></span></p>
                                                                        </div> -->
                                                                        <div class="card card-stepper border border border-0">
                                                                            <div class="card-header pt-2 pb-2 pl-3 pr-3">
                                                                                <div>
                                                                                    <p class="text-muted mb-2"><b>Shipment Details</b></p>
                                                                                </div>
                                                                            </div>
                                                                            <table class="table table-bordered get-data" style="width: 100%">
                                                                                <tr class="selected-row table-responsive">
                                                                                    <p class="text-muted mb-2" hidden><b> Shipment id: </b><span
                                                                                        class="fw-bold text-body"><?php echo $generalOrder['general_order_id']; ?></span>
                                                                                        <td><b>Sl. No. :</b> <?php echo $shipmentSlNo; ?> </td>
                                                                                        <td><b>PO Date :</b> <?php echo $generalOrder['po_received_data'];?></td>
                                                                                        <td><b>TSP Invoice No :</b> <?php echo $generalOrder['tsp_invoice_no'];?></td>
                                                                                        <td><b>TSP Invoice Date :</b> <?php echo $generalOrder['invoive_date'];?></td>
                                                                                    </tr>

                                                                                    <tr class="table-responsive">
                                                                                        <td><b>Container No :</b> <?php echo $generalOrder['container_no']; ?></td>
                                                                                        <td><b>Shipping Line :</b> <?php echo $generalOrder['shipping_line']; ?></td>
                                                                                        <td><b>Port Of Loading :</b><?php echo $generalOrder['port_of_loading']; ?></td>
                                                                                        <td><b>Scheduled Date ( Indian Port ):</b><?php echo $generalOrder['scheduled_date_indian_port']; ?> </td>
                                                                                    </tr>
                                                                                    <tr class="table-responsive">
                                                                                        
                                                                                        <td><b>Actual Date ( Indian Port ):</b><?php echo $generalOrder['actual_date_indian_port']; ?></td>
                                                                                        <td><b>Mother Port :</b><?php echo $generalOrder['mother_port']; ?></td>
                                                                                        <td><b>Scheduled Date ( Mother Port ):</b><?php echo $generalOrder['scheduled_date_mother_port']; ?></td>
                                                                                        <td><b>Actual Date ( Mother Port ):</b><?php echo $generalOrder['actual_date_mother_port']; ?></td>
                                                                                    </tr>
                                                                                    <tr class="table-responsive">
                                                                                        
                                                                                        <td><b>Port Of Dest. :</b><?php echo $generalOrder['port_of_dest']; ?>
                                                                                    </td><td><b>Expected Date Of Arrival At Destination :</b><?php echo $generalOrder['expected_date_of_arrival']; ?></td>
                                                                                    <!-- <td><b>Current Status :</b><?php echo $generalOrder['current_status']; ?></td> -->
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <?php 
                                } 
                                
                                ?>
                            </div>
                            <?php 
                        }
                    }?>
                </div>
            </div>




            <div class="modal fade" id="myModal1" role="dialog">
                <div class="modal-dialog modal-md">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"> Change Dispatch </h4>
                            <button type="button" class="close" data-dismiss="modal" >&times;</button>
                            
                        </div>
                        <div class="modal-body">
                            <div class="form">
                                <form action="<?php echo site_url('CustomerOrder/UpdateDispatchDate') ?>" method="post">
                                    <input type="text" id="input_order_id2" name="input_order_id" value="<?php echo $order_id; ?>" hidden>
                                    <input type="text" id="changeGeneralOrderId" name="general_order_id" value="" hidden>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Dispatch Date">Update Dispatch Date:</label>
                                                <input type="text" class="form-control" placeholder="Enter Dispatch Date"
                                                name="dispatch_date"  onfocus="(this.type='date')"
                                                onblur="(this.type='text')" id="updateDispatchDate" value="" required>
                                                
                                                <div class="float-right">
                                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                                </div>
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
        <script>
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
        function changeDispatchDate(generalOrderId, tsp_invoice_no){
            document.getElementById('changeGeneralOrderId').value = generalOrderId;
            
    // alert(tsp_invoice_no);
            $('#hiddenGeneralOrderId').val(generalOrderId);
            $('#updateDispatchDate').val(tsp_invoice_no);


            
        // Set the min attribute to block dates before the selected date
            var selectedDate = document.getElementById('updateDispatchDate').value;
            $('#updateDispatchDate').attr('min', selectedDate);
        }
    </script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">

        <?php if($this->session->flashdata('success')){ ?>
            toastr.success("<?php echo $this->session->flashdata('success'); ?>");
        <?php }else if($this->session->flashdata('error')){  ?>
            toastr.error("<?php echo $this->session->flashdata('error'); ?>");
        <?php }else if($this->session->flashdata('warning')){  ?>
            toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
        <?php }else if($this->session->flashdata('info')){  ?>
            toastr.info("<?php echo $this->session->flashdata('info'); ?>");
        <?php } ?>
        $(document).ready(function () {
            $('.remarks-text').each(function () {
                var fullText = $(this).next('.full-text').html();
                var truncatedText = $(this).html();
                if (fullText.length > 20) {
                    $(this).html(truncatedText + ' <a href="#" class="read-more">Read more</a>');
                }

                $(this).on('click', '.read-more', function (e) {
                    e.preventDefault();
                    $(this).closest('.remarks-text').html(fullText + ' <a href="#" class="read-less">Read less</a>');
                });

                $(this).on('click', '.read-less', function (e) {
                    e.preventDefault();
                    $(this).closest('.remarks-text').html(truncatedText + ' <a href="#" class="read-more">Read more</a>');
                });
            });
        });
    </script>



    <script>
        function hidePrintButton() {
      // Get the button element by its id
          var printButton = document.getElementById('printButton');

      // Hide the button by adding the "hidden" class
          printButton.classList.add('hidden');
          
      // Perform the print action
          window.print();
      }
  </script>