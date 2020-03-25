<!-- order product  -->


<div class="order-product">

    <div class="order-information">
    <div class="row">
        <div class="col-sm-5">
            <h4>Ordine effettuato il:</h4>
            <h5>Date</h5>
        </div>
        <div class="col-sm-3">
            <h4>Totale</h4>
            <h5>€</h5>
        </div>
        <div class="col-sm-4">
            <h4>Invia a</h4>
            <h5>Nome</h5>
        </div>
    </div>
    </div>

    <div class="product-img">
        <img src="{{$slot}}" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">{{$category}}</p>
        <h3 class="product-name"><a href="{{ route('product') }}">{{$name}}</a></h3>
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
            <button class="del-to-cart-btn"> Order Details</button>
        </div>

    </div>
</div>
<!-- /order product -->

