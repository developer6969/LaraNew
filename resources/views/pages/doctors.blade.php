@extends('pages.base')

@php

    if ($clinics->count() > 0) {
        $activeClinic = '';    
        foreach ($clinics as $clinic) {
            if ($clinic->id == $activeClinicId) {
                $activeClinic = $clinic;
            }
        }
    }

@endphp

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        <div class="flex-container">
            <div class="card" style="width: 96%">
                <div class="card-body pb-1">
                    <form class="form" action="/doctors/" method="GET">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text font-weight-light text-uppercase text-primary" for="inputGroupSelectClinic">For Clinic</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelectClinic" name="clinic">
                                @foreach ($clinics as $clinic)
                                    <option value="{{ $clinic->id }}"
                                        {{ ($clinic->id == $activeClinicId) ? 'selected=""' : '' }}>
                                        {{ $clinic->nick }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="input-group-append">
                                <input type="submit" class="input-group-text text-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @foreach ($doctors as $doctor)    
                @if ($clinicDoctorIds->contains($doctor->id))
                    <div class="card schedule">
                        <div class="card-header">
                            <img class="schedule-image" src="img/doctor/{{ $doctor->image }}" alt="doctor-image">
                            <p class="h4">{{ $doctor->name }}<small class="block">{{ $doctor->specialisation }}</small></p>
                            <a class="btn btn-link" href="/doctors/{{ $doctor->id }}">View Profile</a>
                            <a class="btn btn-link" href="/book-appointment/{{ $activeClinic->id }}/{{ $doctor->id }}/">Book Appointment</a>
                            <ul class="nav nav-tabs mp-0" role="tablist" title="Change Clinic">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" 
                                    role="button" aria-haspopup="true" aria-expanded="true"></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another</a>
                                        <a class="dropdown-item" href="#">Something</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="carb-body p-1 mb-1">
                            <div class="table-responsive">     
                                <table class="table table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th>Schedule</th>
                                            <th>S</th>
                                            <th>M</th>
                                            <th>T</th>
                                            <th>W</th>
                                            <th>T</th>
                                            <th>F</th>
                                            <th>S</th>
                                            <th>Charge</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sessions as $session)
                                            @if ($some[($doctor->id)-1][0] == $doctor->id)
                                                @for ($i = 0; $i < count($some[($doctor->id)-1][1]); $i++)
                                                    @if ($some[($doctor->id)-1][1][$i] == $session->id)
                                                        <tr>
                                                            <th class="left">{{ $session->start }} - {{ $session->end }}</th>
                                                            {{-- schedule row for each session --}}                 
                                                            @foreach ($schedules as $schedule)
                                                                @if ($schedule->doctor_id == $doctor->id && $schedule->session_id == $session->id) 
                                                                    {{-- availablity coloum for each day--}}
                                                                    <td>
                                                                        @foreach ($days as $day)
                                                                            @if($schedule->day_id == $day->id)
                                                                                @switch($schedule->status)
                                                                                    @case("available")
                                                                                        <i class="far fa-dot-circle available" title="available"></i>
                                                                                        @break
                                                                                    @case("unavailable")
                                                                                        <i class="far fa-dot-circle unavailable" title="currently unavailable"></i>
                                                                                        @break
                                                                                    @default
                                                                                        <i class="far fa-circle off" title="holiday"></i>
                                                                                @endswitch
                                                                            @endif
                                                                        @endforeach
                                                                    </td>
                                                                @endif
                                                            @endforeach
                                                            <td class="td text-dark">Rs. {{ $session->charge }}/-</td>
                                                        </tr>
                                                    @endif
                                                @endfor
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                          </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
@endsection

<style scoped>

    .hide { display:none; }

    #clinic-btn {
        background-color: #dedede !important;
        border: transparent;
    }

    .nav-tabs {
        border-bottom: 0px !important;
        float: right;
        display: inline;
        position: absolute;
        right: 0;
        bottom: 0;
        background-color: #ffffff !important;
        border: 1px solid #dedede;
        border-right: 0 !important;
        border-bottom: 0 !important;
        visibility: hidden;
   }

    .btn-link {
        padding: 0px !important;
        display: block !important;
        text-align: left !important;
    }

    table {
        font-size: 0.8rem;
        text-align: center;
    }

    th {
        padding: 10px 0px 0px 0px !important;
    }

    td {
        padding: 10px 0px 0px 5px !important;
    }

    .available {
        color: green;
    }

    .unavailable {
        color: red;
    }

    .off {
        color: #bebebe;
    }

    .schedule {
        width: 46%;
    }

    @media screen and (max-width: 600px) {
        .schedule {
            width: 100%;
        }
    }

    .schedule-image {
            float: left;
            border-radius: 10px;
            object-fit: cover;
            width: 100px;
            height: 100px;
            margin-right: 20px;
            /* border: 1px solid #bebebe; */
        }

    .block {
        display: block;
        margin-top: 5px;
    }

</style>


{{-- JSON LOOP with json response
    
    @foreach($json['doctors'] as $doc)
        @if ($doc['id'] == $doctor->id)
            @foreach($doc['sessions'] as $session)
                <tr>
                    <th class="text-secondary">
                        {{ $session['start'] }} - {{ $session['end'] }}
                    </th>
                    @foreach($session['days'] as $day)
                        @if ($day == 'available')
                            <td class="pl-0"><i class="far fa-dot-circle green"></i></td>                                                            
                        @else
                            <td class="pl-0"><i class="far fa-circle"></i></td>
                        @endif
                    @endforeach
                    <td class="text-secondary">
                        Rs. {{ $session['charge'] }}/-
                    </td>
                </tr>    
            @endforeach
        @endif
    @endforeach 

--}}


{{--Switch Statement for each session

    @switch($doctor->id)
        @case(1)
            @if (in_array($session->id, $doc1))
                <tr>
                    <th class="left">{{ $session->start }} - {{ $session->end }}</th>                  
                    @foreach ($schedules as $schedule)
                        @if ($schedule->doctor_id == $doctor->id && $schedule->session_id == $session->id) 
                            <td>
                                @foreach ($days as $day)
                                    @if($schedule->day_id == $day->id)
                                        @switch($schedule->status)
                                            @case("available")
                                                <i class="far fa-dot-circle available" title="available"></i>
                                                @break
                                            @case("unavailable")
                                                <i class="far fa-dot-circle unavailable" title="currently unavailable"></i>
                                                @break
                                            @default
                                                <i class="far fa-circle off" title="holiday"></i>
                                        @endswitch
                                    @endif
                                @endforeach
                            </td>
                        @endif
                    @endforeach
                    <td class="td text-dark">Rs. {{ $session->charge }}/-</td>
                </tr>
            @endif
            @break
        @case(2)
            @if (in_array($session->id, $doc2))
                <tr>
                    <th class="left">{{ $session->start }} - {{ $session->end }}</th>                  
                    @foreach ($schedules as $schedule)
                        @if ($schedule->doctor_id == $doctor->id && $schedule->session_id == $session->id) 
                            <td>
                                @foreach ($days as $day)
                                    @if($schedule->day_id == $day->id)
                                        @switch($schedule->status)
                                            @case("available")
                                                <i class="far fa-dot-circle available" title="available"></i>
                                                @break
                                            @case("unavailable")
                                                <i class="far fa-dot-circle unavailable" title="currently unavailable"></i>
                                                @break
                                            @default
                                                <i class="far fa-circle off" title="holiday"></i>
                                        @endswitch
                                    @endif
                                @endforeach
                            </td>
                        @endif
                    @endforeach
                    <td class="td text-dark">Rs. {{ $session->charge }}/-</td>
                </tr>
            @endif
            @break
        @case(3)
            @if (in_array($session->id, $doc3))
                <tr>
                    <th class="left">{{ $session->start }} - {{ $session->end }}</th>                  
                    @foreach ($schedules as $schedule)
                        @if ($schedule->doctor_id == $doctor->id && $schedule->session_id == $session->id) 
                            <td>
                                @foreach ($days as $day)
                                    @if($schedule->day_id == $day->id)
                                        @switch($schedule->status)
                                            @case("available")
                                                <i class="far fa-dot-circle available" title="available"></i>
                                                @break
                                            @case("unavailable")
                                                <i class="far fa-dot-circle unavailable" title="currently unavailable"></i>
                                                @break
                                            @default
                                                <i class="far fa-circle off" title="holiday"></i>
                                        @endswitch
                                    @endif
                                @endforeach
                            </td>
                        @endif
                    @endforeach
                    <td class="td text-dark">Rs. {{ $session->charge }}/-</td>
                </tr>
            @endif
            @break
        @case(4)
            @if (in_array($session->id, $doc4))
                <tr>
                    <th class="left">{{ $session->start }} - {{ $session->end }}</th>                  
                    @foreach ($schedules as $schedule)
                        @if ($schedule->doctor_id == $doctor->id && $schedule->session_id == $session->id) 
                            <td>
                                @foreach ($days as $day)
                                    @if($schedule->day_id == $day->id)
                                        @switch($schedule->status)
                                            @case("available")
                                                <i class="far fa-dot-circle available" title="available"></i>
                                                @break
                                            @case("unavailable")
                                                <i class="far fa-dot-circle unavailable" title="currently unavailable"></i>
                                                @break
                                            @default
                                                <i class="far fa-circle off" title="holiday"></i>
                                        @endswitch
                                    @endif
                                @endforeach
                            </td>
                        @endif
                    @endforeach
                    <td class="td text-dark">Rs. {{ $session->charge }}/-</td>
                </tr>
            @endif
            @break
        @default
    @endswitch 
    
--}}