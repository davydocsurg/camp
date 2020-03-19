<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Campus Gist</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="https://kit.fontawesome.com/6f3bcf9b28.js" crossorigin="anonymous"></script>
    <!-- Favicons -->

<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      .imag {
        border-radius: 8px;
        max-width: 100%;
        height: auto;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .jumbotron {
        padding-top: 3rem;
        padding-bottom: 3rem;
        margin-bottom: 0;
 
}
@media (min-width: 768px) {
  .jumbotron {
    padding-top: 6rem;
    padding-bottom: 6rem;
    background-color: white !important;

  }
}

.jumbotron p:last-child {
  margin-bottom: 0;
}

.jumbotron h1 {
  font-weight: 300;
}

.jumbotron .container {
  max-width: 40rem;
}

    </style>
    <!-- Custom styles for this template -->
  </head>
  <body>
    <header class="">
  <div class="collapse bg-dark fixed-top" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About</h4>
          <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Contact</h4>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white"><i class="fab fa-twitter"></i> Campus Gist</a></li>
            <li><a href="#" class="text-white"><i class="fab fa-facebook"> Campus Gist</i></a></li>
            @if(Auth::check())
            <li class="text-white" >
                <a class="text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}<i class="far fa-sign-out"></i>
                </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                 </form>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm fixed-top ">
    <div class="container d-flex justify-content-between">
      <a href="{{ url('/home')}}" class="navbar-brand d-flex align-items-center">
        <!-- <svg xmlns="" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" 
        stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" 
        focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/>
        <circle cx="12" cy="13" r="4"/></svg> -->
        <strong>Campus Gist</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center mt-5 shadow-sm">
    <div class="container">
      <h1>Welcome To Campus Gist</h1>
      <p class="lead  text-dark">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <!-- <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p> -->
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
    @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
             </div>
    @endif
    
    <!-- defined posts -->
    <?php $posts = new App\Post; ?>

      @if("count($posts) > 0")

<!-- for each posts -->
        @foreach($posts->all() as $post)
        <div class="rowl row col-md-4">
        <div class="container cont">
            <!-- <div class="col-md-8"> -->
            <div class="card mb-4 shadow-sm">
            <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
                <img src="{{ $post->post_image}}" class="ml-3 mr-3 mt-4 mb-4 imag">

                <div class="card-body">
                <p class="card-text">{{ substr($post->post_body,0,50) }} ...</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href='{{url("/view/{$post->id}")}}' class="p-2 btn btn-sm btn-outline-secondary mr-4 fin" type="button">
                        <span class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Read More"> Read More</span>
                    </a>
                    @if(Auth::check())

                    <a href='{{url("/edit/{$post->id}")}}'  class="p-2 btn btn-sm btn-outline-secondary" type="button">
                        <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                    </a>

                    <a href='{{url("/delete/{$post->id}")}}'  class="p-2 btn btn-sm btn-outline-secondary" type="button">
                        <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                    </a>
                    @endif
                    
                    </div>
                </div>
                <small class="text-muted mr-3 txt">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>

                </div>
            <!-- </div> -->
            </div>
            </div>
        </div>
        @endforeach

      @else

       <div class="container">
       <b>No posts found</b>
       </div>
      @endif
     </div>
  </div>

</main>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script></body>
</html>
