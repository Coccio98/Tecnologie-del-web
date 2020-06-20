@extends('layouts.app', ['activePage' => 'category-management', 'titlePage'=>'Category Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Categories
        @endslot
        @slot('type_s')
            category
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
            @foreach($dashcategories as $category)
                <tr>
                    <td>
                        {{$category -> name}}
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
