<?php
include 'includes/header.php';
include 'includes/sidebar.php';
?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Greeva</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Validation</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Validation</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            
        
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Horizontal Form</h4>
                                    <p class="sub-header">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>
        
                                    <form role="form" class="parsley-examples">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-4 col-form-label">Email<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="email" required parsley-type="email" class="form-control"
                                                        id="inputEmail3" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass1" class="col-sm-4 col-form-label">Password<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input id="hori-pass1" type="password" placeholder="Password" required
                                                        class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="hori-pass2" class="col-sm-4 col-form-label">Confirm Password
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input data-parsley-equalto="#hori-pass1" type="password" required
                                                        placeholder="Password" class="form-control" id="hori-pass2">
                                            </div>
                                        </div>
        
                                        <div class="form-group row">
                                            <label for="webSite" class="col-sm-4 col-form-label">Web Site<span class="text-danger">*</span></label>
                                            <div class="col-sm-7">
                                                <input type="url" required parsley-type="url" class="form-control"
                                                        id="webSite" placeholder="URL">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-8 offset-sm-4">
                                                <div class="checkbox checkbox-purple">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-8 offset-sm-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                    Register
                                                </button>
                                                <button type="reset"
                                                        class="btn btn-light waves-effect">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
        
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Validation type</h4>
                                    <p class="sub-header">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>
        
                                    <form action="#" class="parsley-examples">
                                        <div class="form-group">
                                            <label>Required</label>
                                            <input type="text" class="form-control" required
                                                    placeholder="Type something"/>
                                        </div>
        
                                        <div class="form-group">
                                            <label>Equal To</label>
                                            <div>
                                                <input type="password" id="pass2" class="form-control" required
                                                        placeholder="Password"/>
                                            </div>
                                            <div class="mt-2">
                                                <input type="password" class="form-control" required
                                                        data-parsley-equalto="#pass2"
                                                        placeholder="Re-Type Password"/>
                                            </div>
                                        </div>
        
                                        <div class="form-group">
                                            <label>E-Mail</label>
                                            <div>
                                                <input type="email" class="form-control" required
                                                        parsley-type="email" placeholder="Enter a valid e-mail"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>URL</label>
                                            <div>
                                                <input parsley-type="url" type="url" class="form-control"
                                                        required placeholder="URL"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Digits</label>
                                            <div>
                                                <input data-parsley-type="digits" type="text"
                                                        class="form-control" required
                                                        placeholder="Enter only digits"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Number</label>
                                            <div>
                                                <input data-parsley-type="number" type="text"
                                                        class="form-control" required
                                                        placeholder="Enter only numbers"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Alphanumeric</label>
                                            <div>
                                                <input data-parsley-type="alphanum" type="text"
                                                        class="form-control" required
                                                        placeholder="Enter alphanumeric value"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Textarea</label>
                                            <div>
                                                <textarea required class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-light waves-effect">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Range validation</h4>
                                    <p class="sub-header">
                                        Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                    </p>
        
                                    <form action="#" class="parsley-examples">
        
                                        <div class="form-group">
                                            <label>Min Length</label>
                                            <div>
                                                <input type="text" class="form-control" required
                                                        data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Max Length</label>
                                            <div>
                                                <input type="text" class="form-control" required
                                                        data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Length</label>
                                            <div>
                                                <input type="text" class="form-control" required
                                                        data-parsley-length="[5,10]"
                                                        placeholder="Text between 5 - 10 chars length"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Min Value</label>
                                            <div>
                                                <input type="text" class="form-control" required
                                                        data-parsley-min="6" placeholder="Min value is 6"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Max Value</label>
                                            <div>
                                                <input type="text" class="form-control" required
                                                        data-parsley-max="6" placeholder="Max value is 6"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Range Value</label>
                                            <div>
                                                <input class="form-control" required type="text" min="6"
                                                        max="100" placeholder="Number between 6 - 100"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Regular Exp</label>
                                            <div>
                                                <input type="text" class="form-control" required
                                                        data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                        placeholder="Hex. Color"/>
                                            </div>
                                        </div>
        
                                        <div class="form-group mb-0">
                                            <div>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                                                    Submit
                                                </button>
                                                <button type="reset" class="btn btn-light waves-effect">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>
        
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                2018 - 2019 &copy; Greeva theme by <a href="">Coderthemes</a> 
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Agnes Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />


                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox1" type="checkbox" checked>
                        <label for="checkbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox2" type="checkbox" checked>
                        <label for="checkbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox3" type="checkbox">
                        <label for="checkbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="checkbox4" type="checkbox" checked>
                        <label for="checkbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="checkbox5" type="checkbox" checked>
                        <label for="checkbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Chadengle</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">13:40 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                            <p class="inbox-item-date">13:34 PM</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                            <p class="inbox-item-date">13:17 PM</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                            <p class="inbox-item-date">12:20 PM</p>

                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                            <p class="inbox-item-date">10:15 AM</p>

                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Validation js (Parsleyjs) -->
        <script src="assets/libs/parsleyjs/parsley.min.js"></script>

        <!-- validation init -->
        <script src="assets/js/pages/form-validation.init.js"></script>  

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>