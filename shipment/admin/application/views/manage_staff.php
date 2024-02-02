<style>
        .table thead th {
            vertical-align: top !important; 
            border-bottom: 2px solid #e3e6f0;
        }
            .table {
                width: 100%;  
                margin-bottom: 1rem;
                color: #858796;
            }
            div#dataTable_paginate {
                    float: right !important;
                }
                div#dataTable_filter {
                display: none !important;
                 }
                 .card-header{
                  display: flex!important;
                  justify-content: space-between !important;
                 }
    </style>
 
     <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex">

                            <h6 class="m-0 font-weight-bold text-primary">Manage Staff</h6>
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Manage Staff</h6> -->
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add Staff</button>
                        </div>
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                              <div class="modal-content">
                              
                                <!-- Modal Header -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Manage Staff</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <form action="/action_page.php">
                                        <div class="form-group">
                                          <label for="Name">Name:</label>
                                          <input type="text" class="form-control" placeholder="Enter Name" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" class="form-control" placeholder="Enter Email" id="email">
                                          </div>
                                        <!-- <div class="form-group">
                                          <label for="pwd">Password:</label>
                                          <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password:</label>
                                            <input type="password" class="form-control" placeholder="Enter Confirm Password" id="confirm_password">
                                          </div> -->
                                        <div class="form-group ">
                                          <label for="sel1">Role:</label>
                                          <select class="form-control" id="sel1">
                                            <option>Select</option>
                                            <option>Logistic/Shipment</option>
                                            <option>Sales</option>
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
                          <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Contact No.</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th> </th>
                                            <th></th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <tr>
                                            <td>Jitendra Jadhav</td>
                                            <td>Jitendra@gmail.com</td>
                                            <td>9876543245</td>
                                            <td>Shipment/Logistic</td>
                                            <td class="text-center"> <a href="<?php print site_url('ManageAccount'); ?>" class="btn btn-primary">edit details</a> </td>
                                        <tr>
                                            <td>Joe Jhone</td>
                                            <td>Joe@gmail.com</td>
                                            <td>9923456789</td>
                                            <td>Staff</td>
                                            <td class="text-center"> <a href="<?php print site_url('ManageAccount'); ?>" class="btn btn-primary">edit details</a> </td>
                                      
                                        </tr>
                                        <tr>
                                            <td>Raj Meheta</td>
                                            <td>Raj@gmail.com</td>
                                            <td>8907653467</td>
                                            <td>Staff</td>
                                            <td class="text-center"> <a href="<?php print site_url('ManageAccount'); ?>" class="btn btn-primary">edit details</a> </td>
                                      
                                        </tr>
                                      
                                        <tr>
                                            <td>Emma Watson</td>
                                            <td>Emma@gmail.com</td>
                                            <td>New York</td>
                                            <td>Shipment/Logistic</td>
                                            <td class="text-center"> <a href="<?php print site_url('ManageAccount'); ?>" class="btn btn-primary">edit details</a> </td>
                                      
                                        </tr>
                                    </tbody>  
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>