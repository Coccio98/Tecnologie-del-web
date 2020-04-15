<!-- order product  -->


<div class="order-product">

    <div class="order-information">
        <div class="row">
            <div class="col-sm-3">
                <h4>Delivery date:</h4>
                <h5>Date</h5>
            </div>
            <div class="col-sm-3">
                <h4>Total:</h4>
                <h5>${{$orders->quantity}}</h5>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-dropdown dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h4>Send to:</h4>
                    <h5>{{$orders->address_name}}  <i class="fa fa-arrow-down"></i></h5>
                </button>

                <div class="dropdown-menu">
                    <ul class="link-list">
                        <li><span>{{$orders->address}}</span></li>
                        <li><span>{{$orders->city}}</span></li>
                        <li><span>{{$orders->country}}</span></li>
                        <li><span>{{$orders->phoneNumber}}</span></li>
                    </ul>

                </div>

            </div>

            <div class="col-sm-3">
                <h4>Payment methods</h4>
                <h5>****{{substr($orders->cardNumber,-4)}}</h5>
            </div>
        </div>
    </div>

    <div class="product-img">
        <img src="@if(!empty($orders->image)){{$orders->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
    </div>

    <div class="product-body">
        <p class="product-category">Category</p>
        <h3 class="product-name"><a href="{{ route('product',['id' => 1]) }}">{{$orders->quantity}}x {{$orders->name}}</a></h3>
        @component('partials.reusable.stars')
            @slot('s')
                {{$orders->score}}
            @endslot
        @endcomponent
        <h4 class="product-price">${{$orders->price*(100-$orders->sale)/100}}<del class="product-old-price">-{{$orders->price}}$</del></h4>

        <div class="add-to-cart">
            <a href="{{route('trackMyOrder')}}"><button class="add-to-cart-btn">Track my order</button></a>
        </div>

        <div class="del-to-cart">
            <a href="{{route('order-details')}}"><button class="del-to-cart-btn"> Order Details</button></a>
        </div>
    </div>
</div>
<!-- /order product -->

