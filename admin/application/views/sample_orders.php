<style>
  .card {
    border: 0px !important;
        }
        
        .table td, .table th {
    padding: 0.75rem 2.6rem !important;
        }
</style>

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
       
