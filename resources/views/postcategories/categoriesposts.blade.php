@extends('postcategories.navy')

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

            @if('count($posts) > 0')

                @foreach($posts->all() as $post)
            <div class="container mt-5 col-md-6 tain shadow-lg" >

                <h2 class="mt-3 ml-4 mb-5">{{ $post->post_title}}</h2>

                 <div class="imag">
                    <img src="{{ $post->post_image}}" class="ml-4 mb-4 postv" >
                            
                 </div>                        

                <div class="">
                    <p class="para ml-4 mr-4">{{ $post->post_body }}</p>

                </div>

                <div class='mb-3 mt-2 ml-4'>
                    <small class=" text-primary">Posted on: {{date('M j, Y  H:i', strtotime($post->updated_at))}}</small>
                </div>

            </div>

                @endforeach
            @else

                <div class="container">
                     <p>Not a post</p>
                </div>

            @endif
@endsection
