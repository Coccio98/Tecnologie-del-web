@extends('layouts.app', ['activePage' => 'image-management', 'titlePage'=>'Image Management'])
@section('content')
    @component('dashboard.layout')
        @slot('type_p')
            Images
        @endslot
        @slot('type_s')
            image
        @endslot
        @slot('href')
            {{route('image.edit',['id'=>0])}}
        @endslot
        @slot('t_head')
            <th>
                Product
            </th>
            <th>
                Image
            </th>
            <th>
                Main
            </th>
            <th class="text-right">
                Actions
            </th>
        @endslot
        @slot('t_body')
            @foreach($images as $image)
                <tr>
                    <td>
                        {{$image->name}}
                    </td>
                    <td>
                        <img src="{{ asset('storage/'.$image->image)}}" alt="" style="width: 100px">
                    </td>
                    <td>
                        @if($image -> main)
                            <p class="text-primary font-weight-bold"> Main Image </p>
                        @else
                            Minor Image
                        @endif
                    </td>
                    <td class="td-actions text-right">
                        <a rel="tooltip" class="btn btn-success btn-link" href="{{route('image.edit',['id'=>$image->id])}}"
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
                {!!  $images->render()  !!}
            </tr>
        @endslot
    @endcomponent
@endsection
