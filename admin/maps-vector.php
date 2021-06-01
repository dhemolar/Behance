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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                            <li class="breadcrumb-item active">Vector Map</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Vector Map</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">World Map</h4>
        
                                    <div id="world-map-markers" style="height: 500px"></div>
        
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">USA Map</h4>
        
                                    <div id="usa" style="height: 400px"></div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Iran Map</h4>
        
                                    <div id="iran" style="height: 400px"></div>
        
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Canada Map</h4>
        
                                    <div id="canada" style="height: 400px"></div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
        
                            <div class="col-md-6">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Germany Map</h4>
        
                                    <div id="germany" style="height: 400px"></div>
                                </div> <!-- end card-box -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
                <?php
                include 'includes/footer.php';
                ?>

