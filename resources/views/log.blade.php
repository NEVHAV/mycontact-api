<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <div class="container">
        @if (Session::has('flash3'))
            <div class="alert alert-success">
                {{Session::get('flash3')}}
            </div>
        @endif
        @if (Session::has('flash'))
            <div class="alert alert-danger">
                {{Session::get('flash')}}
            </div>
        @endif
        <form class="form-horizontal" action="http://localhost:8080/contacts/log" method="post">
            <div class="form-group">
                <label for="inputName" class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPhone" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
            </div>

            <div class="header-content-inner">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Log in</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>