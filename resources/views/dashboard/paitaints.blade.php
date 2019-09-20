@extends('layouts.panel.main')

@auth
    @section('dashboard')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    {{ dd($paitaints) }}
                    @foreach ($paitaints as $paitaint)
                        <li>{{ $paitaint }}</li>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
@endauth
