@extends('layouts.auth')

@section('content')

<div class="login-form">
    <form  method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="form-group">
            <label>{{ __('E-Mail Address') }}</label>
            <input id="email" class="au-input au-input--full {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
            
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif

        </div>


        <div class="form-group">
            <label>Password</label>
            <input class="au-input au-input--full {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password">
           
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>


        <div class="login-checkbox">
            
            <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                {{ __('Remember Me') }}
            </label>

            @if (Route::has('password.request'))
                <label>
                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                </label>
            @endif
            
        </div>
        <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">{{ __('Login') }}</button>
        
        
    </form>
    @if (Route::has('register'))
    <div class="register-link">
        <p>
            Don't you have account?
            <a href="{{ route('register') }}">Sign Up</a>
        </p>
    </div>
    @endif
</div>


@endsection
