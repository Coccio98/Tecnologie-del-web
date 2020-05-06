<div class="product-wishlist col-md-8">
    <div class="product-img">
        {{$image}}
    </div>
    <div class="product-body">
        <p class="product-category">{{$category}}</p>
        <h3 class="product-name"><a href="{{ route('product',['id' => $id]) }}">{{$name}}</a></h3>
        @component('partials.reusable.stars')
            @slot('s')
                {{$s}}
            @endslot
        @endcomponent
        <h4 class="product-price">{{$quantity}}x ${{$price}}</h4>
    </div>
</div>
