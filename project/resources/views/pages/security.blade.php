@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-12 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Access and security</h3>
            </div>

            @component('partials.reusable.security-change')

            @endcomponent

        </div>
    @endcomponent



@endsection
