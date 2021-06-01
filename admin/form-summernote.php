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
                                            <li class="breadcrumb-item active">Summernote</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Summernote</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Default Editor</h4>
                                    <p class="sub-header">Super simple wysiwyg editor on Bootstrap</p>
                                    <div id="summernote-editor">
                                        <h6>This is an simple editable area.</h6>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p>
                                            End of simple area
                                        </p>
                                    </div> <!-- end summernote-editor-->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title">Inline Editor</h4>
                                    <p class="sub-header">Air-mode give an interface without the Toolbar. To reveal popover Toolbar, select a text where you want to modify. Simply turn on <code>airMode</code> and just focus on text.</p>
                                    <div id="summernote-inline">
                                        <h4>This is an air-mode editable area.</h4>
                                        <ul>
                                            <li>
                                                Select a text to reveal the toolbar.
                                            </li>
                                            <li>
                                                Edit rich document on-the-fly, so elastic!
                                            </li>
                                        </ul>
                                        <p>
                                            End of air-mode area
                                        </p>
                                    </div> <!-- end summernote-inline-->
                                </div> <!-- end card-box-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->


                <?php
                include 'includes/footer.php';
                ?>