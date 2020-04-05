@extends('postcategories/navy')

<style>


@media(max-width: 400px) {
    .cont {
        display: block !important;
    }
}

@media(min-width: 400px) {
    .cont {
        display: flex !important;
    }

    .hori{
        display: none !important;
    }
}


.tain {
    background-color: white !important;
    border-radius: 10px ;
    border: 2px solid transparent;
}

body {
    background-color: rgb(148, 144, 144);
}

.jumbotron {
    background-color: white !important;
}

.postv {
    max-width: 90% !important;
}
</style>

@section('content')
<section class="jumbotron text-center shadow-sm">
            <div class="container">
            <h1>Welcome To Campus Gist</h1>
            <p class="lead  text-dark">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            </div>
        </section>  

            <!-- <div class="card mt-5">
                <h4 class="card-header ">
                    Posts
                </h4>

                <div class="card-body cont"> -->
                    <!-- <div class="card col-md-4 mr-5"  style="border:transparent;">
                        <ul class="list-group">
                            @if(count($categories) > 0)
                                @foreach( $categories->all() as $category)
                                <li class="list-group-item">{{$category->category}}</li>
                                @endforeach
                                @else
                                <p>No Category Found</p>
                            @endif

                        </ul>
                    </div> -->
<!-- <hr class="hori"><hr class="hori"> -->
              
                   
                        <div class="container mt-5 col-md-6 tain shadow-lg" >
                            <!-- <div class="row"> -->
                            @if(count($posts) > 0)

                            @foreach($posts->all() as $post)
                            <h2 class="mt-3 ml-4 mb-5">{{ $post->post_title}}</h2>

                            <div class="imag">
                                <img src="{{ $post->post_image}}" class="ml-4 mb-4 postv" >
                            
                            </div>                        

                            <div class="card-body">
                                <p class="para">{{ $post->post_body }}</p>

                                    <small class="text-primary">Posted on: {{date('M. j, Y H:i', strtotime($post->updated_at))}}</small>

                            @endforeach

                            @else

                            <div class="container">
                                <p>Not a post</p>
                            </div>

                            @endif
                            </div>
                        </div>

@endsection
