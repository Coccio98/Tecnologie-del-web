@extends('layouts.app', ['activePage' => 'category-management', 'titlePage'=>'Category Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Categories
        @endslot
        @slot('type_s')
            category
        @endslot
        @slot('href')
            {{route('category.edit',['id'=>0])}}
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
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('category.edit',['id'=>$category->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <a rel="tooltip" class="btn btn-danger btn-link" href="{{route('category.delete',['id'=>$category->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $dashcategories->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
