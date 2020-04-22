<div class="row">
    <!-- product -->
    @for($i=0; $i<sizeof($products); $i++)
        <div class="col-md-4 col-xs-6">
            @component('partials.reusable.product-overview')
                @slot('image')
                    <img src="@if(!empty($products[$i]->image)){{$products[$i]->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
                    <div class="product-label">
                        @if($products[$i]->sale != 0)
                            <span class="sale">-{{$products[$i]->sale}}%</span>
                        @endif
                        @if($now->diffInDays($products[$i]->created_at) <= 3)
                            <span class="new">NEW</span>
                        @endif
                    </div>
                @endslot
                @slot('category')
                    @foreach($productsCategories[$i] as $productsCategory)
                        {{$productsCategory->name}}
                    @endforeach
                @endslot
                @slot('name')
                    {{$products[$i]->name}}
                @endslot
                @slot('id')
                    {{$products[$i]->id}}
                @endslot
                @slot('price')
                    ${{$products[$i]->price*(100-$products[$i]->sale)/100}}
                @endslot
                @slot('old_price')
                    ${{$products[$i]->price}}
                @endslot
                @slot('s')
                    {{$products[$i]->score}}
                @endslot
            @endcomponent
        </div>
        @if((($i+1) % 3)==0 && ($i+1 % 2)==0)
            <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
        @elseif((($i+1) % 2)==0)
            <div class="clearfix visible-sm visible-xs"></div>
        @elseif((($i+1) % 3)==0)
            <div class="clearfix visible-lg visible-md"></div>
    @endif
@endfor
<!-- /product -->
</div>
<!-- store bottom filter -->
<div class="store-filter clearfix">
    {!!  $products->render('pagination.store-pagination')  !!}
</div>
<!-- /store bottom filter -->
