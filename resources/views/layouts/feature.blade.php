<!DOCTYPE html>
<html>
    @include('galaxia-ui::defaults.head')
    <body class="fixed-header menu-pin menu-behind">
        <!-- BEGIN SIDEBAR -->
        <!-- BEGIN SIDEBPANEL-->
        <nav class="page-sidebar" data-pages="sidebar">
            <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
            <div class="sidebar-overlay-slide from-top" id="appMenu">
            </div>
            <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
            <!-- BEGIN SIDEBAR MENU HEADER-->
            <div class="sidebar-header">
                <img src="/galaxia/assets/img/logo_white.png" alt="logo" class="brand" data-src="/galaxia/assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
                <div class="sidebar-header-controls">
                    <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
                    </button>
                    <button type="button" class="btn btn-link d-lg-inline-block d-xlg-inline-block d-md-inline-block d-sm-none d-none" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
                    </button>
                </div>
            </div>
            <!-- END SIDEBAR MENU HEADER-->
            <!-- START SIDEBAR MENU -->
            @include('galaxia-ui::partials.sidebar.tree')
            <!-- END SIDEBAR MENU -->
        </nav>
        <!-- END SIDEBAR -->
        <!-- END SIDEBAR -->
        <!-- START PAGE-CONTAINER -->
        <div class="page-container">
            <!-- START PAGE HEADER WRAPPER -->
            <!-- START HEADER -->
            <div class="header ">
                <!-- START MOBILE SIDEBAR TOGGLE -->
                <a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
                </a>
                <!-- END MOBILE SIDEBAR TOGGLE -->
                <div class="">
                    <div class="brand inline  m-l-10 ">
                        <img src="/galaxia/assets/img/logo.png" alt="logo" data-src="/galaxia/assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    </div>
                    <!-- START NOTIFICATION LIST -->
                    @include('galaxia-ui::partials.notifications.notifications-container')
                    <!-- END NOTIFICATIONS LIST -->
                </div>
                <div class="d-flex align-items-center">
                    <!-- START User Info-->
                    <div class="pull-left p-r-10 fs-14 font-heading d-lg-block d-none">
                        <span class="semi-bold">David</span> <span class="text-master">Nest</span>
                    </div>
                    <div class="dropdown pull-right d-lg-block d-none">
                        <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="thumbnail-wrapper d32 circular inline">
                        <img src="/galaxia/assets/img/profiles/avatar.jpg" alt="" data-src="/galaxia/assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
                        </span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
                            <a href="#" class="dropdown-item"><i class="pg-settings_small"></i> Settings</a>
                            <a href="#" class="dropdown-item"><i class="pg-outdent"></i> Feedback</a>
                            <a href="#" class="dropdown-item"><i class="pg-signals"></i> Help</a>
                            <a href="#" class="clearfix bg-master-lighter dropdown-item">
                            <span class="pull-left">Logout</span>
                            <span class="pull-right"><i class="pg-power"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- END User Info-->
                </div>
            </div>
            <!-- END HEADER -->
            <!-- END PAGE HEADER WRAPPER -->
            <!-- START PAGE CONTENT WRAPPER -->
            <div class="page-content-wrapper">
                <!-- START PAGE CONTENT -->
                <div class="content">
                    <!-- START JUMBOTRON -->
                    <div class="jumbotron" data-pages="parallax">
                        <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
                            <div class="inner">
                                <!-- START BREADCRUMB -->
                                @include('galaxia-ui::partials.breadcrumb')
                                <!-- END BREADCRUMB -->
                            </div>
                        </div>
                    </div>
                    <!-- END JUMBOTRON -->
                    <!-- START CONTAINER FLUID -->
                    <div class="container-fluid container-fixed-lg">
                        @yield('galaxia.body')
                        <!-- BEGIN PlACE PAGE CONTENT HERE -->
                        <!-- END PLACE PAGE CONTENT HERE -->
                    </div>
                    <!-- END CONTAINER FLUID -->
                </div>
                <!-- END PAGE CONTENT -->
                <!-- START FOOTER -->
                <div class="container-fluid container-fixed-lg footer">
                    <div class="copyright sm-text-center">
                        <p class="small no-margin pull-left sm-pull-reset">
                            <span class="hint-text">Copyright © 2014</span>
                        </p>
                        <p class="small no-margin pull-right sm-pull-reset">
                            <span class="hint-text">&amp; Made with Love ®</span>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- END FOOTER -->
            </div>
            <!-- END PAGE CONTENT WRAPPER -->
        </div>
        <!-- END PAGE CONTAINER -->
        @include('galaxia-ui::defaults.scripts')
    </body>
</html>