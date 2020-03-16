@extends('layouts.app')
<style>
    body {
        
    }
</style>
@section('content')
<div class='container-md'>
<div class="row justify-content-center">
    <div class="col-md-8">
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
             <div class="alert alert-danger">{{ $error }}</div>
        @endforeach

    @endif

     @if(session('status'))

        <div class="alert alert-success" >{{ session('status')}}</div>

    @endif
<div class='card '>
    <div class='card-header'>Add Category</div>
    <div class='card-body'>
       <!-- <div class='container'> -->
           <!-- <div class='row '> -->
           <form action="{{url('/addCategory')}}" method="post" >
            @csrf
            <div class='form-group row'>
                <label for="category" class='col-md-4 '>Category</label>
                <div class='col-md-6'>
                <input id="category" type="category" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                    @error('category')
                         <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary" style="">
                        Add To Categories Table
                    </button>
                </div>
            </div>
        </form>
           </div>
       </div>
    </div>
</div>
</div>
@endsection