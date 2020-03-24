<?php 
// include 'barcode.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Edo State Rider's Permit Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- DataTables -->
        <link href="assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 
        <!--  -->
        <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
        <link href="assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="js/html2canvas.js"></script>
        

        <script>
            function printCard(el, name) {
                // var restorepage = document.body.innerHTML;
                // var printcontent = document.getElementById(el).innerHTML;
                // document.body.innerHTML = printcontent;
                // window.print();
                // document.body.innerHTML = restorepage;
                console.log("Here to display the Image");
                console.log(" ")

                window.scrollTo(0, 0);
                html2canvas(document.getElementById(el)).then(function(canvas){
                    var link = document.createElement("a");
                    document.body.appendChild(link);
                    link.download = name + ".jpg";
                    link.href = canvas.toDataURL("image/png", 0.9);
                    link.target = '_blank';
                    link.click();
                    // window.print(link.target);
                    // console.log(canvas.toDataURL("image/png", 0.9));

                
                });
                
                // html2canvas(document.getElementById(el)).then(function(canvas){
                //         var link = document.createElement("a");

                //         document.body.appendChild(link);
                //         link.download = "permit_front_page.jpg";
                //         link.href = canvas.toDataURL();
                //         link.target = '_blank';
                //         link.click();
                //     }
                // )
            }
        </script>

    </head>

    <body>

        <!-- Top Bar Start -->
        <div class="topbar enlarge-menu">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="projects/projects-index.html" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg">
                    </span>
                </a>
            </div>
            <!--end logo-->
            <!-- Navbar -->
            <nav class="navbar-custom">    
                <ul class="list-unstyled topbar-nav float-right mb-0"> 
                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle" /> 
                            <span class="ml-1 nav-user-name hidden-sm"> <i class="mdi mdi-chevron-down"></i> </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted mr-2"></i> Logout</a>
                        </div>
                    </li>
                </ul><!--end topbar-nav-->
    
                <ul class="list-unstyled topbar-nav mb-0">                        
                    <!-- <li>
                        <button class="button-menu-mobile nav-link waves-effect waves-light">
                            <i class="dripicons-menu nav-icon"></i>
                        </button>
                    </li> -->
                    <!-- <li class="hide-phone app-search"> -->
                        
                        <!-- <form role="search" class="">
                            <div class="input-group">                                            
                                <input type="text" class="form-control" name="dates">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                                </div>
                            </div>
                            <input type="text" placeholder="Search..." class="form-control">
                            <a href=""><i class="fas fa-search"></i></a>
                        </form> -->
                    <!-- </li> -->
                    <li class="hide-phone app-search">
                        <div class="input-group">                                            
                            <input type="text" class="form-control" name="dates">
                            <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                            <!-- <div class="input-group-append">
                                <span class="input-group-text"><i class="dripicons-calendar"></i></span>
                            </div> -->
                        </div>
                    </li>
                    
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->

        <div class="page-wrapper">
            
            <!-- end left-sidenav-->

            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <!-- <div class="float-right">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                                        <li class="breadcrumb-item active">Datatable</li>
                                    </ol>
                                </div> -->
                                <h4 class="page-title">Rider's Permit</h4>
                            </div><!--end page-title-box-->
                        </div><!--end col-->
                    </div><!--end row-->
                    <!-- end page title end breadcrumb -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
    
                                    <!-- <h4 class="mt-0 header-title">Buttons example</h4>
                                    <p class="text-muted mb-3">The Buttons extension for DataTables
                                        provides a common set of options, API methods and styling to display
                                        buttons on a page that will interact with a DataTable. The core library
                                        provides the based framework upon which plug-ins can built.
                                    </p> -->
    
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead id="table-header">
                                            <tr id="table-columns">
                                                <th>S/N</th>
                                                <th>Full Name</th>
                                                <th>License Number</th>
                                                <th>Jacket Number</th>
                                                <th>Phone Number</th>
                                                <th>Sex</th>
                                                <th>Blood Group</th>
                                                <th>Next of Kin</th>
                                                <th>Contact Address</th>
                                                <th>Card Print</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td id="sn">1</td>
                                                <td id="fname">Ayodeji Moshood</td>
                                                
                                                <td><div class="badge badge-success" name="licenceno">ERP-EDO-0001</div></td>
                                                <td>
                                                    <div class="badge badge-primary" name="jnumber"><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter Jacket Number"></a></div>
                                                </td>
                                                <!-- <td><div class="badge badge-primary">ERP-EDO-0010</div></td> -->
                                                <td name="phone_number">07060460216</td>
                                                <td name="gender">M</td>
                                                <td name="bgroup">O+</td>
                                                <td name="kinnumber">07060460216</td>
                                                <td name="address">Lekki, Lagos</td>
                                                <td>
                                                    <div data-toggle="modal" data-target=".bd-example-modal-lg" class="badge badge-warning">Front Card</div>
                                                    <div data-toggle="modal" data-target=".bd-example-modal-lg-back-card" class="badge badge-danger">Back Card</div>
                                                    <!-- Start Front CardModal -->
                                                    <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                            <div class="modal-content" style="height: 650px; position: absolute; top: 0; left: 0; bottom: 0; right: 0;">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Rider's Permit Front Card - Preview</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body" stylexx="height: 300px;">
                                                                    <!-- START LICENSE CARD FRONT -->
                                                                    
                                                                    <!-- <button onclick="window.print();">
                                                                        Print
                                                                    </button> -->
                                                                    <div class="column is-6 is-offset print-container" id="frontcard" style="overflow: auto; heightxx: 442px; height: 100%; width: 100%; xxmax-width: 648px; page-break-before: avoid; margin: 0; padding: 0;">
                                                                        <div class="navigation-tabs outlined-pills rounded-pills animated-tabs">
                                                                            <div id="tab-m1" class="navtab-content is-active">
                                                                                <!-- <form> -->
                                                                                    <div class="columns is-vcentered" style="margin-bottomxx: .75rem; height: 300px;">
                                                                                        <div class="column col-12 xxis-12 xxis-offset">
                                                                                            <div class="flex-card simple-shadow" style="heightxx: 424px; widthxx: 548px; border-radius: 1.1875rem;  background-image: url(images/licensepermit-bg.jpg); background-size: cover; background-repeat: no-repeat;">
                                                                                                <div class="card-body" style="padding: 5px 15px;">
                                                                                                    
                                                                                                    <div class="content container-fluid">
                                                                                                        <div class="row">
                                                                                                            <!-- <div class="col-md-12">
                                                                                                                <div class="field mt-4">
                                                                                                                    <img src="images/licensecardheader.png" width="100%" alt="">
                                                                                                                </div>
                                                                                                            </div> -->
                                                                                                            <img src="images/licensecardheader.png" width="100%" alt="">
                                                                                                        </div>
                                                                                                        <div class="row mt-4xx" style="background-color: #008c35; margin: 12px 0px 12px 0px">
                                                                                                            <div class="col-md-6">
                                                                                                                <div class="field mt-4x" style="font-size: 100%;">
                                                                                                                    <!-- <br>
                                                                                                                    <br> -->
                                                                                                                    <label for=""><b style="colorxx: #ee234e; color: #ffffff; font-size: 150%;">ISSUED DATE</b> <span style="font-size: 180%; color: black;"><b>21-02-2020</b></span></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-6 ml-autoxx">
                                                                                                                <div class="field mt-4x">
                                                                                                                    <!-- <br>
                                                                                                                    <br> -->
                                                                                                                    <label for="" styleXX="margin-left: 140px;"><b style="colorxx: #ee234e; color: #ffffff; font-size: 150%;">EXPIRY DATE</b> <span style="font-size: 180%; color: black;"><b>20-02-2021</b></span></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <div class="col-md-4">
                                                                                                                <div class="field mt-4">
                                                                                                                    <img src="images/passport.png" width="100%" max-width="250px" alt="">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-4 ml-autoxx" style="width: 80%">
                                                                                                                <div class="field mt-4">
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">RPNO</b> <span style="font-size: 150%; color: black;"><b>EDSG-CEN-00000</b></span></label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">NAME</b> <span style="font-size: 150%; color: black;"><b>OSAGIE EHIS MOMOH</b></span> </label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">D.O.B</b> <span style="font-size: 150%; color: black;"><b>27-11-1992</b></span></label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">PHONE NO</b> <span style="font-size: 150%; color: black;"><b>07060460216</b></span></label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">ADDRESS</b> <span style="font-size: 150%; color: black;"><b>SAPELE ROAD, BENIN-CITY</b></span></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="col-md-4 ml-autoxx" style="padding-left: 8%; width: 80%; float: right; positionxx: fixed; right: 0;">
                                                                                                                <div class="field mt-4">
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">J.NO</b> <span style="font-size: 150%; color: black;"><b>EDO-RP-00001</b></span></label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">RIN</b> <span style="font-size: 150%; color: black;"><b>GTV-LPO-0098</b></span></label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">SEX</b> <span style="font-size: 150%; color: black;"><b>M</b></span></label>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 130%;">BLOOD GROUP</b> <span style="font-size: 150%; color: black;"><b>O+</b></span> </label>
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <!-- <br>
                                                                                                                    <br>
                                                                                                                    <br> -->
                                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/signature.png" width="66px" alt="">
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 17px;">HOLDER'S SIGNATURE</b></label>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="row">
                                                                                                            <!-- <div class="col-md-4">
                                                                                                                <div class="field mt-5" style="font-size: 100%;">
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 110%;">ISSUED DATE</b> <span style="font-size: 100%;"><b>21-02-2020</b></span></label>
                                                                                                                </div>
                                                                                                            </div> -->
                                                                                                            <!-- <div class="col-md-4 ml-autoxx">
                                                                                                                <div class="field mt-5">
                                                                                                                    <br>
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 13px;">ISSUED DATE</b> <span style="font-size: 130%;"><b>20-02-2021</b></span></label>
                                                                                                                </div>
                                                                                                            </div> -->
                                                                                                            <!-- <div class="col-md-4 ml-autoxx" style="float: right;">
                                                                                                                <div class="field mt-3" style="margin-left: 540px;">
                                                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/signature.png" width="66px" alt="">
                                                                                                                    <br>
                                                                                                                    <label for=""><b style="color: #ee234e; font-size: 13px;">HOLDER'S SIGNATURE</b></label>
                                                                                                                </div>
                                                                                                            </div> -->
                                                                                                        </div>                                                                                                        
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                <!-- </form> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END LICENSE CARD FRONT -->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <!-- <button onclick="window.print();" type="button" class="btn btn-danger">Print</button> -->
                                                                    <button onclick="printCard('frontcard', 'Moshood_front');" type="button" class="btn btn-danger">Print</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Front Card Modal -->
                                                    
                                                    <!-- Start Back Card Modal -->
                                                    <div class="modal fade bd-example-modal-lg-back-card" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                                            <div class="modal-content" style="height: 650px; position: absolute; top: 0; left: 0; bottom: 0; right: 0;">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Rider's Permit Front Card - Preview</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body" style="xxheight: 300px; color: black;">
                                                                    
                                                                    <!-- START LICENSE CARD BACK -->
                                                                    <div class="column is-6 is-offset print-container" id="backcard" style="overflow: auto; height: 100%; width: 100%; xxmax-width: 648px; page-break-before: avoid; margin: 0; padding: 0;">
                                                                        <div class="navigation-tabs outlined-pills rounded-pills animated-tabs">
                                                                            <div id="tab-m1" class="navtab-content is-active">
                                                                                <div class="columns is-vcentered" style="margin-bottomxx: .75rem; height: 300px;">
                                                                                    <div class="column col-12 xxis-12 xxis-offset">
                                                                                        <div class="flex-card simple-shadow" style="heightxx: 424px; widthxx: 548px; border-radius: 1.1875rem;  background-image: url(images/licensepermit-bg.jpg); background-size: cover; background-repeat: no-repeat;">
                                                                                            <div class="card-body" style="padding: 5px 15px;">
                                                                                                <div class="content container-fluid">
                                                                                                    <div class="row">
                                                                                                        <img src="images/licensecardheaderback.png" width="100%" alt="">
                                                                                                    </div>
                                                                                                    <div class="row">
                                                                                                        <div class="col-md-12">
                                                                                                            <div class="field mt-4">
                                                                                                                <p style="font-size: 13px; text-align: center;"><b>FOR MOTORCYCLE AND TRICYCLE <br> THE BEARER OF THIS CARD IS HEREBY AUTHORIZED TO OPERATE AS A RIDER IN EDO STATE</b></p>
                                                                                                                <!-- <img style="display: block; margin-left: auto; margin-right: auto;" src="images/barcode.png" widthxx="50%" alt=""> -->
                                                                                                                <?php echo "<img style='display: block; margin-left: auto; margin-right: auto;' src='barcode.php?codetype=code39&size=50&text=001200200002&print=false' width='278px' alt=''/>" ?>
                                                                                                                
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>

                                                                                                    <div class="row" style="margin-top: 56px; margin-bottom: 10px; xxposition: fixed; xxbottom: 0px; wxxidth: 100%;">
                                                                                                        <div class="col-md-8">
                                                                                                            <div class="field mt-4" style="font-size: 13px;">
                                                                                                                <span><b>THIS CARD CANNOT BE TRANSFERRED, IF FOUND PLEASE RETURN TO</b></span>
                                                                                                                <br>
                                                                                                                <span><b>EDO STATE MINISTRY OF TRANSPORT</b></span>
                                                                                                                <span><b>OR THE NEAREST POLICE STATION</b></span>
                                                                                                                <br>
                                                                                                                <span><b>MISUSE OF THIS PERMIT IS A VIOLATION OF EDO STATE GOVERNMENT <br> REGUALTIONS.</b></span>
                                                                                                                <br>
                                                                                                                <span><b>REPLACEMENT OF THIS LICENSE IS SUBJECT TO AN ADMINISTRATIVE FEE</b></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        
                                                                                                        <!-- <div class="col-md-4" stylexx="float: right;">
                                                                                                            <div class="field mt-4" stylex="margin-left: 50px;">
                                                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                                <img src="images/signature.png" width="30%" alt="">
                                                                                                                <br>
                                                                                                                <label for=""><b style="color: #ee234e; font-size: 13px;">DIRECTOR OF TRANSPORT</b></label>
                                                                                                            </div>
                                                                                                        </div> -->
                                                                                                    </div>                                                                                                        
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END LICENSE CARD BACK -->
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <!-- <button onclick="window.print();" type="button" class="btn btn-danger">Print</button> -->
                                                                    <button onclick="printCard('backcard', 'Moshood_back');" type="button" class="btn btn-danger">Print</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End BACK CARD Modal -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>        
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    &copy; 2020 Edo State Rider's Permit
                    <!-- &copy; 2020 Edo State Rider's Permit <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by GHMobile</span> -->
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Date Range js -->
        

        

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="assets/plugins/datatables/jszip.min.js"></script>
        <script src="assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
        <script src="assets/pages/jquery.datatable.init.js"></script>
        <!-- XEditable Plugin -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/plugins/x-editable/js/bootstrap-editable.min.js"></script>
        <script src="assets/pages/jquery.form-xeditable.init.js"></script>

        <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="assets/plugins/select2/select2.min.js"></script>
        <script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="assets/pages/jquery.forms-advanced.js"></script>
        <!-- <script type="text/javascript" src="data.json"></script> -->
        <!-- App js -->
        <script src="assets/js/app.js"></script>

		 <!-- Handle date here-->
        <script>
            $(function() {
              $('input[name="dates"]').daterangepicker({
                singleDatePicker: true,
                opens: 'left'
              }, function(start, end, label) {
                console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

                // fetchRequest(start.format('YYYY-MM-DD'));
                searchItem = start.format('YYYY-MM-DD');
                $.ajax({
                    type: "post",
                    url: "getinfo.php" ,
                    data: { search: searchItem },
                    dataType: "text",
                        success : function(response) { 

                            // here is the code that will run on client side after running clear.php on server

                            // function below reloads current page
                            // location.reload();
                       
                            console.log('SUCCESS BLOCK');
                            // console.log(response);

                            if(response != "ok"){
                                var json = JSON.parse(response);
                                var jsonarray = json.data;
                                
                                // var tableRows = document.getElementById('datatable-buttons').getElementsByTagName('tbody')[0].remove();
                                // var rowCount = tableRows.length;

                                // if(rowCount > 1)
                                //     for (var x = rowCount - 1; x > 0; x--) {
                                //         elmtTable.removeChild(tableRows[x]);
                                //     }
                                
                                $("#tbody").html("");

                                fillUpTheTable(jsonarray);

                            }else {
                                
                                alert('No data Fetched')
                                // var local_data = require('data.json');

                                // // var local_data = data;
                                // // var json = JSON.parse(local_data);
                                // console.log(local_data);
                                // fillUpTheTable(json);
                                // var allQuestions = new Array();
                              
                                fetch("./js/data.json")
                                    .then(function(resp){
                                        return resp.json();
                                    })
                                    .then(function(data){
                                        console.log(data.data);
                                        $("#tbody").html("");
                                        fillUpTheTable(data.data);
                                    });
                               
                               
                                

                            }
                            
                           // alert(whatObjectIsThis(response));
                            
                        },
                        error: function(response) {
                            console.log('ERROR BLOCK');
                            console.log(response);
                        }
                    
                });

              });

              
            });
            
            function fillUpTheTable(data){
                dataField = '';
                for (var i = 0; i < data.length; i++) {
                
                    var serialno = i + 1;

                    var tableRef = document.getElementById('datatable-buttons').getElementsByTagName('tbody')[0];
                   
                    var table_row = document.createElement("tr");


                    var dateIssued = getDate(data[i].issuedate); //dateFormat(data[i].issuedate, "dd/mm/yyyy");
                    var dateExpired = getDate(data[i].expirydate); //dateFormat(data[i].expirydate, "dd/mm/yyyy");

                    dataField += '<tr>'
                    +'<td id="sn">'+i+'</td>'
                    +'<td id="fname">'+data[i].nameonlicence+'</td>'
                    +'<td><div class="badge badge-success" name="licenceno">'+data[i].licenceno +'</div></td>'
                    +'<td><div class="badge badge-primary inline-jacket-number" name="jnumber"><a href="#" id="inline-firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter Jacket Number">Empty</a></div></td>'
                    +'<td name="phone_number">'+data[i].riderstelephoneno+'</td>'
                    +'<td name="gender">'+data[i].ridersgender+'</td>'
                    +'<td name="bgroup">'+data[i].ridersgender+'</td>'
                    +'<td name="kinnumber">'+data[i].next_of_kin+'</td>'
                    +'<td name="address">'+data[i].ridersaddress+'</td>'
                    +'<td>'
                    +'<div data-toggle="modal" data-target=".bd-example-modal-lg" class="badge badge-warning">Front Card</div>'
                    +'<div data-toggle="modal" data-target=".bd-example-modal-lg-back-card" class="badge badge-danger">Back Card</div>'
                    +'<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">'
                    +'<div class="modal-dialog modal-lg modal-dialog-centered" role="document">'
                    +'<div class="modal-content" style="height: 650px; position: absolute; top: 0; left: 0; bottom: 0; right: 0;">'
                    +'<div class="modal-header">'
                    +'<h5 class="modal-title" id="exampleModalCenterTitle">Rider\'s Permit Front Card - Preview</h5>'
                    +'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'
                    +'<span aria-hidden="true">&times;</span>'
                    +'</button>'
                    +'</div>'
                    +'<div class="modal-body" stylexx="height: 300px;">'
                    +'<div class="column is-6 is-offset print-container" id="frontcard" style="overflow: auto; heightxx: 442px; height: 100%; width: 100%; xxmax-width: 648px; page-break-before: avoid; margin: 0; padding: 0;">'
                    +'<div class="navigation-tabs outlined-pills rounded-pills animated-tabs">'
                    +'<div id="tab-m1" class="navtab-content is-active">'
                    +'<div class="columns is-vcentered" style="margin-bottomxx: .75rem; height: 300px;">'
                    +'<div class="column col-12 xxis-12 xxis-offset">'
                    +'<div class="flex-card simple-shadow" style="heightxx: 424px; widthxx: 548px; border-radius: 1.1875rem;  background-image: url(images/licensepermit-bg.jpg); background-size: cover; background-repeat: no-repeat;">'
                    +'<div class="card-body" style="padding: 5px 15px;">'
                                                                        
                    +'<div class="content container-fluid">'
                    +'<div class="row">'
                    +'<img src="images/licensecardheader.png" width="100%" alt="">'
                    +'</div>'
                    +'<div class="row mt-4xx" style="background-color: #008c35; margin: 12px 0px 12px 0px">'
                    +'<div class="col-md-6"><div class="field mt-4x" style="font-size: 100%;"><label for=""><b style="colorxx: #ee234e; color: #ffffff; font-size: 150%;">ISSUED DATE</b> <span style="font-size: 180%; color: black;"><b>' + dateIssued + '</b></span></label></div>'
                    +'</div>'
                    +'<div class="col-md-6 ml-autoxx"><div class="field mt-4x"><label for="" styleXX="margin-left: 140px;"><b style="colorxx: #ee234e; color: #ffffff; font-size: 150%;">EXPIRY DATE</b> <span style="font-size: 180%; color: black;"><b>'+dateExpired+'</b></span></label></div></div>'
                    +'</div>'
                    +'<div class="row">'
                    +'<div class="col-md-4">'
                    +'<div class="field mt-4">'
                    +'<img src="images/passport.png" width="100%" max-width="250px" alt="">'
                    +'</div>'
                    +'</div>'
                    +'<div class="col-md-4 ml-autoxx" style="width: 80%">'
                    +'<div class="field mt-4">'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">RPNO</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].rin +'</b></span></label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">NAME</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].nameonlicence +'</b></span> </label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">D.O.B</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].ridersdob +'</b></span></label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">PHONE NO</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].riderstelephoneno +'</b></span></label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">ADDRESS</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].ridersaddress +'</b></span></label>'
                    +'</div>'
                    +'</div>'
                    +'<div class="col-md-4 ml-autoxx" style="padding-left: 8%; width: 80%; float: right; positionxx: fixed; right: 0;">'
                    +'<div class="field mt-4">'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">J.NO</b> <span style="font-size: 150%; color: black;"><b>EDO-RP-00001</b></span></label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">RIN</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].rin +'</b></span></label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">SEX</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].ridersgender +'</b></span></label>'
                    +'<br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 130%;">BLOOD GROUP</b> <span style="font-size: 150%; color: black;"><b>'+ data[i].bloodgroup +'</b></span> </label>'
                    +'<br><br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/signature.png" width="66px" alt=""><br>'
                    +'<label for=""><b style="color: #ee234e; font-size: 17px;">HOLDER\'S SIGNATURE</b></label>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'<div class="row">'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'<div class="modal-footer">'
                    +'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'
                    +'<button onclick="printCard(\'frontcard\', \'Moshood_front\');" type="button" class="btn btn-danger">Print</button>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                    +'</div>'
                        
                    +'<div class="modal fade bd-example-modal-lg-back-card" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">'
                    +'<div class="modal-dialog modal-lg modal-dialog-centered" role="document">'
                    +'<div class="modal-content" style="height: 650px; position: absolute; top: 0; left: 0; bottom: 0; right: 0;">'
                    +'<div class="modal-header">'
                    +'<h5 class="modal-title" id="exampleModalCenterTitle">Rider\'s Permit Front Card - Preview</h5>'
                    +'<button type="button" class="close" data-dismiss="modal" aria-label="Close">'
                    +'<span aria-hidden="true">&times;</span>'
                    +'</button></div>'
                    +'<div class="modal-body" style="xxheight: 300px; color: black;">'
                                        
                    +'<div class="column is-6 is-offset print-container" id="backcard" style="overflow: auto; height: 100%; width: 100%; xxmax-width: 648px; page-break-before: avoid; margin: 0; padding: 0;">'
                    +'<div class="navigation-tabs outlined-pills rounded-pills animated-tabs">'
                    +'<div id="tab-m1" class="navtab-content is-active">'
                    +'<div class="columns is-vcentered" style="margin-bottomxx: .75rem; height: 300px;">'
                    +'<div class="column col-12 xxis-12 xxis-offset">'
                    +'<div class="flex-card simple-shadow" style="heightxx: 424px; widthxx: 548px; border-radius: 1.1875rem;  background-image: url(images/licensepermit-bg.jpg); background-size: cover; background-repeat: no-repeat;">'
                    +'<div class="card-body" style="padding: 5px 15px;">'
                    +'<div class="content container-fluid">'
                    +'<div class="row">'
                    +'<img src="images/licensecardheaderback.png" width="100%" alt="">'
                    +'</div>'
                    +'<div class="row">'
                    +'<div class="col-md-12">'
                    +'<div class="field mt-4">'
                    +'<p style="font-size: 13px; text-align: center;"><b>FOR MOTORCYCLE AND TRICYCLE <br> THE BEARER OF THIS CARD IS HEREBY AUTHORIZED TO OPERATE AS A RIDER IN EDO STATE</b></p>'
                    +'<?php echo "<img style=\'display: block; margin-left: auto; margin-right: auto;\' src=\'barcode.php?codetype=code39&size=50&text=001200200002&print=false\' width=\'278px\' alt=\'\'/>"; ?>'
                                                                                    
                    +'</div>'
                    +'</div>'
                    +'</div>'

                    +'<div class="row" style="margin-top: 56px; margin-bottom: 10px; xxposition: fixed; xxbottom: 0px; wxxidth: 100%;">'
                    +'<div class="col-md-8">'
                    +'<div class="field mt-4" style="font-size: 13px;">'
                    +'<span><b>THIS CARD CANNOT BE TRANSFERRED, IF FOUND PLEASE RETURN TO</b></span><br>'
                    +'<span><b>EDO STATE MINISTRY OF TRANSPORT</b></span>'
                    +'<span><b>OR THE NEAREST POLICE STATION</b></span>'
                    +'<br>'
                    +'<span><b>MISUSE OF THIS PERMIT IS A VIOLATION OF EDO STATE GOVERNMENT <br> REGUALTIONS.</b></span>'
                    +'<br>'
                    +'<span><b>REPLACEMENT OF THIS LICENSE IS SUBJECT TO AN ADMINISTRATIVE FEE</b></span>'
                    +'</div>'
                    +'</div>'
                    +'</div>'

                    +'</div></div></div></div></div></div></div></div></div>'
                    +'<div class="modal-footer">'
                    +'<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>'
                    +'<button onclick="printCard(\'backcard\', \'Moshood_back\');" type="button" class="btn btn-danger">Print</button>'
                    +'</div></div></div></div>'
                    +'</td>'
                    +'</tr>'
                }

                document.getElementById('tbody').innerHTML = dataField;


                $('.inline-jacket-number').editable({
                    validate: function (value) {
                        if ($.trim(value) == '') return 'This field is required';
                    },
                    mode: 'inline',
                    inputclass: 'form-control-sm'
                });
            }
           
           function getDate(dateString){
            var date = new Date(dateString); // Or your date here
            console.log((date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear());
            return ((date.getMonth() + 1) + '/' + date.getDate() + '/' +  date.getFullYear());
           }
        </script>

    </body>
</html>