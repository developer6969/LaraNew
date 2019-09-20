@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        @if(count($services) > 0)
            <div class="flex-container">
                @foreach($services as $service)
                    <div class="card service">
                        <div class="card-body mp-0">
                            <img class="service-image" src="img/{{ $service->icon }}" alt="{{ $service->slug }}">
                            <p class="service-name">{{ $service->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection 

<style>

.service {
    width: 24%;
    padding: 10px;
    transition: 0.5s;
}

@media screen and (max-width: 600px) {
    .service {
        width: 96%;
    }
}

.service:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.flex-container {
        display: -webkit-box;
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        flex-flow: row wrap;
        -webkit-flex-flow: row wrap;
        justify-content: space-around;
    }
    .service-image {
        float: left;
        width: 50px;
        height: 50px;
        margin-right: 15px;
    }

    .service-name {
        margin: 0;
        padding: 0;
        height: 60px;
        display: flex;
        justify-content: left; /* align horizontal */
        align-items: center;
    }
</style>