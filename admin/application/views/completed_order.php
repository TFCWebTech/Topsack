
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Completed Order Chart </h1>
                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- <h6 class="m-0 font-weight-bold text-primary">Manage Staff</h6> -->
                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add Order</button>
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
                                        <div class="form-group">
                                          <label for="pwd">Password:</label>
                                          <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                                        </div>
                                        <div class="form-group">
                                            <label for="confirm_password">Confirm Password:</label>
                                            <input type="password" class="form-control" placeholder="Enter Confirm Password" id="confirm_password">
                                          </div>
                                        <div class="form-group ">
                                          <label for="sel1">Role:</label>
                                          <select class="form-control" id="sel1">
                                            <option>Select</option>
                                            <option>Logistic/Shipment</option>
                                            <option>Sales</option>
                                          </select>
                                        </div>
                                        <div class="modal-footer">
                                         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </form>
                                  </div>
                              </div>
                          </div>
                          </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>SL. No.</th>
                                            <th>Shipment No.</th>
                                            <th>Order No / Item Code</th>
                                            <th>Po Received Date</th>
                                            <th>Dimension-External</th>
                                            <th>QTY</th>
                                            <th>Packing</th>
                                            <th>Pallets</th>
                                            <th># PAL / BALES</th>
                                            <th>Shipment Term</th>
                                            <th>Dispatch Date </th>
                                            <th>Remarks</th>
                                            <th>Size- FCL</th>
                                            
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
                                            <td>01</td>
                                            <td>001</td>
                                            <td>009</td>
                                            <td>13/06/2023</td>
                                            <td>13/06/2023</td>
                                            <td>05</td>
                                            <td>22</td>
                                            <td>5</td>
                                            <td>13</td>
                                            <td>15/06/2023</td>
                                            <td>12</td>
                                            <td>13/06/2023</td>
                                            <td>15/06/2023</td>
                                           
                                      </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>001</td>
                                            <td>009</td>
                                            <td>13/06/2023</td>
                                            <td>13/06/2023</td>
                                            <td>05</td>
                                            <td>22</td>
                                            <td>5</td>
                                            <td>13</td>
                                            <td>15/06/2023</td>
                                            <td>12</td>
                                            <td>13/06/2023</td>
                                            <td>15/06/2023</td>
                                         
                                      </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>001</td>
                                            <td>009</td>
                                            <td>13/06/2023</td>
                                            <td>13/06/2023</td>
                                            <td>05</td>
                                            <td>22</td>
                                            <td>5</td>
                                            <td>13</td>
                                            <td>15/06/2023</td>
                                            <td>12</td>
                                            <td>13/06/2023</td>
                                            <td>15/06/2023</td>
                                           
                                      </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->
