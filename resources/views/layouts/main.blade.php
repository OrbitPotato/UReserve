<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UReserve</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css"> --}}
    <link href=”https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css” rel=”stylesheet”>
    @yield('css')

  </head>
<body>
    <div class="container-fluid">
        <div class="row">
          <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block  sidebar collapse">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url('guidelines') }}">
                    <i class="fas fa-newspaper" aria-hidden="true"> Guidelines</i>           
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('about-me') }}">
                     <i class="fa fa-user-circle" aria-hidden="true"> About Me</i>              
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('reserve-equipment') }}">
                    <i class="fa fa-wrench" aria-hidden="true"> Reserve Equipment</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('reserve-rooms') }}">
                    <i class="fa fa-building" aria-hidden="true"> Reserve Room</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('my-history') }}">
                    <i class="fa fa-history" aria-hidden="true"> My History</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('my-deficiencies') }}">
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"> My Deficiencies</i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}">
                    <i class="fa fa-sign-out" aria-hidden="true"> Logout</i>
                  </a>
                </li>
              </ul>
      
            
            </div>
          </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        <main>

    
    <script src="{{ asset('js/jquery.bundle.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    
    @yield('js')
    <script>
      $(function() {
        $('#from').datetimepicker();
        $('#to').datetimepicker();
      })
    </script>

</body>
</html>