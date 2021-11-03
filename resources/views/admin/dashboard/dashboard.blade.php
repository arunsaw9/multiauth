<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Admin Auth - laravelcode.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>

    <div>
        <a class="dropdown-item" href="{{ route('adminLogout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    <h2>Laravel 8 Admin Auth - laravelcode.com</h2>
  
<div class="container">
    Welcome, {{ auth()->guard('admin')->user()->name }} <br>
    In the Admin Dashboard.....
</div>
   
</body>
</html>