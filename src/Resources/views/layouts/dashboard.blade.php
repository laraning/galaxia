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
                <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
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
                        <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
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
                        <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
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
                            <span class="font-montserrat">REVOX</span>.
                            <span class="hint-text">All rights reserved.</span>
                            <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a>
                            </span>
                        </p>
                        <p class="small no-margin pull-right sm-pull-reset">
                            <a href="#">Hand-crafted</a>
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
        <!--START QUICKVIEW -->
        <div id="quickview" class="quickview-wrapper" data-pages="quickview">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="" data-target="#quickview-notes" data-toggle="tab">
                    <a href="#">Notes</a>
                </li>
                <li data-target="#quickview-alerts" data-toggle="tab">
                    <a href="#">Alerts</a>
                </li>
                <li class="active" data-target="#quickview-chat" data-toggle="tab">
                    <a href="#">Chat</a>
                </li>
            </ul>
            <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- BEGIN Notes !-->
                <div class="tab-pane no-padding" id="quickview-notes">
                    <div class="view-port clearfix quickview-notes" id="note-views">
                        <!-- BEGIN Note List !-->
                        <div class="view list" id="quick-note-list">
                            <div class="toolbar clearfix">
                                <ul class="pull-right ">
                                    <li>
                                        <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
                                    </li>
                                </ul>
                                <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
                            </div>
                            <ul>
                                <!-- BEGIN Note Item !-->
                                <li data-noteid="1">
                                    <div class="left">
                                        <!-- BEGIN Note Action !-->
                                        <div class="checkbox check-warning no-margin">
                                            <input id="qncheckbox1" type="checkbox" value="1">
                                            <label for="qncheckbox1"></label>
                                        </div>
                                        <!-- END Note Action !-->
                                        <!-- BEGIN Note Preview Text !-->
                                        <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                        <!-- BEGIN Note Preview Text !-->
                                    </div>
                                    <!-- BEGIN Note Details !-->
                                    <div class="right pull-right">
                                        <!-- BEGIN Note Date !-->
                                        <span class="date">12/12/14</span>
                                        <a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
                                        <!-- END Note Date !-->
                                    </div>
                                    <!-- END Note Details !-->
                                </li>
                                <!-- END Note List !-->
                            </ul>
                        </div>
                        <!-- END Note List !-->
                        <div class="view note" id="quick-note">
                            <div>
                                <ul class="toolbar">
                                    <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
                                    </li>
                                    <li><a href="#" data-action="Bold" class="fs-12"><i class="fa fa-bold"></i></a>
                                    </li>
                                    <li><a href="#" data-action="Italic" class="fs-12"><i class="fa fa-italic"></i></a>
                                    </li>
                                    <li><a href="#" class="fs-12"><i class="fa fa-link"></i></a>
                                    </li>
                                </ul>
                                <div class="body">
                                    <div>
                                        <div class="top">
                                            <span>21st april 2014 2:13am</span>
                                        </div>
                                        <div class="content">
                                            <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Notes !-->
                <!-- BEGIN Alerts !-->
                <div class="tab-pane no-padding" id="quickview-alerts">
                    <div class="view-port clearfix" id="alerts">
                        <!-- BEGIN Alerts View !-->
                        <div class="view bg-white">
                            <!-- BEGIN View Header !-->
                            <div class="navbar navbar-default navbar-sm">
                                <div class="navbar-inner">
                                    <!-- BEGIN Header Controler !-->
                                    <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                    <i class="pg-more"></i>
                                    </a>
                                    <!-- END Header Controler !-->
                                    <div class="view-heading">
                                        Notications
                                    </div>
                                    <!-- BEGIN Header Controler !-->
                                    <a href="#" class="inline action p-r-10 pull-right link text-master">
                                    <i class="pg-search"></i>
                                    </a>
                                    <!-- END Header Controler !-->
                                </div>
                            </div>
                            <!-- END View Header !-->
                            <!-- BEGIN Alert List !-->
                            <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                                <!-- BEGIN List Group !-->
                                <div class="list-view-group-container">
                                    <!-- BEGIN List Group Header!-->
                                    <div class="list-view-group-header text-uppercase">
                                        Calendar
                                    </div>
                                    <!-- END List Group Header!-->
                                    <ul>
                                        <!-- BEGIN List Group Item!-->
                                        <li class="alert-list">
                                            <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                            <a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                                <p class="">
                                                    <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                                                </p>
                                                <p class="p-l-10 overflow-ellipsis fs-12">
                                                    <span class="text-master">David Nester Birthday</span>
                                                </p>
                                                <p class="p-r-10 ml-auto fs-12 text-right">
                                                    <span class="text-warning">Today <br></span>
                                                    <span class="text-master">All Day</span>
                                                </p>
                                            </a>
                                            <!-- END Alert Item!-->
                                            <!-- BEGIN List Group Item!-->
                                        </li>
                                        <!-- END List Group Item!-->
                                    </ul>
                                </div>
                                <!-- END List Group !-->
                                <div class="list-view-group-container">
                                    <!-- BEGIN List Group Header!-->
                                    <div class="list-view-group-header text-uppercase">
                                        Social
                                    </div>
                                    <!-- END List Group Header!-->
                                    <ul>
                                        <!-- BEGIN List Group Item!-->
                                        <li class="alert-list">
                                            <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                            <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                                <p class="">
                                                    <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                                                </p>
                                                <p class="col overflow-ellipsis fs-12 p-l-10">
                                                    <span class="text-master link">Jame Smith commented on your status<br></span>
                                                    <span class="text-master">“Perfection Simplified - Company Revox"</span>
                                                </p>
                                            </a>
                                            <!-- END Alert Item!-->
                                        </li>
                                        <!-- END List Group Item!-->
                                    </ul>
                                </div>
                                <div class="list-view-group-container">
                                    <!-- BEGIN List Group Header!-->
                                    <div class="list-view-group-header text-uppercase">
                                        Sever Status
                                    </div>
                                    <!-- END List Group Header!-->
                                    <ul>
                                        <!-- BEGIN List Group Item!-->
                                        <li class="alert-list">
                                            <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                                            <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                                <p class="">
                                                    <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                                                </p>
                                                <p class="col overflow-ellipsis fs-12 p-l-10">
                                                    <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                                                    <span class="text-master">Server Load Exceeted. Take action</span>
                                                </p>
                                            </a>
                                            <!-- END Alert Item!-->
                                        </li>
                                        <!-- END List Group Item!-->
                                    </ul>
                                </div>
                            </div>
                            <!-- END Alert List !-->
                        </div>
                        <!-- EEND Alerts View !-->
                    </div>
                </div>
                <!-- END Alerts !-->
                <div class="tab-pane active no-padding" id="quickview-chat">
                    <div class="view-port clearfix" id="chat">
                        <div class="view bg-white">
                            <!-- BEGIN View Header !-->
                            <div class="navbar navbar-default">
                                <div class="navbar-inner">
                                    <!-- BEGIN Header Controler !-->
                                    <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                    <i class="pg-plus"></i>
                                    </a>
                                    <!-- END Header Controler !-->
                                    <div class="view-heading">
                                        Chat List
                                        <div class="fs-11">Show All</div>
                                    </div>
                                    <!-- BEGIN Header Controler !-->
                                    <a href="#" class="inline action p-r-10 pull-right link text-master">
                                    <i class="pg-more"></i>
                                    </a>
                                    <!-- END Header Controler !-->
                                </div>
                            </div>
                            <!-- END View Header !-->
                            <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                                <div class="list-view-group-container">
                                    <div class="list-view-group-header text-uppercase">
                                        a
                                    </div>
                                    <ul>
                                        <!-- BEGIN Chat User List Item  !-->
                                        <li class="chat-user-list clearfix">
                                            <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                                                <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg" class="col-top">
                                                </span>
                                                <p class="p-l-10 ">
                                                    <span class="text-master">ava flores</span>
                                                    <span class="block text-master hint-text fs-12">Hello there</span>
                                                </p>
                                            </a>
                                        </li>
                                        <!-- END Chat User List Item  !-->
                                    </ul>
                                </div>
                                <div class="list-view-group-container">
                                    <div class="list-view-group-header text-uppercase">b</div>
                                    <ul>
                                        <!-- BEGIN Chat User List Item  !-->
                                        <li class="chat-user-list clearfix">
                                            <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                                                <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg" class="col-top">
                                                </span>
                                                <p class="p-l-10 ">
                                                    <span class="text-master">bella mccoy</span>
                                                    <span class="block text-master hint-text fs-12">Hello there</span>
                                                </p>
                                            </a>
                                        </li>
                                        <!-- END Chat User List Item  !-->
                                        <!-- BEGIN Chat User List Item  !-->
                                        <li class="chat-user-list clearfix">
                                            <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                                                <span class="thumbnail-wrapper d32 circular bg-success">
                                                <img width="34" height="34" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg" class="col-top">
                                                </span>
                                                <p class="p-l-10 ">
                                                    <span class="text-master">bob stephens</span>
                                                    <span class="block text-master hint-text fs-12">Hello there</span>
                                                </p>
                                            </a>
                                        </li>
                                        <!-- END Chat User List Item  !-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- BEGIN Conversation View  !-->
                        <div class="view chat-view bg-white clearfix">
                            <!-- BEGIN Header  !-->
                            <div class="navbar navbar-default">
                                <div class="navbar-inner">
                                    <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                                    <i class="pg-arrow_left"></i>
                                    </a>
                                    <div class="view-heading">
                                        John Smith
                                        <div class="fs-11 hint-text">Online</div>
                                    </div>
                                    <a href="#" class="link text-master inline action p-r-10 pull-right ">
                                    <i class="pg-more"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- END Header  !-->
                            <!-- BEGIN Conversation  !-->
                            <div class="chat-inner" id="my-conversation">
                                <!-- BEGIN From Me Message  !-->
                                <div class="message clearfix">
                                    <div class="chat-bubble from-me">
                                        Hello there
                                    </div>
                                </div>
                                <!-- END From Me Message  !-->
                                <!-- BEGIN From Them Message  !-->
                                <div class="message clearfix">
                                    <div class="profile-img-wrapper m-t-5 inline">
                                        <img width="34" height="34" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg" class="col-top">
                                    </div>
                                    <div class="chat-bubble from-them">
                                        Hey
                                    </div>
                                </div>
                                <!-- END From Them Message  !-->
                                <!-- BEGIN From Me Message  !-->
                                <div class="message clearfix">
                                    <div class="chat-bubble from-me">
                                        Did you check out Pages framework ?
                                    </div>
                                </div>
                                <!-- END From Me Message  !-->
                                <!-- BEGIN From Me Message  !-->
                                <div class="message clearfix">
                                    <div class="chat-bubble from-me">
                                        Its an awesome chat
                                    </div>
                                </div>
                                <!-- END From Me Message  !-->
                                <!-- BEGIN From Them Message  !-->
                                <div class="message clearfix">
                                    <div class="profile-img-wrapper m-t-5 inline">
                                        <img width="34" height="34" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg" class="col-top">
                                    </div>
                                    <div class="chat-bubble from-them">
                                        Yea
                                    </div>
                                </div>
                                <!-- END From Them Message  !-->
                            </div>
                            <!-- BEGIN Conversation  !-->
                            <!-- BEGIN Chat Input  !-->
                            <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                                <div class="row">
                                    <div class="col-1 p-t-15">
                                        <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                                    </div>
                                    <div class="col-8 no-padding">
                                        <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                                    </div>
                                    <div class="col-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                                        <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- END Chat Input  !-->
                        </div>
                        <!-- END Conversation View  !-->
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICKVIEW-->
        <!-- START OVERLAY -->
        <div class="overlay hide" data-pages="search">
            <!-- BEGIN Overlay Content !-->
            <div class="overlay-content has-results m-t-20">
                <!-- BEGIN Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Logo !-->
                    <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
                    <!-- END Overlay Logo !-->
                    <!-- BEGIN Overlay Close !-->
                    <a href="#" class="close-icon-light overlay-close text-black fs-16">
                    <i class="pg-close"></i>
                    </a>
                    <!-- END Overlay Close !-->
                </div>
                <!-- END Overlay Header !-->
                <div class="container-fluid">
                    <!-- BEGIN Overlay Controls !-->
                    <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
                    <br>
                    <div class="inline-block">
                        <div class="checkbox right">
                            <input id="checkboxn" type="checkbox" value="1" checked="checked">
                            <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
                        </div>
                    </div>
                    <div class="inline-block m-l-10">
                        <p class="fs-13">Press enter to search</p>
                    </div>
                    <!-- END Overlay Controls !-->
                </div>
                <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
                <div class="container-fluid">
                    <span>
                    <strong>suggestions :</strong>
                    </span>
                    <span id="overlay-suggestions"></span>
                    <br>
                    <div class="search-results m-t-40">
                        <p class="bold">Pages Search Results</p>
                        <div class="row">
                            <div class="col-md-6">
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                                        <p class="hint-text">via john smith</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div>T</div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                                        <p class="hint-text">via pages</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                                        <div><i class="fa fa-headphones large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                                        <p class="hint-text">via pagesmix</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                            </div>
                            <div class="col-md-6">
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                                        <div><i class="fa fa-facebook large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                                        <p class="hint-text">via facebook</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                                        <div><i class="fa fa-twitter large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                                        <p class="hint-text">via twitter</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                                <!-- BEGIN Search Result Item !-->
                                <div class="">
                                    <!-- BEGIN Search Result Item Thumbnail !-->
                                    <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                                        <div><i class="fa fa-google-plus large-text "></i>
                                        </div>
                                    </div>
                                    <!-- END Search Result Item Thumbnail !-->
                                    <div class="p-l-10 inline p-t-5">
                                        <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                                        <p class="hint-text">via google plus</p>
                                    </div>
                                </div>
                                <!-- END Search Result Item !-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Overlay Search Results !-->
            </div>
            <!-- END Overlay Content !-->
        </div>
        <!-- END OVERLAY -->
        <!-- BEGIN VENDOR JS -->
        <!-- BEGIN VENDOR JS -->
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
        <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
        <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <!-- END VENDOR JS -->
        <!-- BEGIN CORE TEMPLATE JS -->
        <script src="pages/js/pages.min.js" type="text/javascript"></script>
        <!-- END CORE TEMPLATE JS -->
        <!-- BEGIN PAGE LEVEL JS -->
        <script src="assets/js/scripts.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS -->
    </body>
</html>