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
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-4">
        
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title">Daily Report Sales</h4>
                                    <p class="text-muted">March 26 - April 01 (2020)</p>
                                    <div class="mb-3 mt-4">
                                        <div class="float-right d-none d-xl-block">
                                            <img src="assets/images/cards/visa.png" alt="user-card" height="28" />
                                            <img src="assets/images/cards/master.png" alt="user-card" height="28" />
                                            <img src="assets/images/cards/american-express.png" alt="user-card" height="28" />
                                        </div>
                                        <h2 class="font-weight-light"></h2>
                                    </div>
                                    <div class="chartjs-chart dash-sales-chart">
                                        <canvas id="sales-chart"></canvas>
                                    </div>
                                </div><!-- end card-box-->
        
                                <div class="card-box widget-chart-one gradient-success bx-shadow-lg">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                data-fgColor="#ffffff" data-bgcolor="rgba(255,255,255,0.2)" value="49" data-skin="tron" data-angleOffset="180"
                                                data-readOnly=true data-thickness=".1"/>
                                    </div>
                                    <div class="widget-chart-one-content text-right">
                                        <p class="text-white mb-0 mt-2">Statistics</p>
                                        <h3 class="text-white">$1714</h3>
                                    </div>
                                </div> <!-- end card-box-->
        
                         </div> <!-- end col -->
        
                           
        
        
        
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <div class="dropdown float-right">
                                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Download</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Upload</a>
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        </div>
                                    </div>
                                    <h4 class="header-title mb-4"> Weekly Visitor Traffics</h4>
                                    <p>A weekly survey of our visitors worldwide.</p>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div id="usa" class="dash-usa-map"></div>
                                        </div> <!-- end col -->
                                        <div class="col-md-4">
                                            <h5 class="mb-1 mt-0">1,12,540 <small class="text-muted ml-2">Monday</small></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value font-weight-bold">72% </span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar" role="progressbar" style="width: 72%;" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
        
                                            <h5 class="mb-1 mt-0">51,480 <small class="text-muted ml-2">Tuesday</small></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value font-weight-bold">39% </span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
        
                                            <h5 class="mb-1 mt-0">45,760 <small class="text-muted ml-2">Wednesday</small></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value font-weight-bold">61% </span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 61%;" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
        
                                            <h5 class="mb-1 mt-0">98,512 <small class="text-muted ml-2">Thursday</small></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value font-weight-bold">52% </span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 52%;" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
        
                                            <h5 class="mb-1 mt-0">2,154 <small class="text-muted ml-2">Friday</small></h5>
                                            <div class="progress-w-percent">
                                                <span class="progress-value font-weight-bold">78% </span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 78%;" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>  <!-- end card-box-->
                            </div> <!-- end col -->
        
                       
        
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

<?php
include 'includes/footer.php';
?>

