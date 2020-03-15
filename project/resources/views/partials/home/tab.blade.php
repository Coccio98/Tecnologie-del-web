<!-- section title -->
<div class="col-md-12">
    <div class="section-title">
        <h3 class="title">{{$slot}}</h3>
        <div class="section-nav">
            <ul class="section-tab-nav tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
                <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
                <li><a data-toggle="tab" href="#tab1">Cameras</a></li>
                <li><a data-toggle="tab" href="#tab1">Accessories</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- /section title -->

<!-- Products tab & slick -->
<div class="col-md-12">
    <div class="row">
        <div class="products-tabs">
            <!-- tab -->
            <div id="tab1" class="tab-pane active">
                <div class="products-slick" data-nav="#slick-nav-1">
                    {{$products}}
                </div>
                <div id="slick-nav-1" class="products-slick-nav"></div>
            </div>
            <!-- /tab -->
        </div>
    </div>
</div>
