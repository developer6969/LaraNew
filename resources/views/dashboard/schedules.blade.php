@extends('layouts.panel.main')

@auth
    @section('dashboard')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Schedules</div>
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                            @guest
                            @if (Route::has('register'))
                                <a class="btn btn-primary" href="{{ route('register') }}" style="font-size: 20px;">{{ __('Get Started') }}</a>
                            @endif
                            @else
                                <a href="/posts/create" class="btn btn-primary" style="font-size: 20px;">Create New Post</a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endauth
