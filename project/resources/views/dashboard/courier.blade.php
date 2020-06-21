@extends('layouts.app', ['activePage' => 'courier-management', 'titlePage'=>'Courier Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Couriers
        @endslot
        @slot('type_s')
            courier
        @endslot
        @slot('href')
            {{route('courier.edit',['id'=>0])}}
        @endslot
        @slot('t_head')
            <th>
                Name
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($couriers as $courier)
                <tr>
                    <td>
                        {{$courier -> name}}
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('courier.edit',['id'=>$courier->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <a rel="tooltip" class="btn btn-danger btn-link" href="{{route('courier.delete',['id'=>$courier->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $couriers->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
