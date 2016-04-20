<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->    
    <head>
        <meta charset="utf-8" />
        <title><?php echo $title; ?></title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/animate.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/plugins/morris/morris.css" rel="stylesheet" />

        <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>
        <script type="text/javascript">
            function check() {
                var chk = confirm('Are you sure to delete?');
                if (chk) {
                    return true;
                } else {
                    return false;
                }
            }

        </script>

        <!-- ================== END BASE JS ================== -->
    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            <div id="header" class="header navbar navbar-default navbar-fixed-top">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
                        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end mobile sidebar expand / collapse button -->

                    <!-- begin header navigation right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown navbar-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /> 
                                <span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu animated fadeInLeft">
                                <li class="arrow"></li>
                                <li><a href="javascript:;">Edit Profile</a></li>
                                <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                <li><a href="javascript:;">Calendar</a></li>
                                <li><a href="javascript:;">Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end header navigation right -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar user -->
                    <ul class="nav">
                        <li class="nav-profile">
                            <div class="image">
                                <a href="javascript:;"><img src="<?php echo base_url(); ?>assets/img/user-13.jpg" alt="" /></a>
                            </div>
                            <div class="info">
                                Sean Ngu
                                <small>Front end developer</small>
                            </div>
                        </li>
                    </ul>
                    <!-- end sidebar user -->
                    <!-- begin sidebar nav -->
                    <ul class="nav">
                        <li class="nav-header">Navigation</li>
                        <li class="has-sub active">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-laptop"></i>
                                <span>Salary</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="<?php echo base_url(); ?>master_controller">Salary Payment</a></li>
                                <li><a href="<?php echo base_url(); ?>master_controller/salary_advance_list">Salary Advance</a></li>
                                <li><a href="<?php echo base_url(); ?>master_controller/salary_advance_payment_list">Salary Advance Payment</a></li>
                                <li><a href="<?php echo base_url(); ?>master_controller/salary_bonus_list">Salary Bonus</a></li>
                                <li><a href="<?php echo base_url(); ?>master_controller/salary_bonus_type_list">Salary Bonus Type</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <!--<span class="badge pull-right">10</span>-->
                                <b class="caret pull-right"></b>
                                <i class="fa fa-users"></i> 
                                <span>Employee</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="email_inbox.html">Add Employee</a></li>
                                <li><a href="email_inbox_v2.html">Inbox v2</a></li>
                                <li><a href="email_compose.html">Compose</a></li>
                                <li><a href="email_detail.html">Detail</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <!-- begin #content -->
            <?php echo $main_content; ?>

            <!-- begin theme-panel -->
            <div class="theme-panel">
                <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
                <div class="theme-panel-content">
                    <h5 class="m-t-0">Color Theme</h5>
                    <ul class="theme-list clearfix">
                        <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                        <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                    </ul>
                    <div class="divider"></div>
                    <div class="row m-t-10">
                        <div class="col-md-5 control-label double-line">Header Styling</div>
                        <div class="col-md-7">
                            <select name="header-styling" class="form-control input-sm">
                                <option value="1">default</option>
                                <option value="2">inverse</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-5 control-label">Header</div>
                        <div class="col-md-7">
                            <select name="header-fixed" class="form-control input-sm">
                                <option value="1">fixed</option>
                                <option value="2">default</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                        <div class="col-md-7">
                            <select name="sidebar-styling" class="form-control input-sm">
                                <option value="1">default</option>
                                <option value="2">grid</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-5 control-label">Sidebar</div>
                        <div class="col-md-7">
                            <select name="sidebar-fixed" class="form-control input-sm">
                                <option value="1">fixed</option>
                                <option value="2">default</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                        <div class="col-md-7">
                            <select name="content-gradient" class="form-control input-sm">
                                <option value="1">disabled</option>
                                <option value="2">enabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-5 control-label double-line">Content Styling</div>
                        <div class="col-md-7">
                            <select name="content-styling" class="form-control input-sm">
                                <option value="1">default</option>
                                <option value="2">black</option>
                            </select>
                        </div>
                    </div>
                    <div class="row m-t-10">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end theme-panel -->

            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>
        <!-- end page container -->
       

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!--[if lt IE 9]>
                <script src="<?php echo base_url(); ?>assets/crossbrowserjs/html5shiv.js"></script>
                <script src="<?php echo base_url(); ?>assets/crossbrowserjs/respond.min.js"></script>
                <script src="<?php echo base_url(); ?>assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-cookie/jquery.cookie.js"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/morris/raphael.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/gritter/js/jquery.gritter.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dashboard-v2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/form-plugins.demo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/apps.min.js"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

        <script>
            $(document).ready(function () {
               // var name ="sonjoy";
                App.init();
                //DashboardV2.init();
               
//               Datepicker
                $('.datepicker').datepicker();
                //search payment
                
                
                
                
    });
        </script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');
        </script>
        <script>
            $('.sidebar ul li a').click(
                    function (e) {
                        //e.preventDefault(); // prevent the default action
                        // e.stopPropagation; // stop the click from bubbling
                        //$(this).closest('ul').find('.active').removeClass('active');
                        $(this).parent().addClass('active');
                        
                        
                        
//                        test
            
                    });
//alert(name);
                //
//                    
//                
//            });
        
        </script>
    </body>
</html>

