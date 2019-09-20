@extends('layouts.panel.main')

@auth
    @section('dashboard')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Appointment</div>
                        <div class="card-body">
                           {{ dd($appointments) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endauth
