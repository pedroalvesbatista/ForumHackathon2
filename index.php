<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Dashboard </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" rel="stylesheet" href="css/app.css"/>
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
    <link href="vendors/nvd3/css/nv.d3.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="vendors/lcswitch/css/lc_switch.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="css/custom_css/dashboard1.css" rel="stylesheet" type="text/css"/>
    <link href="css/custom_css/dashboard1_timeline.css" rel="stylesheet"/>

    <!--end of page level css-->
</head>
<body class="skin-default">
<div class="preloader">
    <div class="loader_img"><img src="img/loader.gif" alt="loading..." height="64" width="64"></div>
</div>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.php" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the marginin -->
            <img src="img/logo.png" alt="logo" widith="100" height="35" />
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw ti-menu"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-fw ti-email black"></i>
                        <span class="label label-success"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages table-striped">
                        <li class="dropdown-title">New Messages</li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" src="img/authors/avatar7.jpg" alt="avatar-image">

                                <div class="message-body"><strong>Ernest Kerry</strong>
                                    <br>
                                    Can we Meet?
                                    <br>
                                    <small>Just Now</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                <img class="message-image img-circle" src="img/authors/avatar6.jpg" alt="avatar-image">

                                <div class="message-body"><strong>John</strong>
                                    <br>
                                    Dont forgot to call...
                                    <br>
                                    <small>5 minutes ago</small>
                                    <span class="label label-success label-mini msg-lable">New</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" src="img/authors/avatar5.jpg" alt="avatar-image">

                                <div class="message-body">
                                    <strong>Wilton Zeph</strong>
                                    <br>
                                    If there is anything else &hellip;
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                </div>

                            </a>
                        </li>
                        <li>
                            <a href="#" class="message">
                                <img class="message-image img-circle" src="img/authors/man.png" alt="avatar-image">
                                <div class="message-body">
                                    <strong>Jenny Kerry</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="message striped-col">
                                <img class="message-image img-circle" src="img/authors/avatar.jpg" alt="avatar-image">
                                <div class="message-body">
                                    <strong>Tony</strong>
                                    <br>
                                    Let me know when you free
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="#"> View All messages</a></li>
                    </ul>

                </li>
                <!--rightside toggle-->
    
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper row-offcanvas row-offcanvas-left">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="#">
                            <img src="img/authors/man.png" class="img-circle" alt="User Image"></a>
                        <div class="content-profile">
                            <h4 class="media-heading">Marciano</h4>
                            <ul class="icon-list">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-user"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-lock"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-settings"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-fw ti-shift-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li class="active" id="active">
                        <a href="index-2.html">
                            <i class="menu-icon ti-desktop"></i>
                            <span class="mm-text ">Home</span>
                        </a>
                    </li>
                    <li>
                    </li>
                    <li class="menu-dropdown">
                        <a href="adicionar.php">
                            <i class="menu-icon ti-check-box"></i>
                            <span>Adicionar</span>
                            
                        </a>

                    </li>
                    <li class="menu-dropdown">
                        <a href="listaeventos.php">
                            <i class="menu-icon ti-desktop"></i>
                            <span>
                                    Eventos
                                </span>
                            <span class="fa arrow"></span>
                        </a>

                    </li>
             
                    <li class="menu-dropdown">
                        <a href="bigdata.php">
                            <i class="menu-icon ti-widget"></i>
                            <span>API</span>
                            <span class="fa arrow"></span>
                        </a>
                 
                    </li>
        
               
                    <li class="menu-dropdown">
                        <a href="localizador.php">
                            <i class="menu-icon ti-widget"></i>
                            <span>Localização</span>
                            <span class="fa arrow"></span>
                        </a>
                 
                    </li>

              
                    <li class="menu-dropdown">
                        <a href="bigdata.php">
                            <i class="menu-icon ti-widget"></i>
                            <span>Match</span>
                            <span class="fa arrow"></span>
                        </a>
                 
                    </li>
  </li>           
                
                </ul>
                <!-- / .navigation --> </div>
            <!-- menu --> </section>
        <!-- /.sidebar --> </aside>
    <aside class="right-side">

        <section class="content-header">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-5 col-xs-8">
                    <div class="header-element">
                        <h3>Clear/
                            <small>Dashboard</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-offset-2 col-md-6 col-sm-7 col-xs-4">
                    <div class="header-object">
                        <span class="option-search pull-right hidden-xs">
                            <span class="search-wrapper">
                                <input type="text" placeholder="Procurar"><i class="ti-search"></i>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-eye text-warning"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>50</b></h3>
                                <p>Menções hoje</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="loadspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-shopping-cart text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3><b id="widget_count3">0</b></h3>
                                <p>Patrocinadores</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span class="linechart" id="salesspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-thumb-up text-danger"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>8/10</b></h3>
                                <p>Aceitação</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="visitsspark-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="flip">
                        <div class="widget-bg-color-icon card-box front">
                            <div class="bg-icon pull-left">
                                <i class="ti-user text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b>10</b></h3>
                                <p>Inscritos</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="widget-bg-color-icon card-box back">
                            <div class="text-center">
                                <span id="subscribers-chart"></span>
                                <hr>
                                <p>Check summary</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="panel main-chart">
                                <div class="panel-heading panel-tabs">
                                    <ul class="nav nav-tabs nav-float" role="tablist">
                                        <li class="active text-center">
                                            <a href="#home" role="tab" data-toggle="tab">Interações</a>
                                        </li>
                                        <li class="text-center">
                                            <a href="#profile" role="tab" data-toggle="tab"><span class="hidden-xs">Analíse </span>
                                               vendas </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home">
                                            <div class="form-group">
                                                <input type="checkbox" id="toggle_real" name="my-checkbox"
                                                       data-size="small" checked>
                                            </div>
                                            <div id="live-chart" class="livechart-tab1 m-t-10"></div>
                                        </div>
                                        <div class="tab-pane fade" id="profile">
                                            <div class="chart-container">
                                                <span class="">
                                                    <i class="ti-reload redraw-cart pull-right set-animate"></i>
                                                </span>
                                                <canvas id="dashboard-chart1" width="800" height="300"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                  
                        
                    </div>
                </div>
                <div class="col-lg-4  col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-sm-6">

                        </div>

                    </div>
                </div>
            </div>
            <!--rightside bar -->
            <div id="right">
                <div id="right-slim">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <div class="panel-tabs">
                                <ul class="nav nav-tabs nav-float" role="tablist">
                                    <li class="active text-center">
                                        <a href="#r_tab1" role="tab" data-toggle="tab"><i
                                                class="fa fa-fw ti-comments"></i></a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#r_tab2" role="tab" data-toggle="tab"><i class="fa fa-fw ti-bell"></i></a>
                                    </li>
                                    <li class="text-center">
                                        <a href="#r_tab3" role="tab" data-toggle="tab"><i
                                                class="fa fa-fw ti-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="r_tab1">
                                    <div id="slim_t1">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="menu-icon  fa fa-fw ti-user"></i>
                                            Contacts
                                        </h5>
                                        <ul class="list-unstyled margin-none">
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar6.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Annette
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Jordan
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar2.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Stewart
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar3.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-warning"></i>
                                                    Alfred
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar4.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-danger"></i>
                                                    Eileen
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar5.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Robert
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar7.jpg"
                                                         class="img-circle pull-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Cassandra
                                                </a>
                                            </li>
                                        </ul>

                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-export"></i>
                                            Recent Updates
                                        </h5>
                                        <div>
                                            <ul class="list-unstyled">
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-comments-smiley fa-fw text-primary"></i>
                                                        New Comment
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-twitter-alt fa-fw text-success"></i>
                                                        3 New Followers
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-email fa-fw text-info"></i>
                                                        Message Sent
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-write fa-fw text-warning"></i>
                                                        New Task
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-export fa-fw text-danger"></i>
                                                        Server Rebooted
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-info-alt fa-fw text-primary"></i>
                                                        Server Not Responding
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-shopping-cart fa-fw text-success"></i>
                                                        New Order Placed
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-money fa-fw text-info"></i>
                                                        Payment Received
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab2">
                                    <div id="slim_t2">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-bell"></i>
                                            Notifications
                                        </h5>
                                        <ul class="list-unstyled m-t-15 notifications">
                                            <li>
                                                <a href="#" class="message icon-not striped-col">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar3.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John Doe</strong>
                                                        <br>
                                                        5 members joined today
                                                        <br>
                                                        <small class="noti-date">Just now</small>
                                                    </div>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Tony</strong>
                                                        <br>
                                                        likes a photo of you
                                                        <br>
                                                        <small class="noti-date">5 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not striped-col">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar6.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John</strong>
                                                        <br>
                                                        Dont forgot to call...
                                                        <br>
                                                        <small class="noti-date">11 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/man.png" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Jenny Kerry</strong>
                                                        <br>
                                                        Done with it...
                                                        <br>
                                                        <small class="noti-date">1 Hour</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="message icon-not striped-col">
                                                    <img class="message-image img-circle"
                                                         src="img/authors/avatar7.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>Ernest Kerry</strong>
                                                        <br>
                                                        2 members joined today
                                                        <br>
                                                        <small class="noti-date">3 Days</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-right noti-footer"><a href="#">View All Notifications <i
                                                    class="ti-arrow-right"></i></a></li>
                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-check-box"></i>
                                            Tasks
                                        </h5>
                                        <ul class="list-unstyled m-t-15">
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Button Design</span>
                                                        <small class="pull-right text-muted">40%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-success"
                                                             role="progressbar"
                                                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Theme Creation</span>
                                                        <small class="pull-right text-muted">20%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-info" role="progressbar"
                                                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 20%">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>XYZ Task To Do</span>
                                                        <small class="pull-right text-muted">60%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-warning"
                                                             role="progressbar"
                                                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 60%">
                                                            <span class="sr-only">60% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Transitions Creation</span>
                                                        <small class="pull-right text-muted">80%</small>
                                                    </p>
                                                    <div class="progress progress-xs progress-striped active">
                                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 80%">
                                                            <span class="sr-only">80% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="text-right"><a href="#">View All Tasks <i
                                                    class="ti-arrow-right"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab3">
                                    <div id="slim_t3">

                                        <h5 class="rightsidebar-right-heading text-uppercase gen-sett-m-t text-xs">
                                            <i class="fa fa-fw ti-settings"></i>
                                            General
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="status">Available</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="status" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="email-auth">Login with Email</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="email-auth" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="update">Auto Update</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="update" name="my-checkbox">
                                        </span>
                                            </li>

                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-volume"></i>
                                            Sound & Notification
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="chat-sound">Chat Sound</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="chat-sound" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="noti-sound">Notification Sound</label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="noti-sound" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="remain">Remainder </label>
                                                <span class="pull-right">
                                            <input type="checkbox" id="remain" name="my-checkbox" checked>
                                        </span>

                                            </li>
                                            <li>
                                                <label for="vol">Volume</label>
                                                <input type="range" id="vol" min="0" max="100" value="15">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#right -->
            <div class="background-overlay"></div>
        </section>
        <!-- /.content --> </aside>
    <!-- /.right-side --> </div>
<!-- ./wrapper -->
<!-- global js -->
<div id="qn"></div>
<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/g/bootstrap@3.3.7,bootstrap.switch@3.3.2,jquery.nicescroll@3.6.0"></script>
<script src="js/app.js" type="text/javascript"></script>
<!-- end of global js -->

<!-- begining of page level js -->
<!--Sparkline Chart-->
<script type="text/javascript" src="js/custom_js/sparkline/jquery.flot.spline.js"></script>
<!-- flip --->
<script type="text/javascript" src="vendors/flip/js/jquery.flip.min.js"></script>
<script type="text/javascript" src="vendors/lcswitch/js/lc_switch.min.js"></script>
<!--flot chart-->
<script type="text/javascript" src="vendors/flotchart/js/jquery.flot.js"></script>
<script type="text/javascript" src="vendors/flotchart/js/jquery.flot.resize.js"></script>
<script type="text/javascript" src="vendors/flotchart/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="vendors/flotspline/js/jquery.flot.spline.min.js"></script>
<script type="text/javascript" src="vendors/flot.tooltip/js/jquery.flot.tooltip.js"></script>
<!--swiper-->
<script type="text/javascript" src="vendors/swiper/js/swiper.min.js"></script>
<!--chartjs-->
<script src="vendors/chartjs/js/Chart.js"></script>
<!--nvd3 chart-->
<script type="text/javascript" src="js/nvd3/d3.v3.min.js"></script>
<script type="text/javascript" src="vendors/nvd3/js/nv.d3.min.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/advanced_newsTicker/js/newsTicker.js"></script>
<script type="text/javascript" src="js/dashboard1.js"></script>
<!-- end of page level js -->

</body>


<!-- Mirrored from clear.lcrm.in/light/ by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 24 Apr 2017 18:38:20 GMT -->
</html>