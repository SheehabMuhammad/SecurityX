@extends('layouts.app')

@section('content')
            <div class="row">
                <div class="col-lg-10" style="margin: 0 auto;">     
                    <form class="card" method="post" action="{{route('account.update', $user)}}">
                        {{ csrf_field() }}
                        <div class="card-header">
                            <strong>Your Account</strong>
                        </div>
                        <div class="card-body card-block">
                            <div class="form-group">
                                <label for="name" class=" form-control-label">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your full name" value="{{auth()->user()->name}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="email" class=" form-control-label">Email Address</label>
                                <input type="text" name="email" id="email" placeholder="Enter your email address" value="{{auth()->user()->email}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="password" class="form-control-label">{{ __('New Password') }}</label>
                                <input type="password" name="password" id="password" placeholder="Enter New Password" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="password-confirm" class=" form-control-label">{{ __('Confirm Password') }}</label>
                                <input type="password" id="password-confirm" name="password_confirmation" placeholder="{{ __('Confirm Password') }}" class="form-control">
                            </div>
                               
                        </div>

                        <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Update
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                            
                </div>
            </div>

           
@endsection

@section('extra.content')
<script>
    
(function ($) {
    // USE STRICT
    "use strict";

try {

}

catch (error) {
    console.log(error);
}
})(jQuery);

</script>
@endsection