@extends('index')

@section('content')

    @component('partials.reusable.section')

        <div class="greyBg">
            <div class="container">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="breadcrumbs">
                                <ul>
                                    <h3 class="title">Track My Order</h3>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="inboxMain" >
                        <div class="row text-center alert alert-info">
                            <div class="col-md-4"><h3>Order No:  1</h3> </div>
                            <div class="col-md-4"><h3>Total: 32$</h3> </div>
                            <div class="col-md-4"><h3> Status: shipped</h3></div>
                        </div>

                        <ol class="progtrckr" data-progtrckr-steps="5">
                            <li class="progtrckr-done">Pending</li>
                            <li class="progtrckr-done">Dispatched </li>
                            <li class="progtrckr-done">Processed</li>
                            <li class="progtrckr-done">Shipped</li>
                            <li class="progtrckr-todo">Delivered</li>
                        </ol>
                        <div></div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    @endcomponent
@endsection
