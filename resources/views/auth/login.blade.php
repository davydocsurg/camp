@extends('layouts.app')

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-form-title" style="background-image: url(image/campdome.jpg);">
				<span class="login100-form-title-1">
					Login to campus gist
				</span>
			</div>
                <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                        @csrf

                        <div class="wrap-input100 validate-input m-b-26">
                            <label for="email" class="label-input100">{{ __('E-Mail Address') }}</label>
                            <!-- <div class="col-md-6"> -->
                                <input id="email" type="email" class=" input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter e-mail address" autofocus>
                                <span class="focus-input100"></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <!-- </div> -->
                        </div>

                        <div class="wrap-input100 validate-input m-b-18">
                            <label for="password" class="label-input100">{{ __('Password') }}</label>
                            <!-- <div class="col-md-6"> -->
                                <input id="password" type="password" class=" input100 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">
                                <span class="focus-input100"></span>
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
                        <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Login') }}
                                </button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection