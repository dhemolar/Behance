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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Huddle</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Wizard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Wizard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title -->

                        <!-- Basic Form Wizard -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="header-title">Subscribe to our VIP package Today</h4>
                                    <p class="sub-header">
                                       We would love for you to fill out this bio-data form, as this will help us in accurately and precisely deilver to your utmost satisfaction. 
                                    </p>

                                    <div class="pull-in">
                                        <form id="basic-form" action="#">
                                            <div>
                                                <h3>User Account</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="userName">User name *</label>
                                                        <div class="">
                                                            <input class="form-control required" id="userName" name="userName" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="password"> Password *</label>
                                                        <div class="">
                                                            <input id="password" name="password" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="confirm">Confirm Password *</label>
                                                        <div class="">
                                                            <input id="confirm" name="confirm" type="text" class="required form-control">
                                                        </div>
                                                    </div>

                                                </section>
                                                <h3>Profile</h3>
                                                <section>
                                                    <div class="form-group clearfix">

                                                        <label class="control-label" for="name"> First name *</label>
                                                        <div class="">
                                                            <input id="name" name="name" type="text" class="required form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="surname"> Last name *</label>
                                                        <div class="">
                                                            <input id="surname" name="surname" type="text" class="required form-control">

                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="email">Email *</label>
                                                        <div class="">
                                                            <input id="email" name="email" type="text" class="required email form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label " for="address">Address *</label>
                                                        <div class="">
                                                            <input id="address" name="address" type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group clearfix">
                                                        <label class="control-label ">(*) Mandatory</label>
                                                    </div>

                                                </section>
                                                <h3>Our Terms And Condtions</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12" style="text-transform: capitalize;">
                                                            <h3 >terms and conditions. </h3>
                                                            <p>this is to assure the owner (admin) that the information demanded would be properly and safely guarded and will only be released in situations of utmost importance.</p>
                                                            <p>To learn more, <a href="">click this link.</a></p>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </section>
                                                <h3>Finish</h3>
                                                <section>
                                                    <div class="form-group clearfix">
                                                        <div class="col-lg-12" style="text-transform: capitalize;" >
                                                            <div class="custom-control custom-checkbox">
                                                                <h3>Thank you for subscribing to our VIP package.</h3>
                                                                <h3><small>To learn more about how our VIP package works, <a href="">click this link.</a></small></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </form>
                                    </div> <!-- end .pull-in-->

                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- End row -->


                        
<?php
include 'includes/footer.php';
?>