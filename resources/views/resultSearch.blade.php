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

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
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
                <p>Results for "{{$search}}"</p>
            </div>
            <table class="table table-condensed">
                <tr>
                    <td><a class="tag">Name</a></td>
                    <td><a class="tag">Phone Number</a></td>
                    <td><a class="tag">Email</a></td>
                </tr>
                @if (count($check_name)>0)
                    @foreach ($check_name as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone_number}}</td>
                        <td>{{$value->email}}</td>
                    </tr>
                    @endforeach
                @endif
                @if (count($check_phone)>0)
                    @foreach ($check_phone as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->phone_number}}</td>
                        <td>{{$value->email}}</td>
                    </tr>
                    @endforeach
                @else
                    @if (count($check_name)===0)
                        <p>No contact!</p>
                    @endif
                @endif
            </table>
        </div>
    </header>

</body>

</html>
