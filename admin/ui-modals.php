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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                            <li class="breadcrumb-item active">Modals</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modals</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 


                        <!-- Bootstrap Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title">Bootstrap Modals (default)</h4>

                                    <p class="sub-header">
                                        A rendered modal with header, body, and set of actions in the footer.
                                    </p>

                                    <!-- sample modal content -->
                                    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Text in a modal</h5>
                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                    <hr>
                                                    <h5>Overflowing text to show scroll behavior</h5>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myExtraLargeModalLabel">Extra large modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <!--  Modal content for the above example -->
                                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->

                                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    ...
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->


                                    <div class="button-list">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#myModal">Standard Modal</button>
                                        <!-- Extra large modal -->
                                        <button class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-xl">Extra Large modal</button>
                                        <!-- Large modal -->
                                        <button type="button" class="btn btn-info waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>
                                        <!-- Small modal -->
                                        <button  type="button" class="btn btn-pink waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
                                        <!-- Center modal -->
                                        <button  type="button" class="btn btn-purple waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">Center modal</button>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Custom Modals -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <h4 class="header-title">Modals Examples (Animations)</h4>

                                    <p class="sub-header">Use <code>data-animation="xxx" data-plugin="custommodal"
                                        data-overlaySpeed="xxx" data-overlayColor="#xxx"</code>. </p>

                                    <div class="button-list">
                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="fadein" data-plugin="custommodal"
                                        data-overlaySpeed="200" data-overlayColor="#36404a">Fade in</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="slide" data-plugin="custommodal"
                                            data-overlaySpeed="200" data-overlayColor="#36404a">Slide</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="newspaper" data-plugin="custommodal"
                                            data-overlaySpeed="200" data-overlayColor="#36404a">Newspaper</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="fall" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Fall</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="sidefall" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Side Fall</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="blur" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Blur</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="flip" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Flip</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="sign" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Sign</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="superscaled" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Super Scaled</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="slit" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Slit</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="rotate" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Rotate</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="letmein" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Letmein</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="makeway" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Makeway</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="slip" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Slip</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="corner" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Corner</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="slidetogether" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Slide together</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="scale" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Scale</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="door" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Door</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="push" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Push</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="contentscale" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Content Scale</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="swell" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Swell</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="rotatedown" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Rotate Down</a>

                                        <a href="#custom-modal" class="btn btn-light waves-effect width-md" data-animation="flash" data-plugin="custommodal"
                                            data-overlaySpeed="100" data-overlayColor="#36404a">Flash</a>
                                    </div>

                                </div>
                            </div><!-- end col -->
                        </div>
                        <!-- End row -->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->
<?php
include 'includes/footer.php';
?>