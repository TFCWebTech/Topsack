                      
                       
                       <div class="cardd " id="<?php echo $addcount; ?>">
                       <input type="text" name="countIncrement" id="countIncrement" value="<?php echo $countIncrement; ?>" hidden>
                       <input type="text" id="countIncreamentVariable" value="<?php echo $countIncreamentVariable; ?>" hidden>
                            <div class="row" >
                                <div class="col-md-12 py-2 px-3 d-flex justify-content-between">           
                                <p class="serial-number" > <b>Shipment Sl. No. </b> <?php echo $addcount; ?></p>
                                
                                <a onclick="deleteData('<?php echo $addcount; ?>')" ><i class="fa fa-trash-o" style="color:red; font-size:24px;"></i></a>
                                </div>

                                <!-- <input type="text" class="serial-number" value="1" id="Shipment_no" > -->
                            <!-- <div class="col-md-4 input-container">           
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <select class="form-control" name="full_name<?php echo $countIncrement; ?>[]" onchange="customer_data(this.value, <?php echo $countIncrement; ?>)" id="customer_data<?php echo $countIncrement; ?>" required>
                                    <option >Select Name</option>
                                    <?php 
                                        foreach ($all as $value) { ?>
                                        <option value="<?php echo $value['customer_id']?>"><?php echo $value['customer_name']; ?></option>
                                        <?php }
                                        ?>
                                    </select>  
                                   </div>

                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Contact No" name="contact_no<?php echo $countIncrement; ?>[]" id="contact_no<?php echo $countIncrement; ?>" required>
                                   </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" class="form-control" placeholder="Enter Email" name="customer_email<?php echo $countIncrement; ?>[]" id="customer_email<?php echo $countIncrement; ?>" required>
                                </div>
                                </div> -->

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="text" class="form-control"  placeholder="Enter Shipment No." name="shipment_no<?php echo $countIncrement; ?>" required>
                                </div>                                                                
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="Enter PO Received Date" name="po_received_date<?php echo $countIncrement; ?>[]"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')"  onchange="setMinDate(this.value, 'dispatchDate12_<?php echo $countIncrement; ?>')" id="poReceivedDate12_<?php echo $countIncrement; ?>" required>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Dispatch Date" name="dispatch_date<?php echo $countIncrement; ?>[]"
                                onfocus="(this.type='date')"
                                onblur="(this.type='text')" id="dispatchDate12_<?php echo $countIncrement; ?>" required>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks<?php echo $countIncrement; ?>[]" required>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <select class="form-control" name="size_fcl<?php echo $countIncrement; ?>[]" required>
                                    <option>SIZE-FCL </option>
                                    <option>AIR</option>
                                    <option>LCL</option>
                                    <option>20' FCL</option>
                                    <option>40' FCL</option>
                                    </select>
                                </div>
                                </div>
                                 </div>
                                <hr>
                                <div class="row">
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="text" class="form-control"  placeholder="Enter Order No / Item Code" name="order_no<?php echo $countIncrement; ?>[]" required>
                                </div>
                                </div>
                              
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fas fa-arrows-alt-v"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Dimension-External" name="dimension_external<?php echo $countIncrement; ?>[]" required>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                                <input type="number" class="form-control" placeholder="Enter QTY" name="qty<?php echo $countIncrement; ?>[]"  id="qtyVal<?php echo $countIncrement; ?>" onchange="balesCount('<?php echo $addcount; ?>','<?php echo $countIncrement; ?>' )" required>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-cube"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Packing" name="packing<?php echo $countIncrement; ?>[]"  required>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class='fa fa-dot-circle-o'></i></span>
                                <input type="text" class="form-control" placeholder="Enter Pallets" name="pallets<?php echo $countIncrement; ?>[]" id="palletsVal<?php echo $countIncrement; ?>" onchange="balesCount('<?php echo $addcount; ?>','<?php echo $countIncrement; ?>')" required>
                                </div>
                                </div>
                               
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-line-chart"></i></span>
                                <input type="text" class="form-control" placeholder="Enter PAL / Bales" name="pal_bales<?php echo $countIncrement; ?>[]" id="pal_balesVal<?php echo $countIncrement; ?>" readonly>
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-ship"></i></span>
                                <select class="form-control" name="shipment_term<?php echo $countIncrement; ?>[]" required>
                                    <option>Shipment Term</option>
                                    <option value="FOB">FOB</option>
                                    <option value="CIF">CIF</option>
                                    <option value="DDU">DDU</option>
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-4">
                                <div class="input-icons">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="number" class="form-control" placeholder="Price" name="price<?php echo $countIncrement; ?>[]" step="any" required>
                                </div>
                                </div>
                                </div>
                          
                               <div class="row" >
                                <div class="col-md-12 text-right">
                                <a type="button" onclick="addData('addfieldsContainer<?php echo $addcount ?>', '<?php echo $addcount ?>')" style="color:#4e73df; margin:5px;"> <u> <b> Add More Fields </b></u></a>
                                </div>
                                <div id="addfieldsContainer<?php echo $addcount ?>" class="col-md-12 add-fields-container"> </div>
                                </div>
                                </div> 


                                

                                <script>
    function setMinDate(poReceivedDate, dispatchInputId) {
        var dispatchInput = document.getElementById(dispatchInputId);
        dispatchInput.min = poReceivedDate;
        dispatchInput.value = ''; // Clear the previous selection to enforce the min restriction
    }
</script>

                        
<script>



function updateSerialNumbers(containerId) {
    $('#' + containerId + ' .serial-number').each(function(index) {
        $(this).html('<b>Sl. No.</b> ' + (index + 1));
    });
}

function deleteData(containerId) {
    $('#' + containerId).remove();

    updateSerialNumbers(containerId);
    
    countIncreamentVariable = $('#countIncreamentVariable').val();
    
    $.ajax({
            type: 'POST',
            url: "<?php echo site_url('CompletedOrder/generalOrder'); ?>",
            datatype: "html",
            data :{
              
                countIncreamentVariable: parseInt(countIncreamentVariable) - 1
            },
            success: function (data){
               
                $('#countIncreamentVariable').val(parseInt(countIncreamentVariable)-1);
            }
        })
}
    </script>


<script>
    function customer_data(selectedValue, countIncrement) {
        var selectedIndex = document.getElementById('customer_data' + countIncrement).selectedIndex;
        var contact_no = document.getElementById('contact_no' + countIncrement);
        var customer_email = document.getElementById('customer_email' + countIncrement);

        // Assuming your PHP array is named $all and contains the customer_contact and customer_email fields
        var customerData = <?php echo json_encode($all); ?>;

        // Make sure the selectedIndex is greater than 0 and within the bounds of the array
        if (selectedIndex > 0 && selectedIndex <= customerData.length) {
            // Set the contact number and email based on the selected customer's data
            contact_no.value = customerData[selectedIndex - 1].customer_contact;
            customer_email.value = customerData[selectedIndex - 1].customer_email;
        } else {
            // Handle the case where no option is selected or the index is out of bounds
            contact_no.value = '';
            customer_email.value = '';
        }
    }
</script>

<!-- <script>
function changeInputType(element, type) {
    element.type = type;

    if (type === 'text') {
        var dateValue = element.value;
        if (dateValue !== '') {
            var formattedDate = formatDate(dateValue);
            element.value = formattedDate;
        }
    }
}

function formatDate(dateString) {
    var date = new Date(dateString);
    var day = date.getDate().toString().padStart(2, '0');
    var month = (date.getMonth() + 1).toString().padStart(2, '0');
    var year = date.getFullYear();

    var formattedDate = day + '/' + month + '/' + year;

    return formattedDate;
}
</script> -->

<!-- <script>
    function balesCount(addcount , countIncrement) {
        var qtyElement = document.getElementById("qtyVal");
        var palletsElement = document.getElementById("palletsVal");
        var balesValueElement = document.getElementById("pal_balesVal");

        if (qtyElement && palletsElement && balesValueElement) {
            var qty = parseFloat(qtyElement.value);
            var pallets = parseFloat(palletsElement.value);

            var bales = (pallets !== 0) ? qty / pallets : 0;

            balesValueElement.value = bales.toFixed(2);
        } else {
            console.error("One or more elements not found.");
        }
    }
</script> -->
<script>
    function balesCount(addcount, countIncrement) {
        var qtyElement = document.getElementById("qtyVal" + countIncrement);
        var palletsElement = document.getElementById("palletsVal" + countIncrement);
        var balesValueElement = document.getElementById("pal_balesVal" + countIncrement);

        if (qtyElement && palletsElement && balesValueElement) {
            var qty = parseFloat(qtyElement.value);
            var pallets = parseFloat(palletsElement.value);

            var bales = (pallets !== 0) ? qty / pallets : 0;

            balesValueElement.value = bales.toFixed(2);
        } else {
            console.error("One or more elements not found.");
        }
    }
</script>


<!-- 
<script>

var inputId = "pal_bales" + <?php echo $countIncrement; ?> + "[]";
    
    // Create dynamic IDs
    var qtyDynamicId = '#qty' + dynamicId;
    var palletsDynamicId = '#pallets' + dynamicId;
    var palBalesInputId = '#pal_bales' + dynamicId;

    // Use jQuery to add input event listeners
    $(document).ready(function() {
        $(qtyDynamicId).on('input', updatePalBalesDynamic);
        $(palletsDynamicId).on('input', updatePalBalesDynamic);
    });

    function updatePalBalesDynamic() {
        // Get values from quantity and pallets inputs
        var qtyValue = parseFloat($(qtyDynamicId).val()) || 0;
        var palletsValue = parseFloat($(palletsDynamicId).val()) || 0;

        // Perform the calculation
        var balesValue = (palletsValue !== 0) ? qtyValue / palletsValue : 0;

        // Update the PAL/Bales input field using jQuery
        $(palBalesInputId).val(balesValue.toFixed(2));
    }
</script> -->

<!-- <script>
    var qtyInput = document.getElementById('qty');
    var palletsInput = document.getElementById('pallets');
    var palBalesInput = document.getElementById('pal_bales');

    qtyInput.addEventListener('input', updatePalBales);
    palletsInput.addEventListener('input', updatePalBales);

    function updatePalBales() {
        var qtyValue = parseFloat(qtyInput.value) || 0;
        var palletsValue = parseFloat(palletsInput.value) || 0;

        var palBalesValue = (palletsValue !== 0) ? qtyValue / palletsValue : 0;

        palBalesInput.value = palBalesValue.toFixed(2); 
    }
</script> -->