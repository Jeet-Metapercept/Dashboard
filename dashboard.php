
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- meta section -->
        <title>Metapercept- Admin Dashboard</title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" >
        <link rel="icon" href="favicon.ico" type="image/x-icon" >
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <!-- ./meta section -->
        
        <!-- css styles -->
        <link rel="stylesheet" type="text/css" href="css/default-blue-white.css" id="dev-css">
        <!-- ./css styles -->                              
        
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/dev-other/dev-ie-fix.css">
        <![endif]-->
        
        <!-- javascripts -->
        <script type="text/javascript" src="js/plugins/modernizr/modernizr.js"></script>
        <!-- ./javascripts -->
        
        <style>
            .dev-page{visibility: hidden;}            
        </style>
    </head>
    <body>
        <!-- page wrapper -->
        <div class="dev-page">
            
            <!-- page header -->    
            <div class="dev-page-header">
                
                <div class="dph-logo">
                    <a href="Dashboard.php">Metapercept</a>
                    <a class="dev-page-sidebar-collapse">
                        <div class="dev-page-sidebar-collapse-icon">
                            <span class="line-one"></span>
                            <span class="line-two"></span>
                            <span class="line-three"></span>
                        </div>
                    </a>
                </div>

                <ul class="dph-buttons pull-right">                    
                    <li class="dph-button-stuck">
                        <a href="#" class="dev-page-search-toggle">
                            <div class="dev-page-search-toggle-icon">
                                <span class="circle"></span>
                                <span class="line"></span>
                            </div>
                        </a>
                    </li>                    
                    <li class="dph-button-stuck">
                        <a href="#" class="dev-page-rightbar-toggle">
                            <div class="dev-page-rightbar-toggle-icon">
                                <span class="line-one"></span>
                                <span class="line-two"></span>
                            </div>
                        </a>
                    </li>
                </ul>                                                
                
            </div>
            <!-- ./page header -->
            
            <!-- page container -->
            <div class="dev-page-container">

                <!-- page sidebar -->
                <div class="dev-page-sidebar">                    
                    
                    <div class="profile profile-transparent">
                        <div class="profile-image">
                            <img src="img/admin.png">
                            <div class="profile-badges">
                                <!--a href="#" class="profile-badges-left"><i class="fa fa-trophy"></i> 243</a>
                                <a href="#" class="profile-badges-right"><i class="fa fa-users"></i> 1,971</a-->
                            </div>
                            <div class="profile-status online"></div>
                        </div>
                        <div class="profile-info">
                            <h4>Sandip Khillare</h4>
                            <span>System Administrator, Metapercept </span>
                        </div>                        
                    </div>
                    
                    <ul class="dev-page-navigation">
                        <li class="title">Menu</li>
                        <li class="active">
                            <a href="dashboard.php"><i class="fa fa-desktop"></i> <span>Dashboard</span></a>
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-file-o"></i> <span>Pages</span></a>
                            <ul>
                                <li>
                                    <a href="#">Email</a>
                                    <ul>
                                        <li><a href="pages-email-inbox.html">Inbox</a></li>
                                        <li><a href="pages-email-compose.html">Compose</a></li>
                                    </ul>
                                </li>
                                <li><a href="add-new.php">Add New Page</a></li>
                                <li>
                                    <a href="#">Login Forms</a>
                                    <ul>
                                        <li><a href="pages-login.html" target="_blank">Login</a></li>
                                        <li><a href="pages-login-lite.html" target="_blank">Login Lite</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Registration Forms</a>
                                    <ul>
                                        <li><a href="pages-registration.html" target="_blank">Registration</a></li>
                                        <li><a href="pages-registration-lite.html" target="_blank">Registration Lite</a></li>
                                    </ul>
                                </li>                                
                                <li><a href="pages-lock-screen.php">Lock Screen</a></li>                                
                                <li><a href="pages-session-timeout.html">Session Timeout</a></li>
                                <li><a href="pages-edit-profile.html">Edit Profile</a></li>
                                <li><a href="pages-profile.html">Profile</a></li>
                                <li><a href="pages-faq.html">FAQ</a></li>
                                <li><a href="pages-gallery.html">Gallery</a></li>
                                <li><a href="pages-tocify.html">Tocify</a></li>
                                <li><a href="pages-invoice.html">Invoice</a></li>
                                <li><a href="pages-error-404.html">Error 404</a></li>                                
                                <li><a href="pages-contacts.html">Contacts</a></li>
                            </ul>
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-cube"></i> <span>Layouts</span> <span class="label label-danger">+2</span></a>
                            <ul>                                
                                <li><a href="layout-boxed.html">Boxed</a></li>
                                <li><a href="layout-no-footer.html">No Footer</a></li>
                                <li><a href="layout-fixed-footer.html">Fixed Footer</a></li>
                                <li><a href="layout-footer-collapsed.html">Footer Collapsed</a></li>
                                <li><a href="layout-nav-minimized.html">Minimized Navigation</a></li>                                
                                <li><a href="layout-nav-collapsed.html">Collapsed Navigation</a></li>
                                <li><a href="layout-nav-right.html">Navigation Right</a></li>
                                <li><a href="layout-nav-horizontal.html">Horizontal Navigation <span class="label label-danger">New</span></a></li>
                                <li><a href="layout-tabbed.html">Tabbed Content <span class="label label-danger">New</span></a></li>
                            </ul>
                        </li>       
                        <li><a href="#"><i class="fa fa-envelope"></i> <span>Posts</span></a></li>
                        <li><a href="#"><i class="fa fa-picture-o fa-lg"></i> Media <span class="arrow"></span></a> </li>
                        <li><a href="#"><i class="fa fa-plug fa-lg"></i> Plugins  </a></li>
                        <li><a href="#"><i class="fa fa-users fa-lg"></i> Users</a></li>
                        <li class="title">Components</li>
                        <li>
                            <a href="#"><i class="fa fa-cogs"></i> <span>UI Kits</span>  <span class="label label-danger">+1</span></a>
                            <ul>                                
                                <li><a href="ui-elements.html">UI Elements</a></li>
                                <li><a href="ui-widgets.html">Widgets <span class="label label-danger">New</span></a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-modals.html">Modals & Popups</a></li>
                                <li><a href="ui-panels.html">Panels</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-icons.html">Icons</a></li>
                                <li><a href="ui-tour.html">Tour</a></li>
                                <li><a href="ui-slide-menu.html">Sliding Menu</a></li>
                                <li><a href="ui-sliders.html">Sliders</a></li>
                                <li><a href="ui-nestable.html">Nestable List</a></li>
                                <li><a href="ui-tree-view.html">Tree View</a></li>
                                <li><a href="ui-language.html">Change Language</a></li>
                                <li>
                                    <a href="#">Timeline</a>
                                    <ul>
                                        <li><a href="ui-timeline-simple.html">Simple Timeline</a></li>
                                        <li><a href="ui-timeline.html">Timeline</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pencil"></i> <span>Forms</span> <span class="label label-danger">+1</span></a>
                            <ul>
                                <li><a href="form-elements.html">Form Elements</a></li>
                                <li><a href="form-layouts.html">Form Layouts</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                                <li><a href="form-validation.html">Form Validation & Helpers</a></li>
                                <li><a href="form-editors.html">WYSIWYG Editors</a></li>
                                <li><a href="form-file-handling.html">File handling <span class="label label-danger">New</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="charts.html"><i class="fa fa-line-chart"></i> <span>Charts</span></a>
                        </li>
                        <li>
                            <a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table"></i> <span>Tables</span></a>
                            <ul>
                                <li><a href="tables-static.html">Static Tables</a></li>
                                <li><a href="tables-sortable.html">Sortable Tables</a></li>
                                <li><a href="tables-other.html">Other Features</a></li>
                            </ul>
                        </li>                        
                        <li>
                            <a href="#"><i class="fa fa-code-fork"></i> <span>Multi-Level Navigation</span></a>
                            <ul>
                                <li><a href="#">Second Level</a></li>
                                <li>
                                    <a href="#">Second Level</a>
                                    <ul>
                                        <li><a href="#">Third Level</a></li>
                                        <li><a href="#">Third Level</a></li>
                                        <li><a href="#">Third Level</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Second Level</a></li>
                            </ul>
                        </li>
                    </ul>
                    
                </div>
                <!-- ./page sidebar -->
                
                <!-- page content -->
                <div class="dev-page-content">                    
                    <!-- page content container -->
                    <div class="container">
                        <div class="row row-condensed">
                            <div class="col-lg-9 col-md-6">      
                                <div class="wrapper">
                                    <div class="page-subtitle">
                                        <h2>Welcome to Admin Panel</h2>
                                        <div class="pull-right">
                                            <div class="btn-group">
                                                    <?php
                                                    $today = date("F j, Y, g:i a");
                                                    echo "$today";
                                                    ?>
                                            </div>
                                        </div><br><br><br><br>
                                        
                           
                       
                        </div>
                    <!-- ./page content container -->                      
                    </div>
                    <!-- ./page content -->                                               
                </div>  
                <!-- ./page container -->
            
            
            
            <!-- page footer -->    
            <div class="dev-page-footer dev-page-footer-fixed"> <!-- dev-page-footer-closed dev-page-footer-fixed -->
                <ul class="dev-page-footer-controls">
                    <li><a class="tip" title="Settings"><i class="fa fa-cogs"></i></a></li>
                    <li><a class="tip" title="Support"><i class="fa fa-life-ring"></i></a></li>
                    <li><a href="logout.php" class="tip" title="Logoff"><i class="fa fa-power-off"></i></a></li>
                    <li class="pull-right">
                        <a class="dev-page-sidebar-minimize tip" title="Toggle navigation"><i class="fa fa-outdent"></i></a>
                    </li>
                </ul>
                
                <!-- page footer buttons -->
                <ul class="dev-page-footer-buttons">                    
                    <li><a href="#footer_content_1" class="dev-page-footer-container-open"><i class="fa fa-database"></i></a></li>                    
                    <li><a href="#footer_content_2" class="dev-page-footer-container-open"><i class="fa fa-bar-chart"></i></a></li>
                    <li><a href="#footer_content_3" class="dev-page-footer-container-open"><i class="fa fa-server"></i></a></li>
                </ul>
                <!-- ./page footer buttons -->
                <!-- page footer container -->
                <div class="dev-page-footer-container">
                    
                    <!-- loader and close button -->
                    <div class="dev-page-footer-container-layer">
                        <a href="#" class="dev-page-footer-container-layer-button"></a>
                    </div>
                    <!-- ./loader and close button -->                    
                    
                    <!-- informers -->
                    <div class="dev-page-footer-container-content" id="footer_content_1">                        
                        <div class="dev-list-informers">                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#E74E40" value="33" data-angleArc="250" data-angleOffset="-125" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Disk Usage</h5>
                                    <p>Server #1 - <strong>235,4Gb / 500Gb</strong></p>
                                    <p>Server #2 - <strong>114,2Gb / 500Gb</strong></p>
                                    <p class="text-higlight">33% - Total disk usage</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#85d6de" value="75" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Database Usage</h5>
                                    <p>Disk Space - <strong>64,3Gb / 100Gb</strong></p>
                                    <p>Accounts - <strong>12 / 30</strong></p>
                                    <p class="text-higlight">75% - Features usage</p>
                                </div>
                            </div>
                            
                            <div class="dev-list-informers-item">
                                <div class="chart">
                                    <input class="knob" data-width="100" data-max="100" data-fgColor="#82b440" value="62" data-thickness=".1"/>
                                </div>
                                <div class="info">
                                    <h5>Memory Usage</h5>
                                    <p>Total - <strong>2048Mb</strong></p>
                                    <p>Cached - <strong>1291Mb</strong></p>
                                    <p>Available - <strong>757Mb</strong></p>
                                </div>
                            </div>                            
                        </div>                        
                    </div>
                    <!-- ./informers -->
                    
                   
                    
                    <!-- projects -->
                    <div class="dev-page-footer-container-content" id="footer_content_3">                        
                        <ul class="dev-list-projects">
                            <li><a href="#" class="active">Intuitive</a></li>
                            <li><a href="#">Atlant</a></li>
                            <li><a href="#">Gemini</a></li>
                            <li><a href="#">Taurus</a></li>
                            <li><a href="#">Leo</a></li>
                            <li><a href="#">Aries</a></li>
                            <li><a href="#">Virgo</a></li>
                            <li><a href="#">Aquarius</a></li>
                            <li><a href="#" class="dev-list-projects-add"><i class="fa fa-plus"></i></a></li>
                        </ul>                        
                    </div>
                    <!-- ./projects -->
                </div>
                <!-- ./page footer container -->
                
                <ul class="dev-page-footer-controls dev-page-footer-controls-auto pull-right">
                    <li><a class="dev-page-footer-fix tip" title="Fixed footer"><i class="fa fa-thumb-tack"></i></a></li>
                    <li><a class="dev-page-footer-collapse dev-page-footer-control-stuck"><i class="fa fa-dot-circle-o"></i></a></li>
                </ul>
            </div>
            <!-- ./page footer -->
            
            <!-- page search -->
            <div class="dev-search">
                <div class="dev-search-container">
                    <div class="dev-search-form">
                    <form action="index.html" method="post">
                        <div class="dev-search-field">
                            <input type="text" placeholder="Search..." value="Nature">
                        </div>                        
                    </form>
                    </div>
                    <div class="dev-search-results"></div>
                </div>
            </div>
            <!-- page search -->            
        </div>
        <!-- ./page wrapper -->

        <!-- javascript -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>       
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>        
        <script type="text/javascript" src="js/plugins/moment/moment.js"></script>
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap-select/bootstrap-select.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/d3.min.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/nv.d3.min.js"></script>
        <script type="text/javascript" src="js/plugins/nvd3/lib/stream_layers.js"></script>
        <script type="text/javascript" src="js/plugins/waypoint/waypoints.min.js"></script>
        <script type="text/javascript" src="js/plugins/counter/jquery.counterup.min.js"></script>        
        <!--script type="text/javascript" src="js/dev-settings.js"></script-->
        <script type="text/javascript" src="js/dev-loaders.js"></script>
        <script type="text/javascript" src="js/dev-layout-default.js"></script>
        <script type="text/javascript" src="js/demo.js"></script>
        <script type="text/javascript" src="js/dev-app.js"></script>
        <script type="text/javascript" src="js/demo-dashboard.js"></script>
        <!-- ./javascript -->
    </body>
</html>






