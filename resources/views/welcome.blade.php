<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Camp Gist</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/wel.css">
        <style>
 


        </style>
    </head>
    <body>



            <!-- <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> -->

        

                <div class="lin">
            @if (Route::has('login'))
                <div class="top-right lnk">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
                </div>
                <div class='container container-fluid cont'>
                    <h2>Welcome to Camp</h2>
                </div>
    </body>
</html>
<!-- <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div>
        </div>

<!-- second post ends -->
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div>
        </div>
<!-- third post ends -->
        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div>
        </div>
<!-- fourth post ends -->

        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div>
        </div>
<!-- fifth post ends -->

        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div>
        </div>
<!-- sixth post ends -->

        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div>
        </div>
<!-- seventh post ends -->

        <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
            <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" ><rect width="100%" height="100%"
             fill="#55595c"/> -->
             <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
    
             <!-- <text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->

            <div class="card-body">
              <p class="card-text">{{ substr($post->post_body,0,150) }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <a href='{{url("/view/{$post->id}")}}' class="p-2">
                    <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                </a>

                <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                    <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                </a>

                <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                    <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                </a>
                </div>
                <small class="text-muted">Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</small>
              </div>
            </div> -->