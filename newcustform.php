<!DOCTYPE html>
<html>
    <head>
        <title> New Customer </title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/adduserstyle.css">
    </head>
    <body>
        <header><h1 class="text-bg-dark text-center">MTNL Add User</h1></header>
        <form action="newcustform.php" method="POST" id="form-1">
            <div class="container">
                <div class="row">
                                <!-- Customer Details -->
                    <div class="form-control-2"> 
                            <h3>Customer Details</h3> <hr>
                                <!-- Customer Name -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="custname">Customer Name</label>
                                <input class="form-control" type="text" name="custname" id="custname" placeholder="customer name" required/>
                            </div>
                        </div>
                                <!-- Mobile No. -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="mobno">Mobile No.</label>
                                <input class="form-control" type="text" name="mobno" id="mobno" placeholder="mobile no" required/>
                            </div>
                        </div>
                                <!-- Address -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="address">Address</label>
                                <input class="form-control" type="text" name="address" id="address" placeholder="address" required/>
                            </div>
                        </div>
                    </div>
                                <!-- Connection Details -->
                    <div class="form-control-2">
                            <h3>Connection Details</h3><hr>
                                <!-- Type (Broadband/Lease) -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label>Type</label>
                                <select  id="contype">
                                    <option id="broadband" name="ctype" value="brdbnd">Broadband</option>
                                    <option id="lease" name="ctype" value="lese">Lease</option>
                                </select>
                            </div>
                        </div>
                                <!-- Work order no -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="wono">WO. No.</label>
                                <input class="form-control" type="text" name="wono" id="wono" placeholder="work order no" required/> 
                            </div>
                        </div>
                                <!-- Landline -->
                        <div id="LandlineDiv">
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="landline">Landline</label>
                                <input class="form-control" type="text" name="landline" id="landline" placeholder="landline" required/> 
                            </div>
                        </div>
                                <!-- CA No -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="cano">CA. No.</label>
                                <input class="form-control" type="text" name="cano" id="cano" placeholder="ca. no." required/> 
                            </div>
                        </div>
                                <!-- Voice Static IP -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="voicesip">Voice Static IP</label>
                                <input class="form-control" type="text" name="voicesip" id="voicesip" placeholder="voice static ip" required/> 
                            </div>
                        </div>
                        </div>
                                <!-- Voice/Vlan -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="voice">Voice/ Vlan</label>
                                <input class="form-control" type="text" name="voice" id="voice" placeholder="voice/vlan" required/> 
                            </div>
                        </div>
                                
                                <!-- ONT Type (wifi/wired) -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label>ONT Type</label>
                                <select>
                                    <option id="ontwifi" name="onttype">WiFi</option>
                                    <option id="ontwired" name="onttype">Wired</option>
                                </select>
                            </div>
                        </div>
                                <!-- ONT By (Partner/User) -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label>ONT By</label>
                                <select>
                                    <option id="ontpartner" name="ontby">Partner</option>
                                    <option id="ontuser" name="ontby">User</option>
                                </select>
                            </div>
                        </div>
                                <!-- ONT Series/Mac -->
                        <div class="col-sm-3">
                            <div class="mb-3">
                                <label for="">ONT Series/Mac</label>
                                <input class="form-control" type="text" name="ontmac" id="ontmac" placeholder="ont series mac" required/>
                            </div>
                        </div>
                    </div>
                                <!-- Save/Clear Btn -->
                    <div class="col-sm-3">
                            <button id="save" class="btn btn-primary" name="Save">Save</button>
                            <button id="clear" class="btn btn-primary" name="Clear">Clear</button>
                    </div>
                </div>
            </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script type="text/javascript">
    $("#contype").change(function(){
        if ($(this).val() == "brdbnd") {
            $('#LandlineDiv').show();

            $('#landline').attr('required','');
            $('#landline').attr('data-error','This field is required.');

            $('#cano').attr('required','');
            $('#cano').attr('data-error','This field is required.');

            $('#voicesip').attr('required','');
            $('#voicesip').atter('data-error','This field is required.');
        } else {
            $('#LandlineDiv').hide();

            $('#landline').removeAttr('required');
            $('#landline').removeAttr('data-error');

            $('#cano').removeAttr('required');
            $('#cano').removeAttr('data-error');

            $('#voicesip').removeAttr('required');
            $('#voicesip').removeAttr('data-error');
        }
    });
    $("#contype").trigger("change");

</script>
    </body>
</html>