@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        @if(count($clinics) > 0)
            <div class="card pb-4">
                <div class="card-body mp-0"> 
                    @foreach ($clinics as $clinic)
                        @if ($clinic->id == 1)
                            <img class="image mb-4" src="img/{{ $clinic->photo }}">
                            <div class="pl-4 pr-4 pt-4 pb-1">     
                                <p class="h2">{{ $clinic->name }}<small class="block font-weight-bold lead">{{ $clinic->tagline }}</small></p>
                                <p class="pt-2">{{ $clinic->about }}</p>
                            </div>
                        @endif

                
                            <hr>
                            <div class="clinic">
                                <div class="card-body"> 
                                    {{-- <img class="clinic-image" src="img/{{ $clinic->photo }}"> --}}
                                    <div class="row">
                                        {{-- Left --}}
                                        <div class="col-md-6">                                
                                            {{-- Clinic Name --}}
                                            <p class="h4">
                                                <strong>{{$clinic->name}}</strong>
                                                <small class="block">{{$clinic->tagline}}</small>
                                            </p>
                                            {{-- Clinic Timings --}}
                                            <p class="mt-5"> Clinic Timings :</p>
                                            <p class="h5">{{ $clinic->open }} hrs - {{ $clinic->close }} hrs
                                                <small class="block py-2">
                                                    <em> * Reception Lunch time {{ $clinic->lunch }}.</em>
                                                </small>
                                                <small class="block">
                                                    <em> * For appointments refer schedule.</em>
                                                </small>
                                            </p>
                                            {{-- Clinic Address --}}
                                            <p class="mt-5">Postal Address :</p>
                                            <p class="h5">{{ $clinic->number }}, {{ $clinic->street }}</p>
                                            <p class="h5">{{ $clinic->area }}, {{ $clinic->city }}</p>
                                            <p class="h5">{{ $clinic->state }}, {{ $clinic->country }} - {{ $clinic->pincode }}.</p>
                                        </div>
                                        {{-- Right --}}
                                        <div class="col-md-6">
                                            <p class="h4 right-top">Get directions</p>
                                            <iframe src="{{ $clinic->map }}" width="100%" height="50%" frameborder="" 
                                                style="border: 1px solid grey;" allowfullscreen="true"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                







                    @endforeach
                </div>
            </div>
            <div class="card contact">
                    <div class="card-body" style="height: 85px"> 
                        <p class="h5 font-weight-bold">Call us</p>
                        <p class="mt-2">{{ $clinic->mobile }}</small>
                    </div>
                </div>
                <div class="card contact">
                    <div class="card-body" style="height: 85px"> 
                        <p class="h5">
                            <strong>Mail us</strong>
                            <small class="block mt-2">{{ $clinic->email }}</small>
                        </p>
                    </div>
                </div>
                <div class="card message">
                    <div class="card-body"> 
                        <p class="h5"><strong>Send your message</strong></p>
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <input id="message" class="form-control" type="text" name="message" placeholder="Message">
                            </div>
                            <input type="submit" class="btn btn-primary" style="width: 100% !important">
                        </form>
                    </div>
                </div>
        @endif
    </div>
@endsection



<style scoped>

    .branch {
        list-style: square;   
    }
    .block {
        padding-top: 4px;
        display: block;
    }

    .image {
        float: left;
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: top;
    }

</style>