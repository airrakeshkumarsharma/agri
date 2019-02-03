<?php
include"config.php";
include('check_session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AGRI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <!-- /#wrapper -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>

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
                <a class="navbar-brand" href="index3.php">agri soch</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> My account <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profile2.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <br>
                        <li>
                            <a href="changepwd.php"><i class="fa fa-fw fa-key"></i>Edit Password</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=='index3.php' ){echo 'active';} ?>">
                        <a href="index3.php"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>
                    
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=='select1.php' ){echo 'active';} ?>">
                        <a href="select1.php"><i class="fa fa-fw fa-upload"></i> Uploads</a>
                    </li>
                    <li class="<?php if(basename($_SERVER['PHP_SELF'])=='users.php' ){echo 'active';} ?>">
                        <a href="users.php"><i class="fa fa-fw fa-user"></i>subsidy</a> 
                    </li>
                    
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-user"></i> Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                `