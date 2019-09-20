@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        <div class="row">
            <div class="col-md-9">
                <div class="flex-container">
                    @if(count($posts) > 0)
                        @foreach ($posts as $post)
                            @if ($post->active)
                                <div class="card post">
                                    <div class="card-body pb-0">
                                        <img class="card-img-top post-image" src="img/posts/{{ $post->image }}" alt="{{ $post->slug }}">
                                        <h5 class="card-title post-title">{{ $post->title }}</h5>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <strong>Categories</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        @foreach ($categories as $category)
                            <li class="list-group-item">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

<style scoped>
    .read-more {
        float: right;
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

    .post {
        width: 32%;
    }
    .post-image {
        object-fit: cover;
        height: 150px;
    }

    .post-title {
        margin-top: 15px !important;
    }

    .post,
    .list-group-item:hover {
        cursor: pointer;
    }

    .post:hover {
        color: black;
    }

    .list-group-item:hover {
        background-color: #f2f2f2;
    }

    @media screen and (max-width: 600px) {

        .post {
            width: 90%;
        }
        .post-image {
            height: 200px !important;
            object-fit: cover;
        }
    }

</style>






{{-- 
    
    // Left image right containt

     @foreach ($posts as $post)
        @if ($post->active)
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-3">
                        <img src="img/posts/{{ $post->image }}" class="card-img-top post-image" alt="{{ $post->slug }}">
                    </div>
                    <div class="col-md-9">
                        <h5 class="card-title post-title">{{ $post->title }}</h5>
                        <p class="card-text text-justify">{{ subStr($post->body, 0, 610) }}...</p>
                        <a class="read-more" href="#">Read More</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach
    

    
<style scoped>
    .read-more {
        float: right;
    }

    .post-image {
        object-position: -20px;
        object-fit: cover;
        height: 250px;
    }

    @media screen and (max-width: 600px) {
        .post-title {
            margin-top: 15px !important;
            color: red !important;
        }

        .post-image {
            height: 200px !important;
            object-fit: cover;
        }
    }

</style>

    
--}}