<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title> Campus Gist | Blog Posts</title>


    <!-- Scripts -->
    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('js/boot.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/ad.min.js')}}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/cat.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sid.min.css') }}">   
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/util.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6f3bcf9b28.js" crossorigin="anonymous"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark  shadow-sm">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li> -->

      <a href="{{ url('/home')}}" class="navbar-brand d-flex align-items-center">

        <strong>Campus Gist</strong>
      </a>

    </ul>

    <!-- SEARCH FORM -->
    <!-- <form class="form-inline ml-3" method="POST" action="{{ url('/home') }}">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" name="search" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit" name="button">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <!-- <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a> -->
     
      </li>
      <li class="nav-item">
        <a class="nav-link text-info" data-widget="control-sidebar" data-slide="true" href="#" role="button"> 
          View Categories <i class="fas fa-th-large"></i> <i class="right fas fa-angle-left"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->


   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">

      <!-- Search Input -->
        <div class="mt-4 mb-4">
        <form class="form-inline" method="POST" action="{{ url('/search') }}" role="search">
          @csrf
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" value="" name="search" type="search" placeholder="Search Campus Gist" aria-label="Search">
            <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
            </div>
          </div>
        </form>
        </div>
      <!-- Search Input end -->


    <div class="sidebar-heading hd">View Posts By Categories </div>
      <div class="list-group ml-2">
      <?php $categories = new App\Category; ?>
        @if('count($categories) > 0')
          @foreach( $categories->all() as $category)
          <li class=" cati mt-1">
              <a href='{{url("category/{$category->id}")}}'  class=" cati">{{$category->category}}</a>
          </li>
          @endforeach
        @else
          <p>No Category Found</p>
        @endif
      </div>
      <!-- <a href="#">Account <i class="fas fa-cogs"></i></a>
      <hr>
                <a class="" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                  {{ __('Logout') }} <i class="fas fa-sign-out-alt"></i>
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                            
    </div> -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
        <main class="py-4">
            @yield('content')
        </main>

</div>


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->


</body>
</html>