
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php print base_url('assets/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
     
    <!-- Custom styles for this template-->
    <link href="<?php print base_url('assets/css/sb-admin-2.min.css');?>" rel="stylesheet">
    <style>
    .bg-login-image {
        background: url(assets/img/images/Mobile login-pana.svg) !important;
        background-position: center;
        background-size: cover;
    }
    @media(max-width:575px){
    #admin_redio{
        text-align:center !important;
    }
    .radio_sec{
        margin-left:30px;
        display: block !important;
    }
    #sales_redio , #shipment_redio{
        margin-left:0px !important;
    }
}
.radio_sec{
        display: flex ;
    }
    #sales_redio , #shipment_redio{
        margin-left:25px;
    }
    #toast-container .toast-error {
    background-color: red !important;
    color: #fff !important;
}
#toast-container .toast-success {
    background-color: #fff !important;
    color: #4e73df !important;
}
    /* @media(min-width:375px) and (max-width:525px){
        #shipment_redio{
            margin-left:55px !important;
        }
    }
    @media(max-width:375px){
        #shipment_redio{
            margin-left:10px !important;
        }
    } */
</style>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block" >
                                <img src="<?php echo base_url('assets/img/images/Mobile login-pana.png')?>" style="margin-top:70px; width:100%;" alt="">
                            </div>
                            <div class="col-lg-6" style="margin-top:30px;">
                                <div class="p-5">
                                    <div class="text-center">
                                    <img src="<?php echo base_url('assets/img/images/logo.png')?>" style="width:100%;" alt="">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="post" action="<?php echo site_url('Login/userLogin'); ?>">
                                    <div class="radio_sec">
                                      <!-- <div id="admin_redio"> -->
                                        <div>
                                        <input type="radio" name="type" id="admin_type" value="Admin"  required checked> 
                                        <label for="admin_type"> Admin</label>
                                        </div>
                                        <div>
                                        <input type="radio" name="type" id="sales_redio" value="Sales"  required > 
                                        <label for="sales_redio"> Sales</label>
                                        </div>
                                        <!-- </div>-->
                                        <div> 
                                        <input type="radio" name="type" id="shipment_redio" value="Logistic/Shipment" required> 
                                         <label for="shipment_redio"> Shipment/Logistic</label>
                                         </div>
                                    </div>
                                        <div class="form-group mt-3">
                                            <input type="email" name="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                      
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a type="button" class="small"  data-toggle="modal" data-target="#myModal">Forgot Password?</a>
                                    </div>
                                    <!-- <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <div class="card-title text-uppercase ">Reset Password</div>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        <form method="post" action="<?php print site_url('Login/forgot_pass'); ?>">
                <div class="mb-1 mt-0">
                <!-- <div class="card-title text-uppercase pb-2">Reset Password</div> -->
                  <p class="pb-1">Please enter your email address. You will receive a link to create a new password via email.</p>
                    <!-- <label for="email" class="form-label">Email:</label> -->
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="send_email" required>
                </div>
                <div class="float-right pt-1">
                    <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
                </div>
                </form>
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