<!-- Product main img -->
<div class="col-md-5 col-md-push-2">
    <div id="product-main-img">
        @if(sizeof($images)==0)
            <img src="{{ asset('storage/images/no_image.jpg')}}" alt="">
        @endif
        @foreach($images as $image)
            <div class="product-preview">
                <img src="{{ asset('storage/'.$image->image)}}" alt="">
            </div>
        @endforeach
    </div>
</div>
<!-- /Product main img -->

<!-- Product thumb imgs -->
<div class="col-md-2  col-md-pull-5">
    <div id="product-imgs">

        @foreach($images as $image)
            <div class="product-preview">
                <img src="{{ asset('storage/'.$image->image)}}" alt="">
            </div>
        @endforeach
    </div>
</div>
<!-- /Product thumb imgs -->
