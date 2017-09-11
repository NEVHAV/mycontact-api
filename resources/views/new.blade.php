<!DOCTYPE html>
<html lang="en">

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
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <div id="collapse1" class="panel-collapse collapse">
                    <ul class="list-group">
                        <li><a class="page-scroll" href="show">Show contact</a></li>
                        <li><a class="page-scroll" href="new">New contact</a></li>
                        <li><a class="page-scroll" href="search">Search contact</a></li>
                        <li><a class="page-scroll" href="delete">Delete contact</a></li>
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
        @if (Session::has('flash_message'))
            <div class="alert alert-success">
                {{Session::get('flash_message')}}
            </div>
        @endif
        @if (Session::has('error_number_had'))
            <div class="alert alert-danger">
                {{Session::get('error_number_had')}}
            </div>
        @endif
        <div class="header-content-inner">
            <h1 id="homeHeading">Adding a new contact</h1>
            <hr>
        </div>
        <div class="container">
            <form class="form-horizontal" action="http://localhost:8080/contacts/new" method="post">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" placeholder="Name" required="">
                </div>
            </div>
             
            <div class="form-group">
                <label for="inputPhone" class="col-sm-2 control-label">Phone Number</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone_number" placeholder="Phone Number" required="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>

            <div class="header-content-inner">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-primary">Add contact</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div><!-- container -->
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
<script src="js/main.js" ></script >
</body>

</html>
