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
                        <div class="card-header py-3 d-flex ">
                            <h6 class="m-0 font-weight-bold text-primary">Pending Order</h6>
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
                                            <th>Shipment No.</th>
                                            <th>Order No / Item Code</th>
                                            <th>Po Received Date</th>
                                            <th>Dimension-External</th>
                                            <th>QTY</th>
                                            <th>Packing</th>
                                            <th>Pallets</th>
                                            <th># PAL / BALES</th>
                                            <th>Shipment Term</th>
                                            <th>Dispatch Date</th>
                                            <th>Remarks</th>
                                            <th>SIZE- FCL</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Aniket</td>
                                            <td>8876756452</td>
                                            <td>aniket@gmail.com</td>
                                            <td>99876</td>
                                            <td>122009</td>
                                            <td>11/11/2023</td>
                                            <td>abc</td>
                                            <td>03</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>CIF</td>
                                            <td>12/11/2023</td>
                                            <td>abc</td>
                                            <td>AIR</td>
                                        </tr>
                                        <tr>
                                            <td>03</td>
                                            <td>Rohit</td>
                                            <td>9876756452</td>
                                            <td>rohit@gmail.com</td>
                                            <td>32876</td>
                                            <td>3322009</td>
                                            <td>12/11/2023</td>
                                            <td>abc</td>
                                            <td>02</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>FOB</td>
                                            <td>13/11/2023</td>
                                            <td>abc</td>
                                            <td>LCL</td>
                                        </tr>
                                        <tr>
                                            <td>04</td>
                                            <td>Rohan</td>
                                            <td>9876756452</td>
                                            <td>rohan@gmail.com</td>
                                            <td>88276</td>
                                            <td>2212009</td>
                                            <td>13/11/2023</td>
                                            <td>abc</td>
                                            <td>04</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>CIF</td>
                                            <td>14/11/2023</td>
                                            <td>abc</td>
                                            <td>20' FCL</td>
                                        </tr>
                                        <tr>
                                            <td>01</td>
                                            <td>Jitendra</td>
                                            <td>9876756452</td>
                                            <td>Jitendra@gmail.com</td>
                                            <td>99876</td>
                                            <td>122009</td>
                                            <td>11/11/2023</td>
                                            <td>abc</td>
                                            <td>06</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>abc</td>
                                            <td>FOB</td>
                                            <td>12/11/2023</td>
                                            <td>abc</td>
                                            <td>40' FCL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <!-- End of Main Content -->
