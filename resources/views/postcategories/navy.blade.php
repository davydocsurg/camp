<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Campus Gist | Posts</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/wel.css')}}" rel="stylesheet">

<!-- scripts -->
  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <script src="https://kit.fontawesome.com/6f3bcf9b28.js" crossorigin="anonymous"></script>

</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">View Posts By Categories </div>
      <div class="list-group ">
      @if('count($categories) > 0')
        @foreach( $categories->all() as $category)
         <li class="list-group-item  shadow-sm mt-1">
            <a href='{{url("category/{$category->id}")}}'>{{$category->category}}</a>
         </li>
         @endforeach
      @else
        <p>No Category Found</p>
    @endif
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">

        <button class="btn btn-info btn-sm" id="menu-toggle"><i class="fas fa-arrow-left"></i> View Categories</button>

        <button class="navbar-toggler ml-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item active">
              <a class="nav-link" href="#" ><i class="fab fa-twitter"></i> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
            </li>

            @if(Auth::check())
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </nav>

      <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
