

<style>
    .frm{
        padding:20px;
    }
</style>
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                    <div class="col-sm-6">
                    <h1 class="h3 mb-2 text-gray-800">Change Email</h1>
                    <div class="card shadow mb-4">
                    <div class="frm">
                    <form action="/action_page.php">
                        <div class="mb-3  mt-3">
                            <label for="Email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="c_password">
                        </div>
                        <div class="mb-3">
                            <label for="New Email" class="form-label">New Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="new_email">
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
                    <form action="/action_page.php">
                        <div class="mb-3  mt-3">
                            <label for="Current Password" class="form-label">Current Password:</label>
                            <input type="password" class="form-control" id="c_password" placeholder="Enter Current Password" name="c_password">
                        </div>
                        <div class="mb-3">
                            <label for="New Password" class="form-label">New Password:</label>
                            <input type="password" class="form-control" id="new_password" placeholder="Enter Password" name="new_password">
                        </div>
                        <div class="mb-3">
                            <label for="Confirm Password" class="form-label">Confirm Password:</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                        </div>
                        <div class="text-center" style="margin-top:20px;">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                        </div>
                        </form> 
                    </div>
                    </div>
                    </div>
            </div>
            <!-- End of Main Content -->
