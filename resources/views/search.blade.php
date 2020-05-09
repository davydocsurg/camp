@extends('layouts/sid')

@section('content')
<div class="album py-5 bg-light">
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
                <h4 class="card-title card-text-center card-header">{{ $post->post_title}}</h4>
                    <img src="{{ $post->post_image}}" class="ml-3 mr-3 mt-4 mb-4 imag">
                    <div class="card-body">
                    <p class="card-text">{{ substr($post->post_body,0,90) }} ...</p>
                    <div class="d-flex justify-content-between align-items-centermb-4">
                        <div class="btn-group">
                        <a href='{{url("/view/{$post->id}")}}' class="p-2 btn btn-sm btn-outline-secondary mr-4" type="button">
                            <span class="fas fa-eye" data-toggle="tooltip" data-placement="top" title="Read More"> Read More</span>
                        </a>
                        @if(Auth::check())

                        <a href='{{url("/edit/{$post->id}")}}'  class="p-2 btn btn-sm btn-outline-secondary" type="button">
                            <span class="fas fa-edit text-info"  data-toggle="tooltip" data-placement="top" title="Edit post">Edit</span>
                        </a>

                        <a href='{{url("/delete/{$post->id}")}}'  class="p-2 btn btn-sm btn-outline-secondary" type="button">
                            <span class="fa fa-trash text-danger" data-toggle="tooltip" data-placement="top" title="Delete post">Delete</span>
                        </a>
                        @endif
                        
                        </div>
                    </div>
                    <small class=" text-primary mr-3 ">Posted on: {{date ('M,j,Y H:i', strtotime($post->updated_at))}}</small>

                    </div>
                <!-- </div> -->
                </div>
                </div>
            </div>
          @endforeach

          @else
              <h2>No posts found</h2>
          @endif
    </div>
</div>

@endsection
