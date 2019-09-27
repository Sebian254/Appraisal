<!Doctype HTML>
<html>
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{ asset ('/css/bootstrap.min.css')}}"> 
  <link rel="stylesheet" type="text/css" href="{{ asset('/Style.css')}}"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
</head>
<body>
<div class="sidenav">
  <ul>
    <li class="nav-item">
      <img src="{{ asset('merit.jfif')}}" class="thumbnail" style="width: 150px; border-radius: 60%; height: 150px;">
    </li><br>
    <li class="nav-item">
      <a href="Dashboard">Dashboard</a>
    </li><br>
    <li class="nav-item">
      <a href="Register">Register</a>
    </li><br>
    <li class="nav-item">
      <a href="Employees">Employees</a>
    </li><br>
    <li class="nav-item">
      <a href="Preview">Preview</a>
    </li><br>
    <li class="nav-item">
      <a href="User Access Control">User Access Control</a>
    </li>
  </ul>
</div>

<!-- Page content -->
<div class="main">
  <div class="container-fluid">
    <div class="row" style="margin-top: 20px;">
      <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
          <div class="card-header">Register</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-danger mb-3">
          <div class="card-header">Preview</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card text-white bg-secondary mb-3">
          <div class="card-header">Employees</div>
          <div class="card-body">
            <h5 class="card-title">Primary card title</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  @yield('content')
</div>
</body>
</html>