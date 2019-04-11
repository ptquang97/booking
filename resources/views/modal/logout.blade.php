@extends('layouts.app')

@section('logout')
<div class="md-modal md-just-me" id="logout-modal">
    <div class="md-content">
        <h3><strong>Logout</strong> Confirmation</h3>
        <div>
            <p class="text-center">Are you sure want to logout from this awesome system?</p>
            <p class="text-center">
                <button class="btn btn-danger md-close">No!</button>
                <a href="{{ route('register') }}" class="btn btn-success md-close">Yes, I'm sure</a>
            </p>
        </div>
    </div>
</div>
    @endsection