@extends('layouts.app', ['activePage' => 'showcase-management', 'titlePage'=>'Showcase Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Showcases
        @endslot
        @slot('type_s')
            showcase
        @endslot
        @slot('href')
            {{route('showcase.edit',['id'=>0])}}
        @endslot
        @slot('t_head')
            <th>
                Title
            </th>
            <th>
                Subtitle
            </th>
            <th>
                Banner
            </th>
            <th>
                Expire
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($showcases as $showcase)
                <tr>
                    <td>
                        {{$showcase -> title}}
                    </td>
                    <td>
                        {{$showcase -> subtitle}}
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$showcase -> banner)}}" alt="" style="width: 100px">
                    </td>
                    <td>
                        {{$showcase -> expire}}
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('showcase.edit',['id'=>$showcase->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">edit</i>
                            <div class="ripple-container"></div>
                        </a>
                        <a rel="tooltip" class="btn btn-danger btn-link" href="{{route('showcase.delete',['id'=>$showcase->id])}}"
                           data-original-title="" title="">
                            <i class="material-icons">delete</i>
                            <div class="ripple-container"></div>
                        </a>
                    </td>
                </tr>
            @endforeach
            <tr>
                {!!  $showcases->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
