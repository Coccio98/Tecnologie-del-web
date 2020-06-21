@extends('layouts.app', ['activePage' => 'product-management', 'titlePage'=>'Product Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Products
        @endslot
        @slot('type_s')
            product
        @endslot
        @slot('href')
            {{route('product.edit',['id'=>0])}}
        @endslot
        @slot('t_head')
            <th style="width: 10%">
                Name
            </th>
            <th>
                Price
            </th>
            <th style="width: 50%">
                Summary
            </th>
            <th>
                Sale
            </th>
            <th>
                Brand
            </th>
            <th>
                Subcategories
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($products as $product)
                <tr>
                    <td style="width: 10%">
                        {{$product -> name}}
                    </td>
                    <td>
                        ${{$product -> price}}
                    </td>
                    <td style="width: 50%">
                        {{$product -> summary}}
                    </td>
                    <td>
                        {{$product -> sale}}
                    </td>
                    <td>
                        {{$product -> brand}}
                    </td>
                    <td>
                        {{$product -> subcategory}}
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('product.edit',['id'=>$product->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <a rel="tooltip" class="btn btn-danger btn-link" href="{{route('product.delete',['id'=>$product->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $products->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
