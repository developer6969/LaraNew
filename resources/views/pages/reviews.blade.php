@extends('pages.base')

@section('page')
    <div class="container mt-5 pt-4 mb-5">
        @if(count($reviews) > 0)
            <div class="flex-container">
                @foreach($reviews as $review)
                    <div class="card review">
                        <div class="card-body pb-0">
                            <img class="review-image" src="img/avatar04.png">
                            <div class="review-star">
                                @for ($i = 0; $i < $review->star; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                            </div>
                            <p class="lead mb-0">{{ $review->title }}</p>
                            <p>{{ $review->comment }}</p>
                            <p class="inline text-sm">views <span>{{ $review->views }}</span></p>
                            {{-- <p class="inline text-sm">: {{ $review->view }}</p> --}}
                            <p class="inline text-sm">On <span>{{ substr($review->created_at, 0, 10) }}</span></p>
                            <p class="inline text-sm">By <span>Rajeev Kapoor</span></p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection


<style scoped>

    .inline>span {
        font-weight: 600;
        color: darkslategray;
        margin-right: 20px;
    }

    .inline {
        float: right;
        display: inline;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .review-image {
        width: 60px;
        height: 60px;
        float: left;
        border-radius: 50%;
        margin-right: 20px;
    }

    .review-star {
        float: right;
    }

    .review-star>i {
        color: goldenrod;
    }

</style>