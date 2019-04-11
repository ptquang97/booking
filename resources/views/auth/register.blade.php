@extends('layouts.app')

@section('content')
    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="card">--}}
    {{--<div class="card-header">{{ __('Register') }}</div>--}}

    {{--<div class="card-body">--}}
    {{--<form method="POST" action="{{ route('register') }}">--}}
    {{--@csrf--}}

    {{--<div class="form-group row">--}}
    {{--<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

    {{--@if ($errors->has('name'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('name') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

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

    {{--<div class="form-group row">--}}
    {{--<label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback" role="alert">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __('Register') }}--}}
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

        <div class="full-content-center animated fadeInDownBig">
            <p class="text-center">
                <a href="#"><img src="https://omi-book-meeting.ominext.co/img/logo-ominext.png"
                                 style="width: 300px;height: 64px;" alt="Logo"></a>
            </p>
            <div class="login-wrap">
                <div class="login-block">
                    <form action="{{ route('register') }}" role="form" id="frmAddUser" method="post">
                        @csrf
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group login-input">
                            <i class="fa fa-user overlay"></i>
                            {{--<input type="text" class="form-control txtFullname text-input" value="" name="name" placeholder="Full name...">--}}
                            <input id="name" type="text"
                                   class="form-control txtFullname text-input{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="name" value="{{ old('name') }}" placeholder="Full name..." autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group login-input">
                            <i class="fa fa-envelope overlay"></i>
                            {{--<input type="text" class="form-control txtEmail text-input" name="email" value="" autocomplete="off" placeholder="Email name...">--}}
                            <input id="email" type="email"
                                   class="form-control txtEmail text-input{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                   name="email" value="{{ old('email') }}" placeholder="Email name..."
                                   autocomplete="off">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group login-input">

                            <i class="fa fa-key overlay"></i>
                            <input id="password" type="password"
                                   class="form-control text-input txtPassword{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                   name="password" autocomplete="off" placeholder="**********">

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif

                        </div>

                        <div class="form-group login-input">

                            <i class="fa fa-key overlay"></i>
                            <input id="password-confirm" type="password"
                                   class="form-control text-input txtConfirmPassword" name="password_confirmation"
                                   autocomplete="off" placeholder="**********">

                        </div>
                        <div class="form-group login-input">
                            <i class="fa fa-users overlay"></i>
                            <select class="form-control" id="selGroupUser" name="group_id" style="padding-left: 30px;">
                                <option value="5">BGĐ</option>
                                <option value="6">HCNS</option>
                                <option value="7">BrSE</option>
                                <option value="8">MOBILE</option>
                                <option value="9">SYSTEM</option>
                                <option value="10">COMTOR</option>
                                <option value="11">TESTER</option>
                                <option value="12">PRODUCT</option>
                                <option value="13">VHDN</option>
                                <option value="14">Công Đoàn</option>
                                <option value="15">Topleaders</option>
                                <option value="16">TTS</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('login') }}" class="btn btn-default">Back</a>
                            </div>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-default btn-block btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
@endsection
