<!-- shop -->
<div class="col-md-4 col-xs-6">
    <div class="shop">
        <div class="shop-img">
            <img src="{{ $image }}" alt="">
        </div>
        <div class="shop-body">
            <h3>{{$slot}}<br>Collection</h3>
            <a href="{{ route('store') }}?category={{$category}}" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>
<!-- /shop -->
