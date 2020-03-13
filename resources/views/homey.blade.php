@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <!-- @if(count($errors) > 0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach

        @endif

        @if(session('response'))

            <div class="alert alert-sucess" style="background-color:green; color:black;">{{ session('response')}}</div>

        @endif -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
             </div>
        @endif
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                
                <?php $posts = new App\Post; ?>

                    <div class="">
                    
                        @if("count($posts) > 0")

                            @foreach($posts->all() as $post)
    
                        <!-- <div class="@if ('count($posts) === 1') col s12 m6 offset-m3 @elseif ('count($posts) === 2') col s12 m6 @else col s12 m4 @endif"> -->
                                <h4 class="card-title card-text-center">{{ $post->post_title}}</h4>
                                <img src="{{ $post->post_image}}" alt="" style="height:14rem;" class="lazy">
                                
                                <p>{{ substr($post->post_body,0,150) }}</p>

                                <ul class="nav nav-pils " >
                                    <li role="presentation">
                                       <a href='{{url("/view/{$post->id}")}}' class="p-2">
                                            <span class="fas fa-binoculars" data-toggle="tooltip" data-placement="top" title="View post"></span>
                                       </a>
                                    </li>
                                    <li role="presentation">
                                    <a href='{{url("/edit/{$post->id}")}}' class="p-2">
                                            <span class="fas fa-edit"  data-toggle="tooltip" data-placement="top" title="Edit post"></span>
                                       </a>
                                    </li>

                                    <li role="presentation">
                                    <a href='{{url("/delete/{$post->id}")}}' class="p-2">
                                            <span class="fa fa-trash" data-toggle="tooltip" data-placement="top" title="Delete post"></span>
                                       </a>
                                    </li>
                                </ul>
                                </ul>
                            
                                <cite >Posted on: {{date('M,j,Y H:i', strtotime($post->updated_at))}}</cite>
                        <!-- </div> -->
                                
                                <hr>

                            @endforeach

                        @else
                                <p>No posts found</p>
                        @endif

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
