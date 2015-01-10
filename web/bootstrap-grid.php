<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/shunya.ico">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shunya Pro - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Blah Insurance Co.</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Agent Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Agent Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Agent Admin</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Agent Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.php"><i class="fa fa-fw fa-bar-chart-o"></i> Analytics</a>
                    </li>
                    <li>
                        <a href="tables.php"><i class="fa fa-fw fa-table"></i> Ledger</a>
                    </li>
                    <li>
                        <a href="forms.php"><i class="fa fa-fw fa-edit"></i> New Agent</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.php"><i class="fa fa-fw fa-desktop"></i> News Feed</a>
                    </li>
                    <li class="active">
                        <a href="bootstrap-grid.php"><i class="fa fa-fw fa-wrench"></i> Preferences</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Agents <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">A. Trivedi</a>
                            </li>
                            <li>
                                <a href="#">Ramya J.</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Preferences
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-wrench"></i> Preferences
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Update Digital Signature
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Change permissions (needs approval)
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Update Officer Information
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Enable 2-Factor Authentication
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Import/Export System Data
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                About Blah Insurance Co.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <!--<div class="row">
                    <div class="col-lg-8 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-8
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-4
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- /.row -->

                <div class="row">
                    <!--<div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-6
                            </div>
                        </div>
                    </div>-->
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                Contact Shunya <img src="assets/shunya.ico">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
