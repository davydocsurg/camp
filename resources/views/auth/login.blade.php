@extends('layouts.app')
@section('title', 'Campus Gist | Login')
@section('content')
<div class="limiter">
    <div class="container-campgist shadow-lg">
        <div class="wrap-campgist">
            <div class="campgist-form-title" style="background-image: url(image/campdome.jpg);">
				<span class="campgist-form-title-1">
					Login to campus gist
				</span>
			</div>
                <form method="POST" action="{{ route('login') }}" class="campgist-form validate-form">
                        @csrf

                        <div class="wrap-campinput validate-input m-b-26">
                            <label for="email" class="label-campinput">{{ __('E-Mail Address') }}</label>
                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class="campinput @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter e-mail address" autofocus>
                                <span class="focus-campinput"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>

                        <div class="wrap-campinput validate-input m-b-18">
                            <label for="password" class="label-campinput">{{ __('Password') }}</label>
                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class=" campinput @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                                <span class="focus-campinput"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>

                        <div class="flex-sb-m w-full p-b-30">
                            <div class="contact100-form-checkbox">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                </div>
                            </div>

                                @if(Route::has('password.request'))
                                    <a class="txt1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>

					<!-- </div> -->
                        <div class="container-campgist-form-btn">
                                <button type="submit" class="campgist-form-btn">
                                    {{ __('Login') }}
                                </button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection