@extends('layouts.app', ['activePage' => 'subcategory-management', 'titlePage'=>'Subategory Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Subcategories
        @endslot
        @slot('type_s')
            subcategory
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
            @foreach($dashsubcategories as $subcategory)
                <tr>
                    <td>
                        {{$subcategory -> name}}
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
