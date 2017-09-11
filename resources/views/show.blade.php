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

</head>

<body id="page-top" ng-controller="ContactsController">

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
    <div>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">My contact</h1>
                <hr>
            </div>
            <div class="header-content-inner">
                <table class="table table-condensed">
                <tr>
                    <td><a class="tag">Id</a></td>
                    <td><a class="tag">Name</a></td>
                    <td><a class="tag">Phone Number</a></td>
                    <td><a class="tag">Email</a></td>
                    <th><button id="btn-add" class="btn btn-primary btn-xs" ng-click="toggle('add', 0)">Add New Contact</button></th>
                </tr>
                <tr ng-repeat="contact in contacts">
                    <td>{{ contact.id }}</td>
                    <td>{{ contact.name }}</td>
                    <td>{{ contact.phone_number }}</td>
                    <td>{{ contact.email }}</td>
                    <td>
                        <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', contact.id)">Edit</button>
                        <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(contact.id)">Delete</button>
                    </td>
                </tr>
                </table>
            </div>
        </div>
    </div>
    </header>

    <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">{{ form_title }}</h4>
                </div>
                <div class="modal-body">
                    <form name="frmContacts" class="form-horizontal" novalidate="">

                        <div class="form-group error">
                            <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control has-error" id="name" name="name" placeholder="Name" value="{{name}}" 
                                ng-model="contact.name" ng-required="true">
                                <span class="help-inline" 
                                ng-show="frmContacts.name.$invalid && frmContacts.name.$touched">Name field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Phone number</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="contact_number" name="phone_number" placeholder="Phone Number" value="{{phone_number}}" 
                                ng-model="contact.phone_number" ng-required="true">
                            <span class="help-inline" 
                                ng-show="frmContacts.contact_number.$invalid && frmContacts.contact_number.$touched">Phone number field is required</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{email}}" 
                                ng-model="contact.email" ng-required="false">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modal, id)" ng-disabled="frmContacts.$invalid">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<script src="<?= asset('app/libs/angular/angular.min.js') ?>"></script>
<script src="<?= asset('js/jquery.min.js') ?>"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>"></script>
<script src="<?= asset('app/app.js') ?>" ></script >
<script src="<?= asset('app/Http/Controllers/main.js') ?>" ></script >
</body>

</html>
