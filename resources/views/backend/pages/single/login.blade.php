<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Login</title>

    <link href="{{ asset('ui/backend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('ui/backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('ui/backend/css/sb-admin.css') }}" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form method="post" action="{{ URL::to('/login-store') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email address" required="required">
                
              </div>
            </div>
            <div class="form-group">
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
                
              </div>
            </div>
           <!--  <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div> -->
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>

        </div>
      </div>
    </div>


    <script src="{{ asset('ui/backend/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('ui/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('ui/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  </body>

</html>
