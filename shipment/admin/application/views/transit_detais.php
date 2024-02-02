<style>
        .table thead th {
            vertical-align: top !important; 
            border-bottom: 2px solid #e3e6f0;
            width: auto !important;
        }
        
            .table {
                width: 150%;  
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
                        <div class="card-header py-3 d-flex ">
                            <h6 class="m-0 font-weight-bold text-primary">Transit Order</h6>
                            <a href="<?php echo site_url('Home#order')?>" class="btn btn-primary">Add Order</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" cellspacing="0">
                                    <thead>
                                    <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                           <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>

                                            <th colspan="2">DEPARTURE DATE FROM INDIAN PORT</th>
                                            <th></th>
                                            <th colspan="2">DEPARTURE DATE FROM MOTHER PORT</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Customer Name</th>
                                            <th>Contact No.</th>
                                            <th>Email</th>
                                            <th>PO #</th>
                                            <th>PO date</th>
                                            <th>TSP Invoice No.</th>
                                            <th>Container No.</th>
                                            <th>Shipping Line</th>
                                            <th>PORT OF LOADING</th>
                                            <th>Scheduled</th>
                                            <th>Actual</th>
                                            <th>Mother Port</th>
                                            <th>Scheduled</th>
                                            <th>Actual</th>
                                            <th>Port Of Dest.</th>
                                            <th>Expected Date Of Arrival At Destination</th>
                                            <th>Current Status</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Aniket</td>
                                            <td>8876756452</td>
                                            <td>aniket@gmail.com</td>
                                            <td>99876</td>
                                            <td>11/11/2023</td>
                                            <td>122009</td>
                                            <td>1221</td>
                                            <td>03</td>
                                            <td>abc</td>
                                            <td>11/11/2023</td>
                                            <td>11/11/2023</td>
                                            <td>SALALAH</td>
                                            <td>11/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>ANTWERP</td>
                                            <td>13/09/2023</td>
                                            <td>Departure</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Rohit</td>
                                            <td>9876756452</td>
                                            <td>rohit@gmail.com</td>
                                            <td>32876</td>
                                            <td>12/11/2023</td>
                                            <td>3322009</td>
                                            <td>1222</td>
                                            <td>02</td>
                                            <td>abc</td>
                                            <td>11/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>SINGAPORE</td>
                                            <td>12/11/2023</td>
                                            <td>13/11/2023</td>
                                            <td>ALGECIRAS</td>
                                            <td>14/09/2023</td>
                                            <td>Departure</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Rohan</td>
                                            <td>9876756452</td>
                                            <td>rohan@gmail.com</td>
                                            <td>88276</td>
                                            <td>13/11/2023</td>
                                            <td>2212009</td>
                                            <td>1223</td>
                                            <td>04</td>
                                            <td>abc</td>
                                            <td>12/11/2023</td>
                                            <td>13/11/2023</td>
                                            <td>PORT KLANG</td>
                                            <td>13/11/2023</td>
                                            <td>14/11/2023</td>
                                           
                                            <td>MORROW G A</td>
                                            <td>15/09/2023</td>
                                            <td>Departure</td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Jitendra</td>
                                            <td>9876756452</td>
                                            <td>Jitendra@gmail.com</td>
                                            <td>99876</td>
                                            <td>11/11/2023</td>
                                            <td>122009</td>
                                            <td>1224</td>
                                            <td>06</td>
                                            <td>abc</td>
                                            <td>12/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>COLOMBO</td>
                                            <td>12/11/2023</td>
                                            <td>13/11/2023</td>
                                            <td>FREMANTLE</td>
                                            <td>16/09/2023</td>
                                            <td>Departure</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- End of Main Content -->
