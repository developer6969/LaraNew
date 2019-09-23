@extends('layouts.website.main')

@section('content')
    <div class="container">
        <div class="left-half">
            <article>
                <img src="img/cover_1200.png">
            </article>
        </div>
        <div class="right-half">
            <article>
                <div class="text-center">
                    <a href="/" class="btn app-brand">Clinica</a>
                </div>
                <div class="flex-container">
                    @if(!empty($menus) && count($menus) > 0)
                        @foreach ($menus as $menu)
                            @if ($menu->active)
                                <a class="menu-item card" href="{{ $menu->link }}">
                                    <i class="menu-icon {{ $menu->icon }}"></i>
                                    <p class="menu-lable">{{ $menu->name }}</p>
                                </a>
                            @endif
                        @endforeach
                    @endif
                </div>
                <div class="text-center">
                    <a href="/my-appointments" class="btn book-btn">Book Appointment</a>
                </div>
            </article>
        </div>
    </div>
@endsection

<style>
    .app-brand {
        margin-bottom: 35px;
        width: 50%;
        font-size: 2rem !important;
        text-transform: uppercase;
        letter-spacing: 4;
        /* border: 1px solid red !important; */
        border-radius: 5px !important;
        background-color: #ffffff70 !important;
    }

    .book-btn {
        margin-top: 40px;
        width: 80%;
        height: 50px;
        color: darkslategray !important;
        padding-top: 10px !important;
        font-weight: 700 !important;
        font-size: 1.2rem !important;
        border: 1px solid #b2b2b240 !important;
    }

    .book-btn:hover {
        color: #2B60DE !important;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    div {
        /* height: calc(100% - 55px); */
        height: 100%;
    }

    article {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
    }

    /* Pattern styles */
    .container {
        display: table;
        width: 100%;
    }

    .left-half {
        position: absolute;
        left: 0px;
        width: 50%;
    }

    .right-half {
        position: absolute;
        right: 0px;
        width: 50%;
    }

    @media screen and (max-width: 600px) {
        .left-half {
            width: 100%;
        }

        .right-half {
            top: 50%;
            width: 100%;
        }
    }

</style>

<style>
    .menu-item {
        height: auto;
        width: 25%;
        margin: 2px;
        padding-top: 15px;
        text-align: center;
        transition: 0.5s;
        color: darkslategray;
        text-decoration: none !important;
    }

    .menu-item:hover {
        color: #2B60DE;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .menu-icon {
        font-size: 3em; 
        color: "Dodgerblue";
    }

    .menu-lable {
        font-size: 1.1rem;
        font-weight: 700;
        margin-top: 5px;
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

    .flex-item {
        background: tomato;
        padding: 5px;
        width: 200px;
        height: 150px;
        margin-top: 10px;
        
        /* line-height: 150px; */
        /* color: white;
        font-weight: bold;
        font-size: 3em; */
        text-align: center;
    }


</style>