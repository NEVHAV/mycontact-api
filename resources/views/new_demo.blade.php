<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <div class="container">
        @if (Session::has('flash'))
            <div class="alert alert-success">
                {{Session::get('flash')}}
            </div>
        @endif

    <div class="container">
        <form class="form-horizontal" action="http://localhost:8080/contacts/new" method="post">
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" placeholder="Name" required="">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPhone" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="Password" required="">
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
</body>
</html>