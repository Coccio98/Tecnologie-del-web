@extends('layouts.app', ['activePage' => 'product-management', 'titlePage'=>'Product Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Products
        @endslot
        @slot('type_s')
            product
        @endslot
        @slot('t_head')
            <th>
                Name
            </th>
            <th>
                Price
            </th>
            <th>
                Summary
            </th>
            <th>
                Sale
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($products as $product)
                <tr>
                    <td>
                        {{$product -> name}}
                    </td>
                    <td>
                        ${{$product -> price}}
                    </td>
                    <td>
                        {{$product -> summary}}
                    </td>
                    <td>
                        {{$product -> sale}}
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="#"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endslot
    @endcomponent
@endsection
