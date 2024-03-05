
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

<style>
  .form-control {
    padding: 3px !important;
}
.pointer {
    cursor: pointer !important;
}
.card {
    border: 1px solid #e3e6f0 ;
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
@media(min-width:1200px){
    #hideimg{
        display:none;
    }
    .navbar{
        padding:0px !important;
    }
}
/* #toast-container *{
    color:#000 !important;
    background-color:red !important;
} */
#toast-container .toast-error {
    background-color: red !important;
    color: #fff !important;
}
#toast-container .toast-success {
    background-color: #4e73df !important;
    color: #fff !important;
}
.form-control {
    margin: 2px;
 
    background-color: #f8f9fc !important;
    border-radius: 0rem !important;
}

    </style>
</head>

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

                   
                        <div class="card-header py-3 d-flex justify-content-between">
                            <h3 class="m-0 font-weight-bold text-primary">Orders Details</h3>
                            <!-- <div></div> -->
                            <div>
                            <!-- <form action="<?php echo site_url('CustomerOrder/searchData') ?>" method="post"
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search "> -->
                                <div class="input-group  ">
                                        <div class="row">
                                            <div class="col-md-12">
                                        <input type="text" class="form-control bg-light border-1 small" name="searchOrderInput" id="searchOrderInput" placeholder="Search By Shipment No."
                                        aria-label="Search" aria-describedby="basic-addon2" onkeypress="handleKeyPress(event)">
                                        <br>
                                        <div id="error_message" style="color: red; display: none;">Please Enter Shipment No.</div>
                                        </div>
                                        </div>
                                        <button class="btn btn-primary" type="button" id="searchOrderBtn" onclick="searchOrder()" style="height:40px;"> 
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                       
                                </div>
                            <!-- </form> -->
                            </div>
                        </div>
   
            <section class="gradient-custom-2" id="searchOrderId">
            <div class="container  h-100">
            <?php
            if (!empty($order_data)) {
            // foreach ($order_data as $value) { 
                foreach ($order_data as $value) { 
                    // foreach ($value['getOrderData'] as $generalOrder) {
                ?>
          <div class="row d-flex  align-items-center h-100">
            <div class="col-md-12 col-lg-12 col-xl-12 mt-4">
              <div class="card card-stepper">
                <div class="card-header pt-2 pb-2 pl-3 pr-3">
                  <div class="row">
                    <div class="col-md-2">
                          <input type="text" id="customer_id" value="<?php echo $value['customer_id']; ?>" hidden>
                        <p class="text-muted mb-2" id="order_id" hidden>Order ID: <span class="fw-bold text-body" > <?php echo $value['order_id']; ?>  </span></p>
                        <p class="text-muted mb-0" id="shipment_no">Shipment No.: <span
                                            class="fw-bold text-body"> <?php echo $value['shipment_no']; ?>
                                        </span></p>
                                      
                        <!-- <p class="text-muted mb-0">PO Date: <span class="fw-bold text-body"> <?php echo $generalOrder['po_received_data']; ?> </span></p> -->
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
                    <h6 class="mb-0"> <a href="<?php echo site_url('CustomerOrder/CustomerOrderDetails/'.$value['order_id']);?>" >View Details</a> </h6>
                    </div>
                  </div>
                  
                  </div>
                 

                </div>
             </div>
         
      </div>
      <?php
         
          }
        // }

         }else {
            echo '<div class="text-center mt-4">No record found.</div>';
            }
        ?>
    </div>
</section>
</div>

</div>


<script>
        function handleKeyPress(event) {
    if (event.keyCode === 13) {
        // Enter key was pressed, call searchOrder() function
        searchOrder();
    }
}
  function searchOrder(){
    // alert('cliekd');
   searchOrderID = $('#searchOrderInput').val();
   if (!searchOrderID) {
        $('#error_message').show(); // Show error message
        return; // Exit function
    } else {
        $('#error_message').hide(); // Hide error message if it's currently shown
    }
   $.ajax({
    type: 'POST',
            url: "<?php echo site_url('CustomerOrder/searchData'); ?>",
            datatype: "html",
            data :{
              searchOrderID: searchOrderID,
            },
            success: function(data) {
              $('#searchOrderId').html(data);
            }
        })
  }
</script>


      <!-- Footer -->
      <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;  Topsack Packaging Pvt Ltd</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assets/js/sb-admin-2.min.js'); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url('assets/chart.js/Chart.min.js'); ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url('assets/js/demo/chart-area-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/demo/chart-pie-demo.js'); ?>"></script>
     <!-- Page level plugins -->
        <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>

     <!-- Page level custom scripts -->
     <script src="<?php echo base_url('assets/js/demo/datatables-demo.js'); ?>"></script>
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
</script>
</body>

</html>