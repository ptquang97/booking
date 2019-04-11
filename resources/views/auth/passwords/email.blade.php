@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">{{ __('Reset Password') }}</div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<form method="POST" action="{{ route('password.email') }}">--}}
                        {{--@csrf--}}

                        {{--<div class="form-group row">--}}
                            {{--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="invalid-feedback" role="alert">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group row mb-0">--}}
                            {{--<div class="col-md-6 offset-md-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--{{ __('Send Password Reset Link') }}--}}
                                {{--</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="container">

    <div class="full-content-center">
        <p class="text-center">
            <a href="#"><img src="https://omi-book-meeting.ominext.co/img/logo-ominext.png" style="width: 300px;height: 64px;" alt="Logo"></a>
        </p>
        <div class="login-wrap animated flipInX">
            <div class="login-block">
                <form role="form" class="forget-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group login-input">
                        <h3 class="form-title font-green" style="color: white;">Forgot Password</h3>
                        <p>Enter your e-mail address below to reset your password.</p>
                    </div>
                    <div class="form-group login-input">
                        <i class="fa fa-user overlay"></i>
                        <input id="email" type="email" class="form-control text-input" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="form-group">
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('login') }}" id="back-btn" class="btn green btn-outline">Back</a>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
