<ul class="reviews">
@foreach($reviews as $review)
    <li>
        <div class="review-heading">
            <h5 class="name">{{$review->name}}</h5>
            <p class="date">{{$review->timestamp}}</p>
            @component('partials.reusable.stars')
                @slot('s')
                    {{$review->rating}}
                @endslot
            @endcomponent
        </div>
        <div class="review-body">
            <p>{{$review->text}}</p>
        </div>
    </li>
@endforeach
</ul>
{!!  $reviews->render('pagination.reviews-pagination')  !!}
