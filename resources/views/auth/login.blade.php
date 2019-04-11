@extends('layouts.app')

@section('content')

    <body class="fixed-left login-page  vsc-initialized pace-done widescreen">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
    <div class="container">

        <div class="full-content-center">
            <p class="text-center">
                <a href="#"><img src="https://omi-book-meeting.ominext.co/img/logo-ominext.png"
                                 style="width: 300px;height: 64px;" alt="Logo"></a>
            </p>
            <div class="login-wrap animated flipInX">
                <div class="login-block">
                    <form action="{{ route('login') }}" method="POST" role="form">
                        @csrf
                        {{--<input type="hidden" name="_token" value="">--}}
                        {{--@if($errors->has('errorlogin'))--}}
                        {{--<div class="alert alert-danger">--}}
                        {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>--}}
                        {{--{{$errors->first('errorlogin')}}--}}
                        {{--</div>--}}
                        {{--@endif--}}
                        <div class="form-group login-input">
                            <i class="fa fa-user overlay"></i>
                            <input type="email" class="form-control text-input" id="email" placeholder="Email" name="email"
                                   value="{{old('email')}}">
                            {{--@if($errors->has('email'))--}}
                            {{--<p style="color:red">{{$errors->first('email')}}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group login-input">
                            <i class="fa fa-key overlay"></i>
                            <input type="password" class="form-control text-input" id="password" placeholder="Password"
                                   name="password" value="{{old('password')}}" autocomplete>
                            {{--@if($errors->has('password'))--}}
                                {{--<p style="color:red">{{$errors->first('password')}}</p>--}}
                            {{--@endif--}}
                        </div>
                        <div class="form-group">
                            @if($errors->has('email') || $errors->has('password'))
                                <div id="formMessage" class="alert alert-danger">
                                    <strong>Username or password is incorrect.</strong>
                                </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                {!! csrf_field() !!}
                                <button type="submit" class="btn btn-success btn-block">Login</button>
                            </div>
                            <div class="col-sm-6">
                                {{--<a href="#" class="btn btn-default btn-block">Register</a>--}}
                                @if (Route::has('register'))
                                    <a  class="btn btn-default btn-block" href="{{ route('register') }}" id="register">
                                        {{ __('Register') }}
                                    </a>
                                @endif
                            </div>
                            <div class="col-sm-12">
                                {{--<a href="#" id="forget-password" class="forget-password btn btn-default btn-block">Forgot--}}
                                {{--Password?</a>--}}
                                @if (Route::has('password.request'))
                                    <a  class="forget-password btn btn-default btn-block" href="{{ route('password.request') }}" id="forget-password">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>


    </div>
    <!-- the overlay modal element -->
    <div class="md-overlay"></div>
    <!-- End of eoverlay modal -->

    </body>
@endsection
