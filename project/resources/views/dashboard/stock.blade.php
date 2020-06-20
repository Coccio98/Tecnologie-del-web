@extends('layouts.app', ['activePage' => 'stock-management', 'titlePage'=>'Stock Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Stocks
        @endslot
        @slot('type_s')
            stock
        @endslot
        @slot('t_head')
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
                        {{$stock -> color}}
                    </td>
                    <td>
                        {{$stock -> size}}
                    </td>
                    <td>
                        {{$stock -> number}}
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
