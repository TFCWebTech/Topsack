

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
    .frm{
        padding:20px;
    }
    .form-control {
    padding: 0.375rem 0.75rem !important;
}
#toast-container .toast-error {
    background-color: red !important;
    color: #fff !important;
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
                    <div class="row">
                         
                    <div class="col-sm-6">
                    <h1 class="h3 mb-2 text-gray-800">Change Email</h1>
                    <div class="card shadow mb-4">
                    <div class="frm">
                    
                    <form action="<?php echo site_url('CustomerOrder/updateMail')?>" method="post">
                    
                        <div class="mb-3  mt-3">
                            <input type="text" id="customer_id" name="customer_id" value="<?php echo $all['customer_id']; ?>" hidden>
                            <label for="Email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $all['customer_email']; ?>" required>
                        </div>
                        <div class="text-center" style="margin-top:20px;">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                        
                        </form> 
                        
                    </div>
                    </div>
                    </div>
                   <div class="col-sm-6">
                   <h1 class="h3 mb-2 text-gray-800">Reset Password</h1>
                    <div class="card shadow mb-4">
                    <div class="frm">
                    <form id="passwordForm" action="<?php echo site_url('CustomerOrder/updatePassword')?>" method="post">
                    <input type="text" id="customer_id" name="update_customer_id" value="<?php echo $all['customer_id']; ?>" hidden>
                    <!-- <input type="text" id="hide_pass" name="hide_pass" value="<?php echo $all['password']; ?>" hidden> -->
                        <!-- <div class="mb-3 mt-3">
                            <label for="Current Password" class="form-label">Current Password:</label>
                            <input type="text" class="form-control" id="c_password" placeholder="Enter Current Password" name="c_password" required>
                        </div> -->
                        <div class="mb-3">
                            <label for="New Password" class="form-label">New Password:</label>
                            <input type="password" class="form-control" id="new_password" placeholder="Enter New Password" name="new_password" required>
                        </div>
                        <div class="mb-3">
                            <label for="Confirm Password" class="form-label">Confirm New Password:</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Enter Confirm New Password" name="confirm_password" required>
                        </div>
                        <div class="text-center" style="margin-top:20px;">
                        <button type="button" onclick="validatePassword()" class="btn btn-primary">Submit</button>
                        </div>
                        </form> 
                    </div>
                    </div>
                    </div>
            </div>
            </div>
            </div>
            <script>
                   function validatePassword() {
                // var hide_pass = document.getElementById('hide_pass').value; 
                // var c_password = document.getElementById('c_password').value;
                var newPassword = document.getElementById('new_password').value;
                var confirmPassword = document.getElementById('confirm_password').value;


                if(!( newPassword == '' && confirmPassword == '')){
            
                 if (newPassword === confirmPassword){
                        document.getElementById('passwordForm').submit();
                     } else {
                        alert('New Password and Confirm Password do not match.');
                     }

            }else{
                alert('field should not be empty');
            }
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