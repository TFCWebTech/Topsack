
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
  .card {
    border: 0px !important;
        }
        
        .table td, .table th {
    padding: 0.75rem 2.6rem !important;
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
                    <!-- Page Heading -->
                   
                    <div class="card card-stepper shadow mb-4">
                    <div class="card-header py-3 d-flex justify-content-between">
                            <h3 class="m-0 font-weight-bold text-primary">Sample Requests </h3>
                            <!-- <div>
                            <form
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search ">
                                <div class="input-group  ">
                                    <input type="text" class="form-control bg-light border-1 small" placeholder="Search Order No..."
                                        aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            </div> -->
                </div>
                        
                        <div class="card-body">

                <!-- date and strap form -->
                <div class="tab-content ml-2">
                  <div class="tab-pane active" role="tabpanel" id="info">
                 
                        <div class="row d-flex  h-100">
                        
                        <div class="col-md-12 mt-4">
                       
                        <div class="card card-stepper" >
                          
                          <?php 
                          $i=0;
                          // echo $sample_count;
                          if (!empty($all_sample_req)) {
                              foreach($all_sample_req as $value)
                                {
                                 $i++;
                           ?>
                          <table class="table table-bordered table-responsive" style="width: 100%">
                          <div class="card-header pt-2 pb-2 pl-3 pr-3">
                              <div>
                              <p class="text-muted mb-2"><b> Sl. No. : </b><span class="fw-bold text-body"><?php echo $i; ?></span></p>
                            </div>
                          </div>
                         
                          <tr>
                                <!-- <td><b>Sl. No. :</b> <?php echo $i; ?></td> -->
                                <td><b>Customer Name :</b> <?php echo $value['customer_name']; ?> </td>
                                <td><b>Email :</b> <?php echo $value['email']; ?> </td>
                                <td><b>Contact No :</b> <?php echo $value['contact_no']; ?></td>  
                                <td><b>Sample REF :</b> <?php echo $value['sample_ref']; ?></td>
                            </tr>
                               
                                <td><b>Sample REQ Date :</b> <?php echo $value['sample_req_date']; ?></td>
                                <td><b>TSP REF :</b> <?php echo $value['tsp_ref']; ?></td>
                                <td><b>QTY : </b> <?php echo $value['qty']; ?></td>
                                <td><b>Delivery Address : </b> <?php echo $value['address']; ?> </td>
                            </tr>
                            
                            <tr>                               
                                <td><b>Estimated Dispatch Date : </b> <?php echo $value['estimated_dispatch_date']; ?></td>
                                <td><b>Confirmed Dispatch Date : </b> <?php echo $value['confirmed_dispatch_date']; ?></td>
                                <td><b>Courier Name : </b> <?php echo $value['courier_name']; ?></td>
                                <td><b>AWB : </b> <?php echo $value['awb']; ?></td>
                            </tr>
                            <tr>
                                <td><b>Remarks : </b> <?php echo $value['remarks']; ?></td>
                            </tr>
                            <?php }
                             }else {
                                echo '<div class="text-center mt-4">No record found.</div>';
                                }
                            
                            ?>
                            </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                

                        </div>
                    </div>

                </div>

            <!-- End of Main Content -->

            </div>
       

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