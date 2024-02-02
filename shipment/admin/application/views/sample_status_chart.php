<style>
        .table thead th {
            vertical-align: top !important; 
            border-bottom: 2px solid #e3e6f0;
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
                        <div class="card-header py-3 d-flex">
                            <h6 class="m-0 font-weight-bold text-primary">Sample Status Chart</h6>
                            <a href="<?php echo site_url('Home#order')?>" class="btn btn-primary">Add Order</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Sl No</th>
                                            <th>Customer Name</th>
                                            <th>Contact No.</th>
                                            <th>Email</th>
                                            <th>Sample Ref</th>
                                            <th>TSP Ref</th>
                                            <th># QTY</th>
                                            <th>Delivery Address</th>
                                            <th>Estimated Dispatch Date</th>
                                            <th>Confirmed Dispatch Date</th>
                                            <th>Courier Name</th>
                                            <th>AWB # </th>
                                            <th>Remarks</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Jitendra</td>
                                            <td>9876756452</td>
                                            <td>Jitendra@gmail.com</td>
                                            <td>99876</td>
                                            <td>122009</td>
                                            <td>07</td>
                                            <td>Nashik</td>
                                            <td>11/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>TNT</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                        </tr>
                                        <tr>
                                        <td>02</td>
                                            <td>Ankit</td>
                                            <td>9876756452</td>
                                            <td>ankit@gmail.com</td>
                                            <td>99876</td>
                                            <td>122009</td>
                                            <td>07</td>
                                            <td>Nashik</td>
                                            <td>11/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>TNT</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                        </tr>
                                        <tr>
                                        <td>03</td>
                                            <td>Rahul</td>
                                            <td>9876756452</td>
                                            <td>rahul@gmail.com</td>
                                            <td>99876</td>
                                            <td>122009</td>
                                            <td>07</td>
                                            <td>Nashik</td>
                                            <td>11/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>TNT</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                        </tr>
                                        <tr>
                                        <td>04</td>
                                            <td>Rohan</td>
                                            <td>9876756452</td>
                                            <td>rohan@gmail.com</td>
                                            <td>99876</td>
                                            <td>122009</td>
                                            <td>07</td>
                                            <td>Nashik</td>
                                            <td>11/11/2023</td>
                                            <td>12/11/2023</td>
                                            <td>TNT</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->
