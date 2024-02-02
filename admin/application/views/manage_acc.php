

<style>
    .frm{
        padding:20px;
    }
    .form-control {
    padding: 0.375rem 0.75rem !important;
}
</style>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">

                    <?php 
                     if($this->session->userdata('type') == 'Admin') { ?>
                                                                            
                                        
                    <div class="col-sm-6">
                    <h1 class="h3 mb-2 text-gray-800">Change Email</h1>
                    <div class="card shadow mb-4">
                    <div class="frm">
                    
                    <form action="<?php echo site_url('ManageAccount/updateMail')?>" method="post">
                    
                        <div class="mb-3  mt-3">
                            <input type="text" id="login_id" name="login_id" value="<?php echo $all['login_id']; ?>" hidden>
                            <label for="Email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="<?php echo $all['email']; ?>" required>
                        </div>
                        <div class="text-center" style="margin-top:20px;">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                        
                        </form> 
                        
                    </div>
                    </div>
                    </div>
                    <?php }?>
                   <div class="col-sm-6">
                   <h1 class="h3 mb-2 text-gray-800">Reset Password</h1>
                    <div class="card shadow mb-4">
                    <div class="frm">
                    <form id="passwordForm" action="<?php echo site_url('ManageAccount/updatePassword')?>" method="post">
                    <input type="text" id="login_id" name="update_login_id" value="<?php echo $all['login_id']; ?>" hidden>
                    <input type="text" id="hide_pass" name="hide_pass" value="<?php echo $all['password']; ?>" hidden>
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


