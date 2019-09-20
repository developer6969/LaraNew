@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        @if (count($members) > 0)
            @foreach ($members as $member)
                <p>{{ $member->name }}</p>
            @endforeach
        @endif
    </div>
@endsection

<style scoped>

    .clinic>.card-body>div {
        padding: 30px;   
    }
    .clinic-image {
        float: left;
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: top;
        /* margin-bottom: 30px; */
    }

    .clinic-title {
        font-size: 22px;
        font-weight: 700;
    }

    .heading {
        font-size: 18px;
        margin-top: 20px; 
        margin-bottom: 10px;
        font-variant: small-caps;
    }

    .block {
        display: block;
    }

</style>


{{-- 

@if(count($clinics) > 0)
    @foreach($clinics as $clinic)
        @if ($clinic->id == 1)
            <div class="card clinic">
                <div class="card-body mp-0"> 
                    <img class="clinic-image" src="img/{{ $clinic->photo }}">
                    <div class="row">
                        {{-- Left --}
                        <div class="col-md-6">                                
                            {{-- Clinic Name --}
                            <p class="h4">
                                <strong>{{$clinic->name}}</strong>
                                <small class="block">{{$clinic->tagline}}</small>
                            </p>
                            {{-- Clinic Timings --}
                            <p class="mt-5"> Clinic Timings :</p>
                            <p class="h5">{{ $clinic->open }} hrs - {{ $clinic->close }} hrs
                                <small class="block py-2">
                                    <em> * Reception Lunch time {{ $clinic->lunch }}.</em>
                                </small>
                                <small class="block">
                                    <em> * For appointments refer schedule.</em>
                                </small>
                            </p>
                            {{-- Clinic Address --}
                            <p class="mt-5">Postal Address :</p>
                            <p class="h5">{{ $clinic->number }}, {{ $clinic->street }}</p>
                            <p class="h5">{{ $clinic->area }}, {{ $clinic->city }}</p>
                            <p class="h5">{{ $clinic->state }}, {{ $clinic->country }} - {{ $clinic->pincode }}.</p>
                        </div>
                        {{-- Right --}
                        <div class="col-md-6">
                            <p class="h4 right-top">Get directions</p>
                            <iframe src="{{ $clinic->map }}" width="100%" height="50%" frameborder="" 
                                style="border: 1px solid grey;" allowfullscreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
@endif
    
--}}