<!-- section title -->
<div class="col-md-12">
    <div class="section-title">
        <h3 class="title">{{$slot}}</h3>
        <div class="section-nav">
            <ul class="section-tab-nav tab-nav">
                <li class="active"><a data-toggle="tab" href="#tab1-{{$n}}">Laptops</a></li>
                <li><a data-toggle="tab" href="#tab2-{{$n}}">Smartphones</a></li>
                <li><a data-toggle="tab" href="#tab3-{{$n}}">Cameras</a></li>
                <li><a data-toggle="tab" href="#tab4-{{$n}}">Accessories</a></li>
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
                {{$products}}
            <!-- /tab -->
        </div>
    </div>
</div>
