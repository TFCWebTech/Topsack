<style>
        #manage_staff  .table thead th {
            vertical-align: top !important; 
            border-bottom: 2px solid #e3e6f0;
        }
        #manage_staff  .table {
                width: 100%;  
                margin-bottom: 1rem;
                color: #858796;
            }
            #manage_staff  div#dataTable_paginate {
                    float: right !important;
                }
                #manage_staff  div#dataTable_filter {
                display: none !important;
                 }
                 #manage_staff  .card-header{
                  display: flex!important;
                  justify-content: space-between !important;
                 }
                #manage_staff .status{
                    font-style: italic;
                    padding:5px;
                 }
                 .form-control {
    padding: 0.375rem 0.75rem !important;
}
@media(max-width:1200px){
  #addStaff{
    width: 128px;
    height: 39px;
  }
  .staffbtn{
    font-size: 12px;
    margin-bottom:5px;
    width: 100px;
  }
}
#display-error{
  display: none;
  color: red;
}
#display-error2{
  display: none;
  color: red;
}
    </style>
 
     <div class="container-fluid" id="manage_staff">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex">

                            <h3 class="m-0 font-weight-bold text-primary">Manage Customer</h3>
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Manage Staff</h6> -->
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal" id="addStaff">Add Customer</button>
                        </div>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Add Customer</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?php echo site_url('ManageStaff/addCustomer')?>" method="post">
                                        <div class="form-group">
                                          <label for="Name">Name:</label>
                                          <input type="text" class="form-control" placeholder="Enter Name" name="name" id="name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" placeholder="Enter Email" name="email" id="email" onchange="checkMail()" required>
                                            <p id="display-error"> This email is already exists.  </p>
                                          </div>

                                          <div class="form-group">
                                            <label for="email">Contact No:</label>
                                            <input type="text" class="form-control" placeholder="Enter Contact No" name="contact_no" id="contact_no" required>
                                          </div>
                                        
                                        <div class="modal-footer">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                  </div>
                              </div>
                          </div>
                          </div>
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact No.</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                          
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php 
                                    // echo '<pre>';
                                    // print_r($all_staff);
                                    // echo '</pre>';
                                      //  echo $length;
                                        foreach ($all_customer as $value) { 
                                          ?>
                                        
                                        <tr>
                                        <td hidden> <?php echo $value['customer_id']; ?></td>
                                            <td> <?php echo $value['customer_name']; ?> </td>
                                            <td><?php echo $value['customer_email']; ?> </td>
                                            <td><?php echo $value['customer_contact']; ?> </td>
                                            <!-- <td><?php echo $value['type']; ?> </td> -->
                                            <?php 
                                            if (($value['status']) == 'Active'){
                                            ?>
                                            <td> <b class="text-success"><i> <?php echo $value['status']; ?> </i></b></td>
                                            <?php } else{
                                            ?>
                                            <td> <b class="text-danger"><i> <?php echo $value['status']; ?> </i></b></td>
                                            <?php }
                                            ?>
                                            <td>
                                            <button class="btn btn-primary float-center staffbtn" data-toggle="modal" data-target="#editModal" onclick="updateData()">Edit</button>
                                            <button class="btn btn-primary float-center staffbtn" data-toggle="modal" data-target="#repassModal" onclick="rePassword('<?php echo $value['customer_id']; ?>', '<?php echo $value['customer_email']; ?>')">Re-Password</button></td>
                                            
                                        </tr>
                                        <?php }
                                        ?>
                                           
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal" id="editModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Staff</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?php echo site_url('ManageStaff/editCustomer')?>" method="post">
                                      <input type="text" id="update_staff_id" name="update_customer_id" hidden>
                                        <div class="form-group">
                                          <label for="Name">Name:</label>
                                          <input type="text" class="form-control" placeholder="Enter Name" id="update_name" name="update_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" placeholder="Enter Email" id="update_email" name="update_email" onchange="checkEditMail()" required>
                                            <p id="display-error2"> This email is already exists.  </p>
                                          </div>
                                          <div class="form-group">
                                            <label for="email">Contact No:</label>
                                            <input type="text" class="form-control" placeholder="Enter Contact No" name="update_contact_no" name="update_contact_no" id="update_contact_no" required>
                                          </div>
                                      
                                        <div class="form-group" >
                                          <label for="sel1">Status:</label>
                                          <select class="form-control" id="update_status" name="update_status" required>
                                            <option>Select</option>
                                            <option value="Active">Active</option>
                                            <option value="Suspend">Suspend</option>
                                          </select>
                                        </div>
                                        <div class="modal-footer">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                  </div>
                              </div>
                          </div>
                          </div>



                          <div class="modal" id="repassModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Reset Password</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="<?php echo site_url('ManageStaff/changeCustomerPassword')?>" method="post" onsubmit="return validatePassword()">
                                    <input type="text" id="reset_customer_id" name="reset_customer_id" value="<?php echo $value['customer_id']; ?>" hidden>
                                      <input type="text" id="resetPassMail" name="resetPassMail" value="<?php echo $value['customer_email']; ?>" hidden>
                                        <div class="form-group">
                                        <label for="New Password" class="form-label">New Password:</label>
                                        <input type="password" class="form-control" id="reset_password" name="reset_password" placeholder="Enter New Password" name="new_password" required>
                                        </div>
                                        <div class="form-group">
                                        <label for="Confirm Password" class="form-label">Confirm New Password:</label>
                                         <input type="password" class="form-control" id="reset_confirm_password" name="reset_confirm_password" placeholder="Enter Confirm New Password" name="confirm_password" required>
                                          </div>
                                          
                                       
                                        <div class="modal-footer">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                  </div>
                              </div>
                          </div>
                          </div>

                          <script>
                            function rePassword(login_id, resetMail){
                              $('#reset_login_id').val(login_id);
                              $('#resetPassMail').val(resetMail);
                            }
                          </script>
<script>
    function validatePassword() {
        var password = document.getElementById("reset_password").value;
        var confirmPassword = document.getElementById("reset_confirm_password").value;

        if (password !== confirmPassword) {
            alert("Passwords do not match");
            return false;
        }
    }
</script>

                          <script>
                                function updateData() {
                                  // Get the selected row in the table
                                  var selectedRow = event.target.closest('tr');

                                  // Get the data from the selected row
                                  var staffId = selectedRow.cells[0].innerText;
                                  var name = selectedRow.cells[1].innerText;
                                  var email = selectedRow.cells[2].innerText;
                                  var contact_no = selectedRow.cells[3].innerText;
                                  var status = selectedRow.cells[4].innerText;

                                  // Set the values in the Edit Staff modal
                                  document.getElementById('update_staff_id').value = staffId;
                                  document.getElementById('update_name').value = name;
                                  document.getElementById('update_email').value = email;
                                  document.getElementById('update_contact_no').value = contact_no;
                                  document.getElementById('update_status').value = status;

                              }
                          </script>
<script>
function checkMail(){
    searchEmail = $('#email').val();
   $.ajax({
    type: 'POST',
            url: "<?php echo site_url('ManageStaff/addCustomerEmailCheck'); ?>",
            datatype: "html",
            data :{
              searchEmail: searchEmail,
            },
            success: function(data) {
              if(data == 'true'){
                $('#display-error').show();
                $('#email').val('');

                setTimeout(function() {
                  $('#display-error').hide();
                }, 5000);
              }
            }
        })
  }
</script>

<script>
  function checkEditMail(){
    searchEmail = $('#update_email').val();
    customerId = $('#update_staff_id').val();
   $.ajax({
    type: 'POST',
            url: "<?php echo site_url('ManageStaff/editCustomerEmailCheck'); ?>",
            datatype: "html",
            data :{
              searchEmail: searchEmail,
              customerId : customerId
            },
            success: function(data) {
              if(data == 'true'){
                $('#display-error2').show();
                $('#update_email').val('');

                setTimeout(function() {
                  $('#display-error2').hide();
                }, 5000);
              }
            }
        })
  }
</script>