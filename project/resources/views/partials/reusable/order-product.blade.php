<!-- order product  -->


<div class="order-product">

    <div class="order-information">
        <div class="row">
            <div class="col-sm-5">
                <h4>Order made:</h4>
                <h5>Date</h5>
            </div>
            <div class="col-sm-3">
                <h4>Total:</h4>
                <h5>$</h5>
            </div>
            <div class="col-sm-4">
                <h4>Send to:</h4>
                <h5>Name</h5>
            </div>
        </div>
    </div>

    <div class="product-img">
        <img src="{{$slot}}" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">{{$category}}</p>
        <h3 class="product-name"><a href="{{ route('product',['id' => 1]) }}">{{$name}}</a></h3>
        @component('partials.reusable.stars')
            @slot('s')
                {{$s}}
            @endslot
        @endcomponent
        <h4 class="product-price">{{$price}} <del class="product-old-price">{{$old_price}}</del></h4>

        <div class="add-to-cart">
            <a href="{{route('trackMyOrder')}}"><button class="add-to-cart-btn">Track my order</button></a>
        </div>

        <div class="del-to-cart">
            <a href="{{route('order-details')}}"><button class="del-to-cart-btn"> Order Details</button></a>
        </div>
    </div>
</div>
<!-- /order product -->

