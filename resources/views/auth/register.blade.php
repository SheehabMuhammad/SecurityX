@extends('layouts.auth')

@section('content')

            <div class="login-form">
                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label>{{ __('Full Name') }}</label>
                        <input class="au-input au-input--full {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>{{ __('E-Mail Address') }}</label>
                        <input id="email" class="au-input au-input--full {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required placeholder="Email">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label>{{ __('Password') }}</label>
                        <input id="password" class="au-input au-input--full {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" placeholder="Password" required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" class="au-input au-input--full" type="password" name="password_confirmation" required placeholder="{{ __('Confirm Password') }}">
                    </div>

                    <div class="login-checkbox">
                        <label style="font-size: 12px;">
                            <input type="checkbox" name="aggree">Agree the terms and policy
                        </label>
                    </div>
                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"> {{ __('Register') }}</button>
                    
                </form>

                @if (Route::has('login'))
                <div class="register-link">
                    <p>
                        Already have account?
                        <a href="{{ route('login') }}">Sign In</a>
                    </p>
                </div>
                @endif
                
            </div>
@endsection
