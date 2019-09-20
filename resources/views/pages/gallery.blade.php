@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        @if(count($galleries) > 0)
            <div class="flex-container">
                @foreach($galleries as $gallery)
                    <div class="gallery mp-0">
                        <img class="image img-rounded mb-2" src="img/{{ $gallery->thumb }}">
                        <p class="tooltiptext">{{ $gallery->description }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection

<style scoped>

    .gallery {
        width: 24%;
        height: 100%;
        object-fit: cover;
        position: relative;
    }

    .tooltiptext{
        position: absolute;
        top: 0%;
        bottom: 0%;
        left: 0%;
        right: 0%;
        text-align: center;
        line-height: 30px;
        text-transform: capitalize;
        padding: 20px;
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 10px;
        border-radius: 5px;
        color: white;
        background-color: #00000060;
        visibility: collapse;
        text-shadow: 1px 1px #000000;
        display: flex;
        justify-content: center; /* align horizontal */
        align-items: center;
    }

    .gallery:hover .tooltiptext{
        visibility: visible;
    }

    .image {
        width: 100%;
    }

    @media screen and (max-width: 600px) {

        .flex-container {
            margin-top: 20px !important;   
        }

        .gallery {
            width: 48%;
        }
    }

</style>