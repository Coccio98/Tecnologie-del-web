@extends('index')

@section('content')

    @component('partials.reusable.section')
        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
        <!-- Aside -->
        <div id="aside" class="col-md-3">
            <div class="aside">
                <h3 class="aside-title">Information</h3>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="#privacy">Privacy Policy</a></li>
                    <li><a href="#terms">Terms & Condition</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            @foreach($informations as $information)
            <div class="info">
                <h3 id="about">{!! $information->section !!}</h3>
                {!! $information->content !!}
            </div>
            @endforeach
        </div>

    @endcomponent

@endsection
