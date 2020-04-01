@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-12 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Access and security</h3>
            </div>

            <div class="profile-security">
                <div class="row security-body">
                    <div class="col-sm-10">
                        <h3>Name:</h3>
                    </div>
                </div>

                <div class="row security-body">
                    <div class="col-sm-10">
                        <h3>Email:</h3>
                    </div>
                </div>

                <div class="row security-body">
                    <div class="col-sm-10">
                        <h3>Telephone number:</h3>
                    </div>
                </div>


                <div class="row security-body">
                    <div class="col-sm-10">
                        <h3>Password:</h3>
                    </div>
                </div>

                <div class="col-sm-2">
                    <button class="modify-btn">Modify</button>
                </div>

                <div class="row security-body">
                    <div class="col-sm-5">
                        <button class="save-btn">Save</button>
                    </div>
                </div>
            </div>
        </div>
    @endcomponent



@endsection
