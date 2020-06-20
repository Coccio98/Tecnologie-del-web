@extends('layouts.app', ['activePage' => 'stock-management', 'titlePage'=>'Stock Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Stocks
        @endslot
        @slot('type_s')
            stock
        @endslot
        @slot('href')
            {{route('stock.edit',['id'=>0])}}
        @endslot
        @slot('t_head')
            <th>
                Product
            </th>
            <th>
                Color
            </th>
            <th>
                Size
            </th>
            <th>
                Number
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($stocks as $stock)
                <tr>
                    <td>
                        {{$stock -> name}}
                    </td>
                    <td>
                        {{$stock -> color}}
                    </td>
                    <td>
                        {{$stock -> size}}
                    </td>
                    <td>
                        {{$stock -> number}}
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('stock.edit',['id'=>$stock->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <a rel="tooltip" class="btn btn-danger btn-link" href="#"
                           data-original-title="" title="">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $stocks->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
