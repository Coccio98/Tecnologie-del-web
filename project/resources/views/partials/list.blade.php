<div class="col-md-4 col-xs-6">
    <div class="section-title">
        <h4 class="title">{{$slot}}</h4>
        <div class="section-nav">
            <div id="slick-nav-{{$n}}" class="products-slick-nav"></div>
        </div>
    </div>

    <div class="products-widget-slick" data-nav="#slick-nav-{{$n}}">
        {{$widgets}}
    </div>
</div>