@extends('layouts.app', ['activePage' => 'brand-management', 'titlePage'=>'Brand Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Brands
        @endslot
        @slot('type_s')
            brand
        @endslot
        @slot('href')
            {{route('brand.edit',['id'=>0])}}
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
            @foreach($brands as $brand)
                <tr>
                    <td>
                        {{$brand -> name}}
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('brand.edit',['id'=>$brand->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <a rel="tooltip" class="btn btn-danger btn-link" href="{{route('brand.delete',['id'=>$brand->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $brands->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
