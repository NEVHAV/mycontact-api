<!DOCTYPE html>
<html lang="en" ng-app="contact">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link href="libs/bootstrap-additions/dist/bootstrap-additions.min.css"
          rel="stylesheet" >
    <link href="libs/angularjs-toaster/toaster.min.css"
          rel="stylesheet" >
    <link href="libs/ladda/dist/ladda-themeless.min.css"
          rel="stylesheet" >
    <link href="libs/font-awesome/css/font-awesome.min.css"
          rel="stylesheet" >

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <div class="dropdown">
                <button type="button" class="navbar-toggle dropdown-toggle" data-toggle="dropdown">Menu <i class="fa fa-bars"></i>
                </button>
                <ul class="dropdown-menu">
                    <li class="list-group-item">Show contact</li>
                    <li class="list-group-item">New contact</li>
                    <li class="list-group-item">Search contact</li>
                    <li class="list-group-item">Delete contact</li>
                </ul>
                </div>
                <a class="navbar-brand page-scroll" href="home">My contact</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="show">Show contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="new">New contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="search">Search contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="delete">Delete contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Get your online contact - more convenient, more comfortable</h1>
                <hr>
                <p>My contact: show all of my contact, add new contact, search phone number in my contact, delete and more</p>
                <a href="show" class="btn btn-primary btn-xl page-scroll">My contact</a>
            </div>
        </div>
    </header>
<script src="libs/angular/angular.min.js" ></script >
<script src="libs/angular-resource/angular-resource.min.js" ></script >
<script src="libs/angular-animate/angular-animate.min.js" ></script >
<script src="libs/ngInfiniteScroll/build/ng-infinite-scroll.min.js" ></script >
<script src="libs/spin.js/spin.js" ></script >
<script src="libs/angular-spinner/angular-spinner.min.js" ></script >
<script src="libs/angular-auto-validate/dist/jcs-auto-validate.min.js" ></script >
<script src="libs/ladda/dist/ladda.min.js" ></script >
<script src="libs/angular-ladda/dist/angular-ladda.min.js" ></script >
<script src="libs/angular-strap/dist/angular-strap.min.js" ></script >
<script src="libs/angular-strap/dist/angular-strap.tpl.min.js" ></script >
<script src="libs/angularjs-toaster/toaster.min.js" ></script >
<script src="main.js" ></script >
</body>

</html>
