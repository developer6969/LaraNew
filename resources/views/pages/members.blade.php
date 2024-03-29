@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4">
        <my-members
            bloods = '{{ $bloods }}'
            genders = '{{ $genders }}'
            members = '{{ $members }}'
            healths = '{{ $healths }}'
            records = '{{ $records }}'>
        </my-members>
    </div>
@endsection

<style scoped>

    .hidden {
        display: none;
    }

    .card {
        border-radius: 0px !important;
        box-shadow: 0 0 0px rgba(0, 0, 0, 0), 0 0px 0px rgba(0, 0, 0, 0) !important;
    }

    .list-group-title {
        text-transform: uppercase;
        font-weight: bolder;
    }

    .list-group-item {
        border-radius: 0px !important;
    }

    .list-group-item:hover {
        font-weight: bolder !important;
    }

    .active {
        border: 0px !important;
        color: black !important;
        font-weight: bolder !important;
        background-color: #b2b2b250 !important;
    }

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
