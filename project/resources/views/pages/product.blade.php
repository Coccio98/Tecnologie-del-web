@extends('index')

@section('content')

    @component('partials.reusable.breadcrumb')
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('store')}}">All Categories</a></li>
        <li><a href="{{ route('store') }}?category={{$product->macroid}}">{{$product->macrocategory}}</a></li>
        <li><a href="">{{$product->category}}</a></li>
        <li class="active">{{$product->name}}</li>
    @endcomponent

    @component('partials.reusable.section')
        @include('partials.product.images')

        @include('partials.product.details')

        @include('partials.product.product-tab')
    @endcomponent

@endsection
