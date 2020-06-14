@extends('layouts/sid')
@section('title')
    | Search
@endsection
@section('content')
<div class="album py-5 bg-dark">
    <div class="container">
    @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
             </div>
    @endif

        @if(count($posts) > 0)

          @foreach($posts->all() as $post)
          <div class="rowl  row col-md-4">
            <div class="container cont">
                <!-- <div class="col-md-8"> -->
                <div class="card mb-4 shadow-sm">
                <h3 class="card-title card-text-center card-header text-dark">{{ $post->post_title}}</h3>
                    <img src="{{ $post->post_image}}" class="ml-3 mr-3 mt-4 mb-4 imag">
                    <div class="card-body">
                    <p class="card-text srchbody">{{ substr($post->post_body,0,90) }} ...</p>
                    <hr>
                    <div class="d-flex justify-content-between align-items-centermb-4">
                        <div class="btn-group">
                        <a href='{{url("/view/{$post->id}")}}' class="p-2 btn btn-sm btn-outline-success" type="button">
                            <span class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Read More"><b>Read More</b> </span>
                        </a>
                        @if(Auth::check())

                        <a href='{{url("/edit/{$post->id}")}}'  class="p-2 btn btn-sm btn-outline-primary" type="button">
                            <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post">Edit</span>
                        </a>

                        <a href='{{url("/delete/{$post->id}")}}'  class="p-2 btn btn-sm btn-outline-danger" type="button">
                            <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post">Delete</span>
                        </a>
                        @endif
                        
                        </div>
                    </div>
                    <hr>
                    <small class=" text-muted mr-3 ">Posted on: {{date ('M. j, Y H:i', strtotime($post->updated_at))}}</small>

                    </div>
                <!-- </div> -->
                </div>
                </div>
            </div>
          @endforeach

          @else
          <div class="container nopost">
              <h2>No search results found, Click on "View Categories" to select post categories. </h2>
          </div>
        @endif
    </div>
</div>
    <div class="mr-4 scrol">
        <a href="#" class="btn btn-primary btn-sm my-2 shadow-lg"> Scroll to Top </a>
    </div>
@endsection
